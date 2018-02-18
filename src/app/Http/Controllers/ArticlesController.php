<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     *Create a new article controller instance
     * ArticlesController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->capture()->has('sortby')
        //$request->capture()->input('orderby')=='views'

        if ($request->capture()->input('orderby') == 'views') {
            $articles = Article::published()->orderBy('views', 'desc')->paginate(15);
            $articles->appends(['orderby' => 'views']);
        } else {
            $articles = Article::published()->orderBy('created_at', 'desc')->paginate(15);
        }

        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        $article -> save();

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $article->views += 1;
        $article->save();
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article:: findOrFail($id);
        $currentUserId = Auth::user()->id;
        if (($article->user_id == $currentUserId) || ($currentUserId == 1)) {
            $tags = Tag::lists('name', 'id');
            return view('article.edit', ['article' => $article, 'tags' => $tags]);
        } else {
            return redirect('articles');
        }
    }

    /**
     * Update the specified resource in storage.
     * @param ArticleRequest $request
     * @param                $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article:: findOrFail($id);
        $currentUserId = Auth::user()->id;
        if (($article->user_id == $currentUserId) || ($currentUserId == 1)) {
            if (!$request->has('published')) {
                $request->merge(['published' => 0]);
            }
            $article->update($request->all());
            $this->syncTags($article, !$request->input('tag_list') ? [] : $request->input('tag_list'));
        }
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article:: findOrFail($id);
        $article->categories()->detach();
        $article->delete();
        return redirect('articles');
    }

    /**
     *Sync up the list of tags in the database
     */
    private function syncTags(Article $article, array $tags)
    {
        $tagSync = $this->checkTags($tags);
        $article->tags()->sync($tagSync);
    }

    /**
     * Check tags, if new - create
     * @param $tags
     *
     * @return array
     */
    function checkTags($tags)
    {
        // extract the input into separate numeric and string arrays
        $currentTags = array_filter($tags, 'is_numeric');
        $newTags = array_diff($tags, $currentTags);

        // Create a new tag for each string in the input and update the current tags array
        foreach ($newTags as $newTag) {
            if ($tag = Tag::create(['name' => $newTag]))
                $currentTags[] = $tag->id;
        }

        return $currentTags;
    }

}

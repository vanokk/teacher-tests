<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_teacher = Role::where('name', 'teacher')->first();
        $role_learner  = Role::where('name', 'learner')->first();
        $teacher = new User();
        $teacher->name = 'Admin';
        $teacher->email = 'admin@gmail.com';
        $teacher->password = bcrypt('123456');
        $teacher->save();
        $teacher->roles()->attach($role_teacher);

        $learner = new User();
        $learner->name = 'Иванов Иван';
        $learner->email = 'ivanov-ivan@gmail.com';
        $learner->password = bcrypt('123456');
        $learner->save();
        $learner->roles()->attach($role_learner);
    }
}

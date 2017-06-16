<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());
        $user = User::find(1);
        $user->name = 'chenwentian';
        $user->is_admin=true;
        $user->email = '574126099@qq.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}

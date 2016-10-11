<?php

use Illuminate\Database\Seeder;
use App\Model\User;
use App\Model\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $role_user = Role::where('nama', 'User')->first();
         $role_author = Role::where('nama', 'Author')->first();
         $role_admin = Role::where('nama', 'Admin')->first();

         $user = new User();
         $user->name = 'Admin';
         $user->nick_name = 'Admin';
         $user->email = 'admin@roceto.com';
         $user->password = Hash::make('admin');
         $user->avatar = 'images/users/admin.jpg';
         $user->is_admin = 1;
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_admin);

         $user = new User();
         $user->name = 'Adang';
         $user->nick_name = 'Adang';
         $user->email = 'adang@roceto.com';
         $user->password = Hash::make('adang');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Nisa';
         $user->nick_name = 'Nisa';
         $user->email = 'nisa@roceto.com';
         $user->password = Hash::make('nisa');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Abid';
         $user->nick_name = 'Abid';
         $user->email = 'abid@roceto.com';
         $user->password = Hash::make('abid');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Majid';
         $user->nick_name = 'Majid';
         $user->email = 'majid@roceto.com';
         $user->password = Hash::make('majid');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Dika';
         $user->nick_name = 'Dika';
         $user->email = 'dika@roceto.com';
         $user->password = Hash::make('dika');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Unggul';
         $user->nick_name = 'Unggul';
         $user->email = 'unggul@roceto.com';
         $user->password = Hash::make('unggul');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Izzudin';
         $user->nick_name = 'Izzudin';
         $user->email = 'izzudin@roceto.com';
         $user->password = Hash::make('izzudin');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);

         $user = new User();
         $user->name = 'Tica';
         $user->nick_name = 'Tica';
         $user->email = 'tica@roceto.com';
         $user->password = Hash::make('tica');
         $user->avatar = 'images/users/admin.jpg';
         $user->activated = 1;
         $user->save();
         $user->role()->attach($role_user);
    }
}

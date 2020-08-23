<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index ()
    {


        // User Eloquent ORM https://laravel.com/docs/7.x/eloquent

        // Create new record
        // $user = new User();        
        // $user->name = 'Olin';
        // $user->email = 'olin@mail.com';
        // $user->password = bcrypt('123456');
        // $user->save();

        // Retrieve specific id = 2
        // return User::find(2);

        // Delete specific id = 2
        // User::find(2)->delete();

        // delete user without finding it first, use destroy, also can delete multiple ids
        // User::destroy(1,2,3);

        // Update
        // User::where('id',5)->update(['name' => 'Olin (Manu\'s beloved wife)']);
        User::where('id',4)->update(['password' => bcrypt('12345abc')]);

        //return all user records
        return User::all();  

        
        

        // dd($user);

        
        // CRUD with DB facade

        // Create  new user
        // DB::insert('insert into users (name, email, password) values (?,?,?)', ['manu', 'manuhal@mail.com', 'password']);

        // Udapte user
        // DB::update('update users set name = ? where id = 1', ['mnuel']);

        // Delete all users
        // DB::delete('delete from users');

        // Retreive users
        // $users = DB::select('select * from users');        
        // return $users;
         
        // return view('users');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'john122'
        ];
    
        DB::insert('insert into users (name, email, password) values (?, ?, ?)', $data);
    
        // or using the query builder
        DB::table('users')->insert($data);
        
        }
}

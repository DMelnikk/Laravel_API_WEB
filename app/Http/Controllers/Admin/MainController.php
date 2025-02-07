<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
//        User::query()->create([
//            'name'=>'admin',
//            'email'=>'admin@gmail.com',
//            'password'=>'123',
//        ]);
        $products = Product::query()->count();
        return view('admin.index', compact('products'));
    }
}

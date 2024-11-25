<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
use App\models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $products = Product::count();
        $users = User::count();

        return view('pages.admin.index', compact('products', 'users'));
    }
}
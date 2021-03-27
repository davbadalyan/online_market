<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;

class RequestController extends Controller
{
    public function home() {
        $products = new Product();
        return view('home', ['data' => $products->inRandomOrder()->take(9)->get()]);
    }

    public function products() {
        $products = new Product();
        return view('products', ['data' => $products->orderBy('id', 'desc')->get()]);
    }

    public function showOneProduct($id) {
        $products = new Product;
        return view('product-data-one', ['data' => $products->find($id)]);
    }

    public function about() {
        return view('about');
    }

    public function signIn() {
        return view('signIn');
    }

    public function signIn_check(Request $req) {
        $valid = $req->validate([
            'email' => 'required|email|min:7|unique:users,email,'.$user->id,
            'password' => 'required|min:6|max:32'
        ]);

        $user = new Contact();
        $user->email = $req->input('email');
        $user->password = $req->input('password');

        $user->save();

        return redirect()->route('home');
    }

    
    public function signUp() {
        return view('signUp');
    }

    public function signUp_check(Request $req) {
        $valid = $req->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|min:7|max:100|unique:contacts,email,'.$req->id,
            'password' => 'required|min:6|max:32|confirmed',
            'password_confirmation' => 'min:6|max:32'
        ]);

        $user = new Contact();
        $user->name = strtolower(trim($req->input('name')));
        $user->email = strtolower(trim($req->input('email')));
        $user->password = md5($req->input('password'));

        $user->save();

        return redirect()->route('signIn');
    }
}

@extends('layout')

@section('title')
    About us
@endsection

@section('main')
    <h1>About Us</h1>
    <p>Laravel's Built-in Browser Authentication Services
Laravel includes built-in authentication and session services which are typically 
accessed via the Auth and Session facades. These features provide cookie based 
authentication for requests that are initiated from web browsers. They provide 
methods that allow you to verify a user's credentials and authenticate the user. 
In addition, these services will automatically store the proper authentication data 
in the user's session and issue the user's session cookie. A discussion of how to 
use these services is contained within this documentation.

Application Starter Kits

As discussed in this documentation, you can interact with these authentication services 
manually to build your application's own authentication layer. However, to help you get 
started more quickly, we have released free packages that provide robust, modern scaffolding 
of the entire authentication layer. These packages are Laravel Breeze, Laravel Jetstream, and Laravel Fortify.

Laravel Breeze is a simple, minimal implementation of all of Laravel's authentication features, 
including login, registration, password reset, email verification, and password confirmation. 
Laravel Breeze's view layer is comprised of simple Blade templates styled with Tailwind CSS. 
To get started, check out the documentation on Laravel's application starter kits.</p>
@endsection</p>
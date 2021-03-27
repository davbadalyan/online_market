@extends('layout')

@section('title')
    Sign In
@endsection

@section('main')
    <div class="mt-5 col-4 mx-auto bg-info p-2 rounded">
        <h2 class="text-center pb-2">Login form</h2>

        @if($errors->any())
            <div class="alert-danger rounded">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/signIn/check" method="post" class="">
        @csrf
            <input type="text" name="email" id="email" placeholder="Please enter your email" class="form-control"><br>
            <input type="password" name="password" id="password" placeholder="Your password" class="form-control"><br>
            <button type="submit" class="btn btn-warning form-control d-block col-4 mx-auto"><b>Sign In</b></button>
        </form>
    </div>
    
@endsection
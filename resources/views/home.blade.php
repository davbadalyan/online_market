@extends('layout')

@section('title')
    Main page
@endsection

@section('main')
    <h1 class="text-center mb-5">Watch Collection</h1>
    <div class="row justify-content-md-center">
        @foreach($data as $el)
            <div class="col-3 bg-light m-1 pt-2 text-dark rounded">
                <a href="" class="text-decoration-none"><div class="img-thumbnail rounded"><img src="/Images/{{ $el->id }}.jfif" alt="" title="" class="d-block mh-50 mx-auto" style="height: 200px;"></div></a>
                <a href="" class="text-dark text-decoration-none"><h3 class="d-block mb-0">{{ $el->name }}</h3></a>
                <p class="d-block mb-0">${{ $el->price }}</p>
            </div>
        @endforeach
    </div>
    
    
@endsection
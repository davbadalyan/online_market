@extends('layout')

@section('title')
    One product
@endsection

@section('main')
    <h1 class="text-center mb-5">{{ $data->name }}</h1>
    <div class="">
        @foreach($data as $el)
            <div class="bg-secondary m-1 text-dark alert">
                <div class="bg-light m-0.5">
                    <div class="img-thumbnail d-inline-block my-auto col-2 rounded" style="width: 150px"><img src="/Images/{{ $el->id }}.jfif" alt="" title="" class="d-block mh-50 mx-auto" style="height: 100px;"></div>
                    <h3 class="d-inline-block col-2 mb-0">{{ $el->name }}</h3>
                    <h2 class="d-inline-block mb-0 col-1 text-danger" style="vertical-align: top">${{ $el->price }}</h2>
                    <p class="d-inline-block mb-0 col-5">{{ $el->discription }}</p>
                    <div class="d-inline-block mb-0 col-2">
                        <a href="{{ route('product-data-one', $el->id) }}"><button class="btn btn-warning ml-4 mb-4">Buy Now</button></a>
                        <p class="ml-2"><small>{{ $el->created_at }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    
@endsection
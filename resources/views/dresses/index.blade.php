@extends('layouts.app')

@section('title', 'Homepage')
    
@section('content')
    <h1>La mia pagina vestiti</h1>

    <div class="container-fluid dresses_container">
        @foreach ($dresses as $dress)
            <a class="dress_card" href="{{ route('dresses.show', ['dress' => $dress['id']]) }}">
                <h3>{{$dress->name}}</h3>
                <img src="{{$dress->img_path}}" alt="">
                <p>{{$dress->description}}</p>
            </a>
            
        @endforeach
    </div>
    
@endsection
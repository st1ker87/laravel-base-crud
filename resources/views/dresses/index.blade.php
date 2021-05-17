@extends('layouts.app')

@section('title', 'Homepage')
    
@section('content')
    <h1>La mia pagina vestiti</h1>

    <a href="{{route('dresses.create')}}" class="btn btn-primary">Inserisci un prodotto</a>

    <div class="container-fluid dresses_container">
        @foreach ($dresses as $dress)
            <div class="dress_card">
                <a href="{{ route('dresses.show', ['dress' => $dress['id']]) }}">
                    <h3>{{$dress->name}}</h3>
                    <img src="{{$dress->img_path}}" alt="">
                    <p>{{$dress->description}}</p>
                </a>
                <a href="{{ route('dresses.edit', ['dress' => $dress['id']]) }}">Modifica info prodotto</a>
                <form action="{{ route('dresses.destroy', $dress->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Cancella</button>
                </form>
            </div>
            
        @endforeach
    </div>
    
@endsection
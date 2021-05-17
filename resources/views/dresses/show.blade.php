@extends('layouts.app')

@section('title', '{{$dress["name"]}}')
    
@section('content')

    <div class="container-fluid dress_show_container">

        <h3>{{$dress->name}}</h3>
        <h4>{{$dress->brand}}</h4>
        <img src="{{$dress->img_path}}" alt="">
        <p>{{$dress->description}}</p>
            
    </div>
    
@endsection
@extends('layouts.app')

@section('title', 'Modifica Vestito')
    
@section('content')

    <div class="container-fluid dress_show_container">

        <h2>Inserisci un nuovo prodotto:</h2>

        <form action="{{route('dresses.update')}}" method="post">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul> 
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$dress -> name}}">
            </div>
            <div class="form-group">
                <label for="color">color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{$dress -> color}}">
            </div>
            <div class="form-group">
                <label for="size">size</label>
                <input type="text" class="form-control" id="size" name="size" value="{{$dress -> size}}">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$dress -> description}}">
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$dress -> price}}">
            </div>
            <div class="form-group">
                <label for="season">season</label>
                <input type="text" class="form-control" id="season" name="season" value="{{$dress -> season}}">
            </div>
            <div class="form-group">
                <label for="img_path">image link</label>
                <input type="text" class="form-control" id="img_path" name="img_path" value="{{$dress -> img_path}}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Edit Product</button>
                </div>
            </div>
        </form>
            
    </div>
    
@endsection
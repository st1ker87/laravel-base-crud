@extends('layouts.app')

@section('title', 'Homepage')
    
@section('content')

    <div class="container-fluid dress_show_container">

        <h2>Inserisci un nuovo prodotto:</h2>

        <form action="{{route('dresses.store')}}" method="post">
            @csrf
            @method('POST')

            @if ($errors->any())
                <div class="alert alert-danger">
                    @dump($errors)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul> 
                </div>
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <select name="brand" id="brand" class="form-control">
                    <option value="">-- Seleziona --</option>
                    <option value="nike">Nike</option>
                    <option value="adidas">Adidas</option>
                    <option value="puma">Puma</option>
                </select>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{old('color')}}">
            </div>
            <div class="form-group">
                <label for="size">Size</label>
                <input type="text" class="form-control" id="size" name="size" value="{{old('size')}}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="season">Season</label>
                <input type="text" class="form-control" id="season" name="season" value="{{old('season')}}">
            </div>
            <div class="form-group">
                <label for="img_path">Image Link</label>
                <input type="text" class="form-control" id="img_path" name="img_path" value="{{old('img_path')}}">
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Add new Product</button>
                </div>
            </div>
        </form>
            
    </div>
    
@endsection
@extends('layouts.app')



@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="pt-3 pb-5">Aggiungi un nuovo Comic</h1>

                 @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                           <li>{{$error}}</li>
                        @endforeach
                    </ul>

                 </div>

                 @endif





                <form class="pb-5" action="{{ route('Guest.comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="from-label">Titolo:</label>
                        <input type="text" name="title" id="title" class="form-control"
                        value="{{old('title')}}">

                    </div>

                    <div class="mb-3">
                        <label for="price" class="from-label">Price:</label>
                        <input type="text" name="price" id="price" class="form-control"
                        value="{{old('price')}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="from-label">Series:</label>
                        <input type="text" name="series" id="series" class="form-control"
                        value="{{old('series')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="from-label">Sale Date:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control"
                        value="{{old('sale_date')}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="from-label">Image url:</label>
                        <input type="text" name="thumb" id="thumb" class="form-control"
                        value="{{old('thumb')}}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="from-label">Type:</label>
                        <input type="text" name="type" id="type" class="form-control"
                        value="{{old('type')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="from-label">Descrizione:</label>
                        <textarea type="text" name="description" id="description" class="form-control">{{old('description')}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary ">Crea</button>
                    <button type="reset" class="btn btn-danger">pulisci form</button>
                </form>
            </div>
        </div>
    </section>
@endsection

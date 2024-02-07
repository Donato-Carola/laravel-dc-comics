@extends('layouts.app')



@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="pt-3 pb-5">Modifica il Comic selezionato</h1>
                <form class="pb-5" action="{{ route('Guest.comics.update', $comic->id) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="from-label">Titolo:</label>
                        <input type="text" name="title" id="title" class="form-control"
                        value="{{$comic->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="from-label">Price:</label>
                        <input type="text" name="price" id="price" class="form-control"
                        value="{{$comic->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="from-label">Series:</label>
                        <input type="text" name="series" id="series" class="form-control"
                        value="{{$comic->series}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="from-label">Sale Date:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control"
                        value="{{$comic->sale_date}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="from-label">Image url:</label>
                        <input type="text" name="thumb" id="thumb" class="form-control"
                        value="{{$comic->thumb}}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="from-label">Type:</label>
                        <input type="text" name="type" id="type" class="form-control"
                        value="{{$comic->type}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="from-label">Descrizione:</label>
                        <textarea type="text" name="description" id="description" class="form-control">{{$comic->description}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary ">Crea</button>
                    <button type="reset" class="btn btn-danger">pulisci form</button>
                </form>
            </div>
        </div>
    </section>
@endsection

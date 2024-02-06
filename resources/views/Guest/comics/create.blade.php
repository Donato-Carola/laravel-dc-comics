@extends('layouts.app')



@section('main-content')
    <section class="form-container container">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="mb-3">
                        <label for="title">Titolo:</label>
                        <input type="text" name="title" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione:</label>
                        <input type="text" name="description" id="description">
                    </div>

                    <div class="mb-3">
                        <label for="thumb">Image url</label>
                        <input type="text" name="thumb" id="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price">
                    </div>

                    <div class="mb-3">
                        <label for="series">Series</label>
                        <input type="text" name="series" id="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date"></label>
                        <input type="text" name="sale_date" id="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="type"></label>
                        <input type="text" name="type" id="type">
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection

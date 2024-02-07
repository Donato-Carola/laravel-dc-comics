@extends('layouts.app')



@section('main-content')
    <div class="container  text-center">
        <div class="row justify-content-center">


            <div class="col-6">
                <div class="card mt-5 ">
                    <img class="w-100" src="{{ $comic->thumb }}" alt="">
                    <div class="card-body">
                        <p>
                            {{ $comic->title }}
                        </p>
                        <p>{{ $comic->description }}</p>

                    </div>
                    <a href="{{ route('Guest.comics.edit', $comic->id) }}">
                        <button class="btn btn-primary">Modifica il Comic</button>
                    </a>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection

@section('script-content')
    <script>
        console.log('ciao, prova lo script in una pagina')
    </script>
@endsection

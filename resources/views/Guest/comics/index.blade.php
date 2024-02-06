@extends('layouts.app')



@section('main-content')
    <div class="container">
        <div class="row ">

            @foreach ($comics as $comic)
                <div class="col-md-4 col-lg-2  mb-2">
                    <a href="{{route('Guest.comics.show', $comic->id)}}">
                    <div class="card h-100 ">
                        <img class="w-100" src="{{ $comic->thumb }}" alt="">
                        <div class="card-body">
                            <p>
                                {{ $comic->title }}
                            </p>

                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection

@section('script-content')
    <script>
        console.log('ciao, prova lo script in una pagina')
    </script>
@endsection

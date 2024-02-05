@extends('layouts.app')



@section('main-content')


<div class="container">
    <div class="row">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3
        row-cols-xl-4 g-3 mb-3 ">
        @foreach ($comics as $comic)
        <div class="col">
         <div class="card">
            <img src="{{$comic['thumb']}}" alt="">
            <div class="card-body">
                <p>
                  {{$comic['description']}}
                </p>

            </div>
         </div>
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

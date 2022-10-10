@extends('layout.app')
@section('content')
    
        @foreach ($comics as $comic)
            <div class="card">
                <div>
                    <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div>
                <div class="card-bottom">
                    <p>{{ $comic['series'] }}</p>
                    <p>{{ $comic['price'] }}</p>
                </div>
            </div>
        @endforeach
        <button>LOAD MORE</button>
    
@endsection

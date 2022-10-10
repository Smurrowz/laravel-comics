@extends('layout.app')
@section('content')
  <div class="section">
    <img class="comic-img" src="{{$comic['thumb']}}" alt="">
    </div>
    <div class="details-cont">
        <div class="details-left">
            <h1> {{$comic['title']}}</h1>
            <div class="bar">
                <div class="comic-price"> 
                    <p><span class="green-text"> U.S. Price:</span> <strong> {{$comic['price']}} </strong></p>
                    <p><span class="green-text"> AVAILABLE</span></p>
                </div>
                <div class="comic-check"> 
                    <p><strong>Check Availability &#9660;</strong></p>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="details-img">
            <img src="{{ asset('/img/adv.jpg') }}" alt="#">
        </div>
        
    </div>
  </div>
  <div>
    <div class="container specs">
      <div class="col-50">
        <h2>Talent</h2>
        <div>
          <div>
            Art By : 
            @foreach ($comic['artists'] as $artists)
              {{$artists}}@if (!$loop->last), @endif
  
            @endforeach
            <hr>
          </div>
          <div>
            Written By :
            @foreach ($comic['writers'] as $writers)
            {{$writers}}@if (!$loop->last), @endif

          @endforeach
          </div>
          <hr>
        </div>
  
      </div>
      <div class="col-50">
        <h2>Specs</h2>
        Series : {{$comic['series'] }} <hr>
        US Price : {{$comic['price']}} <hr>
        On Sale Date : {{$comic['sale_date']}} <hr> 
      </div>
    </div>

    </div>

@endsection
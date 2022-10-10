<?php  
$footerLinks1 = 
    [
      [
        'href'=> "#",
        'src'=> "../img/buy-comics-digital-comics.png",
        'alt' => "logo digital comics",
        'title'=> "DIGITAL COMICS"  
      ],
      [
        'href'=> "#",
        'src'=> "../img/buy-comics-merchandise.png",
        'alt'=> "logo dc merchandise",
        'title'=> "DC MERCHANDISE"
      ],
      [
        'href'=> "#",
        'src'=> "../img/buy-comics-subscriptions.png",
        'alt'=> "logo subscription",
        'title'=> "SUBSCRIPTION"
      ],
      [
        'href'=> "#",
        'src'=> "../img/buy-comics-subscriptions.png",
        'alt'=> "logo comic shop locator",
        'title'=> "COMIC SHOP LOCATOR"
      ],
      [
        'href'=> "#",
        'src'=> "../img/buy-dc-power-visa.svg",
        'alt'=> "logo dc power visa",
        'title'=> "DC POWER VISA"
      ],
    ];
?>
@extends('layout.app')
@section('content')
    <div class="comics">
        <div class="container">
            <button class="current-series">CURRENT SERIES</button>
            <div class="card-container">
                @foreach ($comics as $key => $comic)
                    <a href="{{route('comic',['id' =>$key])}}">
                        <div class="card">
                            <div>
                                <img class="card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            </div>
                            <div class="card-bottom">
                                <p>{{ $comic['series'] }}</p>
                                <p>{{ $comic['price'] }}</p>
                            </div>
                        </div>

                    </a>
                @endforeach
                <button class="load-more">LOAD MORE</button>
        
            </div>
    
        </div>

    </div>
    <div class="footer-pt-1">
        <div class="container">
            <ul>
              @foreach ($footerLinks1 as $item)
              <li>
                  <a href="{{$item['href']}}">
                      <div>
                          <img src="{{$item['src']}}" alt="{{$item['alt']}}">
                      </div>
                      <div>
                          {{$item['title']}}
                      </div>
                  </a>
              </li>                 
              @endforeach
            </ul>
        </div>
    </div>
@endsection

<main>
  <div class="container card-container">
    @foreach ($cards as $card)
    <div class="card">
      <div>
        <img  class="card-img" src="{{$card['thumb']}}" alt="{{$card['series']}}">
      </div>
      <div class="card-bottom">
        <p>{{$card['series']}}</p>
        <p>{{$card['price']}}</p>
      </div>
    </div>
      @endforeach
    <button>LOAD MORE</button>
  </div>
</main>
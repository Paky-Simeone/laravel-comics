@extends('layout.app')

@section('main-content')
<div class="colore_back">
  <h1 class="titolo-fumetti">Comics</h1>
  <div class="row g-2">
      @foreach($comics as $comic)
      <div class="col-2">
          <div class="card m-3">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{$comic['series']}}">
            <div>
              <p>{{ $comic['series'] }}</p>
            </div>
          </div>
      </div>
          
      @endforeach
  </div>
  <div class="button-section">
    <button class="btn btn-primary">LOAD MORE</button>
  </div>
</div>
<div class="body-bottom">
    <div class="container">
        <ul>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="buy comics">
                    <span>DIGITAL COMICS</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="buy comics">
                    <span>DC MERCHANDISE<span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="buy comics">
                    <span>SUBSCRIPTION</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="buy comics">
                    <span>COMIC SHOP LOCATOR</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg')}}" alt="buy comics">
                    <span>DC POWER VISA</span>
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection

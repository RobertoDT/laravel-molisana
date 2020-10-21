@extends("layouts.main")

@section("title")
  Prodotti
@endsection

@section("mainContent")

<main id="single-product-main">
  <h1>{{$prodotto["titolo"]}}</h1>
  <div class="wrapper">
    <div class="img-top">
      <img src="{{$prodotto['src-h']}}" alt="">
    </div>
    <div class="img-btm">
      <img src="{{$prodotto['src-p']}}" alt="">
    </div>
    <div class="wrapper-description">
      <p class="description">{!! $prodotto["descrizione"] !!}</p>
    </div>
  </div>
</main>

@endsection

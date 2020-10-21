@extends("layouts.main")

@section("title")
  Prodotti
@endsection

@section("mainContent")

  <h1>{{$prodotto["titolo"]}}</h1>
  <img src="{{$prodotto['src-h']}}" alt="">
  <img src="{{$prodotto['src-p']}}" alt="">
  <p>{!! $prodotto["descrizione"] !!}</p>

@endsection

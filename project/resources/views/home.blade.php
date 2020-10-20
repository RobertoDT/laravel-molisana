<?php
//così richiamo il database pasta
$data = config("pasta");

$lunga = [];
$corta = [];
$cortissima = [];

foreach ($data as $product) {
  if($product["tipo"] == "lunga"){
    $lunga[] = $product;
  } elseif ($product["tipo"] == "corta") {
    $corta[] = $product;
  } elseif ($product["tipo"] == "cortissima") {
    $cortissima[] = $product;
  }
}

?>

<!-- html -->
<!-- estendo il layout main al mio html -->
@extends("layouts.main")
<!-- sezione titolo -->
@section("title")
  La Molisana - Sito Ufficiale
@endsection
<!-- /sezione titolo -->

<!-- sezione main -->
@section("mainContent")
  <!-- corpo della pagina -->
  <main>
    <div class="wrapper">

      <h2>LE LUNGHE</h2>
      <ul class="main-list">
        @foreach ($lunga as $product)
        <li>
          <div class="layover">
            <div class="layover-icon">
              <h3><a href="#">{{$product["titolo"]}}</a></h3>
              <a href="#"><img class="icona" src="{{asset('img/icon.svg')}}" alt=""></a>
            </div>
            <img class="img-prodotto" src="{{$product['src']}}" alt="img_pasta_lunga">
          </div>
        </li>
        @endforeach
      </ul>

      <h2>LE CORTE</h2>
      <ul class="main-list">
        @foreach ($corta as $product)
        <li>
          <div class="layover">
            <div class="layover-icon">
              <h3><a href="#">{{$product["titolo"]}}</a></h3>
              <a href="#"><img class="icona" src="{{asset('img/icon.svg')}}" alt=""></a>
            </div>
            <img class="img-prodotto" src="{{$product['src']}}" alt="img_pasta_lunga">
          </div>
        </li>
        @endforeach
      </ul>
      
      <h2>LE CORTISSIME</h2>
      <ul class="main-list">
        @foreach ($cortissima as $product)
        <li>
          <div class="layover">
            <div class="layover-icon">
              <h3><a href="#">{{$product["titolo"]}}</a></h3>
              <a href="#"><img class="icona" src="{{asset('img/icon.svg')}}" alt=""></a>
            </div>
            <img class="img-prodotto" src="{{$product['src']}}" alt="img_pasta_lunga">
          </div>
        </li>
        @endforeach
      </ul>
    </div>

  </main>
  <!-- /corpo della pagina -->
@endsection
<!-- /sezione main -->

<!-- /html -->

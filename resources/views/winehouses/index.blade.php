<!DOCTYPE html>
<html>
<head>
    <title>Winehouses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body style="background-color: beige;">

<header>
  <nav class="navbar">
    <div class="nav-left">
      <div class="dropdown">
        <a href="#" class="dropdown-toggle">IDENTITÀ</a>
        <div class="dropdown-menu">
          <a href="#">Chi siamo</a>
          <a href="#">La nostra storia</a>
          <a href="#">Mission & Vision</a>
        </div>
      </div>
      <a href="#">VINI</a>
      <a href="#">DEVIN COSMETICA</a>
    </div>

    <div class="nav-center">
      <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Logo" class="logo">
    </div>

    <div class="nav-right">
      <div class="dropdown">
        <a href="#" class="dropdown-toggle">ESPERIENZA</a>
        <div class="dropdown-menu">
          <a href="#">Degustazioni</a>
          <a href="#">Visite guidate</a>
          <a href="#">Eventi speciali</a>
        </div>
      </div>
      <a href="#">GIFT CARD</a>
      <a href="#">STORE LOCATOR</a>
      <div class="dropdown">
        <a href="#" class="dropdown-toggle">🌐 IT</a>
        <div class="dropdown-menu">
          <a href="#">EN</a>
          <a href="#">FR</a>
          <a href="#">ES</a>
        </div>
      </div>
    </div>
  </nav>
</header>


@php
    $total = count($winehouses);
    $lastRowCount = $total % 3;
    $regularCount = $total - $lastRowCount;
@endphp

<div class="container mt-5">
    <p class="text-center" style="font-size: 60px;">Prenota subito l’esperienza più adatta a te!</p>
    <h4 class="text-center">Ti aspettiamo per farti scoprire il mondo, raccontato dai nostri vini e dalla nostra storia.</h4>
    <br>
    <div class="row g-4">
    @foreach($winehouses->take($regularCount) as $winehouse)
        <div class="col-md-4 mb-4"> 
            <div class="card h-100"> 
                <img src="{{ asset('storage/winehouses/' . $winehouse->cover_image) }}" class="card-img-top" alt="{{ $winehouse->title }}"> 
                
                <div class="card-body d-flex flex-column">
                    <div class="mb-2">
                        @if($winehouse->drink)
                            <img src="{{ asset('storage/icons/drink.jpg') }}" style="height: 25px; margin-right: 10px;" alt="Drink">
                        @endif
                        @if($winehouse->food)
                            <img src="{{ asset('storage/icons/food.png') }}" style="height: 25px; margin-right: 10px;" alt="Food">
                        @endif
                        @if($winehouse->relax)
                            <img src="{{ asset('storage/icons/relax.jpg') }}" style="height: 25px; margin-right: 10px;" alt="Relax">
                        @endif
                        <img src="{{ asset('storage/icons/clock.png') }}" style="height: 30px; margin-left: 5px;" alt="Clock">
                        <span style="font-size: 20px; position: relative; top: 5px;">{{ $winehouse->duration }}'</span>
                    </div>

                    <h5 class="card-title">{{ $winehouse->title }}</h5>
                    <hr>
                    <p class="card-text">{{ $winehouse->description }}</p>

                    <span style="color: gray;">PREZZO</span>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        @php
                            $minPrice = $winehouse->prices->min('price');
                            $multiplePrices = $winehouse->prices->count() > 1;
                        @endphp

                        <p class="card-text mb-0">
                            <strong>
                                {{ $multiplePrices ? 'A partire da ' : '' }}
                                €{{ number_format($minPrice, 2, ',', '.') }} 
                                {{ !$multiplePrices ? 'a persona' : '' }}
                            </strong>
                        </p>
                        <span style="background-color: #e0e0e0; color: #333; padding: 2px 6px; font-size: 0.75rem;">IVA INCLUSA</span>
                    </div>

                    <a href="#" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mt-auto" style="background-color: #ffffff; color: #333; border-radius: 0px; padding: 8px 12px;">
                        <span>Dettagli</span>
                        <span>→</span>
                    </a>
                </div>
            </div> 
        </div> 
    @endforeach
</div>

    @foreach($winehouses->slice($regularCount) as $winehouse)
    <div class="col-12">
        <div class="card mb-4 h-100">
            <div class="row g-0 h-100">
                <div class="col-md-8">
                    <img src="{{ asset('storage/winehouses/' . $winehouse->cover_image) }}" class="img-fluid h-100" alt="{{ $winehouse->title }}">
                </div>
                <div class="col-md-4 d-flex flex-column">
                    <div class="card-body d-flex flex-column h-100">
                        <div class="mb-2">
                            @if($winehouse->drink)
                                <img src="{{ asset('storage/icons/drink.jpg') }}" style="height: 25px; margin-right: 10px;" alt="Drink">
                            @endif
                            @if($winehouse->food)
                                <img src="{{ asset('storage/icons/food.png') }}" style="height: 25px; margin-right: 10px;" alt="Food">
                            @endif
                            @if($winehouse->relax)
                                <img src="{{ asset('storage/icons/relax.jpg') }}" style="height: 25px; margin-right: 10px;" alt="Relax">
                            @endif
                            <img src="{{ asset('storage/icons/clock.png') }}" style="height: 30px; margin-left: 5px;" alt="Clock">
                            <span style="font-size: 20px; position: relative; top: 5px;">{{ $winehouse->duration }}'</span>
                        </div>

                        <h5 class="card-title mt-2">{{ $winehouse->title }}</h5>
                        <hr style="border:1px solid;">
                        <p class="card-text">{{ $winehouse->description }}</p>

                        <span style="color: gray;">PREZZO</span>
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            @php
                                $minPrice = $winehouse->prices->min('price');
                                $multiplePrices = $winehouse->prices->count() > 1;
                            @endphp

                            <p class="card-text mb-0">
                                <strong>
                                    {{ $multiplePrices ? 'A partire da ' : '' }}
                                    €{{ number_format($minPrice, 2, ',', '.') }} 
                                    {{ !$multiplePrices ? 'a persona' : '' }}
                                </strong>
                            </p>
                            <span style="background-color: #e0e0e0; color: #333; padding: 2px 6px; font-size: 0.75rem;">IVA INCLUSA</span>
                        </div>

                        <a href="#" class="btn btn-outline-secondary d-flex justify-content-between align-items-center w-100 mt-auto" style="background-color: #ffffff; color: #333; border-radius: 0px; padding: 8px 12px;">
                            <span>Dettagli</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

</div>
</div>

<script src="{{ asset('js/dropdown.js') }}"></script>

</body>
</html>

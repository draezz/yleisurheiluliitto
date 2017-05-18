@extends('layouts.app')

@section('content')

<header class="secondary-header">
  <div class="container">
    <h1>Yleisurheilun harrastaminen</h1>
  </div>
 </header>

 <section class="esittely">
  <div class="container">

    <h2>Miksi kannattaa aloittaa yleisurheilu?</h2>

    <p>Yleisurheilu on laji, jossa voit kokeilla erilaisia lajeja kuten pikajuoksua, kestävyyslajeja, hyppy- sekä heittolajeja. Yleisurheilu on myös erityisen palkitsevaa, kun näkee omien tuloksien parantuvan. Tämä palvelu motivoi sinua jatkamaan harrastusta, kun näet kehityskaaresi.</p>
      <p>Yleisurheilu on myös hauska harrastus vaikka ei koskaan kävisi kilpailemassa.</p>

   <a class="btn btn-primary" href="http://www.yleisurheilu.fi/" target="_blank">Lue lisää yleisurheilusta</a>

  </div>
 </section>

 <footer class="haasta-kaverit">
  <div class="container">
    <div class="footer-content">
      <h2>Oletko valmis haastamaan kaverisi?</h2>
      <a class="btn btn-primary" href="register">Rekisteröidy tästä</a>
    </div>

  </div>
 </footer>

 @endsection
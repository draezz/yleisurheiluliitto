@extends('layouts.app')

@section('content')
 <header class="secondary-header">
  <div class="container">
    <h1>Tasoituksen muodostuminen</h1>
  </div>
 </header>

 <section class="esittely">
  <div class="container">

    <h2>Miten tasoitus muodostuu?</h2>

    <p>Tasoitus muodostuu eri lajien suoritusten perusteella. Tason muodostaaksesi sinun pitää täyttää lomake ja antaa neljästä eri lajista parhaimmat tuloksesi.</p>

    <p>Kun olet täyttänyt lomakkeen eri lajien tuloksilla, niin palvelu laskee tietojen perusteella nykyisen taitotasosi.</p>

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
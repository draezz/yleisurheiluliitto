@extends('layouts.app')

@section('content')
<header class="frontpage-header">
 	<div class="container">
 		<h1>Haluatko tietää minkä tasoinen urheilija olet?</h1>
        <a class="btn btn-primary" href="register">Ota selvää tasostasi!</a>
 	</div>
 </header>

 <section class="esittely">
 	<div class="container">

 		<h2>Miten palvelu toimii?</h2>

	 	<div class="row">
	 		<div class="col-md-4">
	 			<p>1)</p>
	 			<p>Kirjaudu järjestelmään.</p>
	 		</div>
	 		<div class="col-md-4">
	 			<p>2)</p>
	 			<p>Syötä tulokset eri lajoista.</p>
	 		</div>
	 		<div class="col-md-4">
	 			<p>3)</p>
	 			<p>Näytä tasosi kavereille.</p>
	 		</div>
	 	</div>

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
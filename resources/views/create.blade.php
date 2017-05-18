@extends('layouts.app')

@section('content')

<section class="kilpailutulokset">
	<div class="container">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pikajuoksut (ajat sekunteina)</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('results.store') }}">

                        <div class="form-group">
                            <label for="100m" class="col-md-4 control-label">100m:</label>

                            <div class="col-md-6">
                                <input id="100m" type="text" class="form-control" name="satametria" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="150m" class="col-md-4 control-label">150m:</label>

                            <div class="col-md-6">
                                <input id="150m" type="text" class="form-control" name="sataviiskytmetria" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="200m" class="col-md-4 control-label">200m:</label>

                            <div class="col-md-6">
                                <input id="200m" type="text" class="form-control" name="kakssataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="300m" class="col-md-4 control-label">300m:</label>

                            <div class="col-md-6">
                                <input id="300m" type="text" class="form-control" name="kolmesataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="400m" class="col-md-4 control-label">400m:</label>

                            <div class="col-md-6">
                                <input id="400m" type="text" class="form-control" name="neljasataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="60maj" class="col-md-4 control-label">60maj:</label>

                            <div class="col-md-6">
                                <input id="60maj" type="text" class="form-control" name="kuusikymmentametriaaita" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="80maj" class="col-md-4 control-label">80maj:</label>

                            <div class="col-md-6">
                                <input id="80maj" type="text" class="form-control" name="kahdeksankymmentaametriaaita" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="100maj" class="col-md-4 control-label">100maj:</label>

                            <div class="col-md-6">
                                <input id="100maj" type="text" class="form-control" name="satametriaaita" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="200maj" class="col-md-4 control-label">200maj:</label>

                            <div class="col-md-6">
                                <input id="200maj" type="text" class="form-control" name="kaksisataametriaaita" value="">
                            </div>
                        </div>

                        <div class="panel-heading">Kestävyyslajit (ajat sekunteina)</div>


                        <div class="form-group">
                            <label for="600m" class="col-md-4 control-label">600m:</label>

                            <div class="col-md-6">
                                <input id="600m" type="text" class="form-control" name="kuussataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="800m" class="col-md-4 control-label">800m:</label>

                            <div class="col-md-6">
                                <input id="800m" type="text" class="form-control" name="kahdeksansataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="1000m" class="col-md-4 control-label">1000m:</label>

                            <div class="col-md-6">
                                <input id="1000m" type="text" class="form-control" name="tuhatmetria" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="1500m" class="col-md-4 control-label">1500m:</label>

                            <div class="col-md-6">
                                <input id="1500m" type="text" class="form-control" name="tuhatviisisataametria" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="2000m" class="col-md-4 control-label">2000m:</label>

                            <div class="col-md-6">
                                <input id="2000m" type="text" class="form-control" name="kaksituhattametria" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="3000m" class="col-md-4 control-label">3000m:</label>

                            <div class="col-md-6">
                                <input id="3000m" type="text" class="form-control" name="3000m" value="">
                            </div>
                        </div>


                        <div class="panel-heading">Hypyt (pituudet senttimetreinä)</div>


                        <div class="form-group">
                            <label for="korkeus" class="col-md-4 control-label">Korkeushyppy:</label>

                            <div class="col-md-6">
                                <input id="korkeus" type="text" class="form-control" name="korkeus" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="seivas" class="col-md-4 control-label">Seiväs:</label>

                            <div class="col-md-6">
                                <input id="seivas" type="text" class="form-control" name="seivas" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pituus" class="col-md-4 control-label">Pituus:</label>

                            <div class="col-md-6">
                                <input id="pituus" type="text" class="form-control" name="pituus" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kolmiloikka" class="col-md-4 control-label">Kolmiloikka:</label>

                            <div class="col-md-6">
                                <input id="kolmiloikka" type="text" class="form-control" name="kolmiloikka" value="">
                            </div>
                        </div>


                        <div class="panel-heading">Heitot (pituudet metreinä)</div>


                        <div class="form-group">
                            <label for="kuula" class="col-md-4 control-label">Kuula:</label>

                            <div class="col-md-6">
                                <input id="kuula" type="text" class="form-control" name="kuula" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="kiekko" class="col-md-4 control-label">Kiekko:</label>

                            <div class="col-md-6">
                                <input id="kiekko" type="text" class="form-control" name="kiekko" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="moukari" class="col-md-4 control-label">Moukari:</label>

                            <div class="col-md-6">
                                <input id="moukari" type="text" class="form-control" name="moukari" value="">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="keihas" class="col-md-4 control-label">Keihäs:</label>

                            <div class="col-md-6">
                                <input id="keihas" type="text" class="form-control" name="keihas" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pallo" class="col-md-4 control-label">Pallo:</label>

                            <div class="col-md-6">
                                <input id="pallo" type="text" class="form-control" name="pallo" value="">
                            </div>
                        </div>

						<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                        <input type="submit" value="Laske tasosi" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
</section>



@endsection
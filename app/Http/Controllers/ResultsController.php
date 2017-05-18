<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Results;

use Auth;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Results::all();
        return view('pages.taso')->withResults($results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'satametria' => 'required|max:5',
            $rules = array('amount' => array('match:/^[0-9]{1,3}(,[0-9]{3})*\.[0-9]+$/'))
        ));

        $result = new Results;

        $result->user_id = Auth::user()->id;

        // JUOKSU
        $result->satametria = (1010 / (($request->satametria / 11.41) ** 4.6512)) - 10;
        $result->sataviiskytmetria = (1010 / (($request->sataviiskytmetria / 17.21) ** 4.4444)) - 10;
        $result->kakssataametria = (1010 / (($request->kakssataametria / 17.21) ** 4.4444)) - 10;
        $result->kolmesataametria = (1010 / (($request->kolmesataametria / 37.25) ** 4.0816)) - 10;
        $result->neljasataametria = (1010 / (($request->neljasataametria / 51.59) ** 3.9216)) - 10;

        //AIDAT
        $result->kuusikymmentametriaaita = (1010 / (($request->kuusikymmentametriaaita / 8.57) ** 3.2258)) - 10;
        $result->kahdenksankymmentametriaaita = (1010 / (($request->kahdenksankymmentametriaaita / 11.07) ** 3.2258)) - 10;
        $result->satametriaaita = (1010 / (($request->satametriaaita / 13.62) ** 3.2258)) - 10;
        $result->kaksisataametriaaita = (1010 / (($request->kaksisataametriaaita / 26.69) ** 3.5088)) - 10;

        // KESTÄVYYS
        $result->kuussataametria = (1010 / (($request->kuussataametria / 86.48) ** 4)) - 10;
        $result->kahdeksansataametria = (1010 / (($request->kahdeksansataametria / 120.83) ** 4 )) - 10;
        $result->tuhatmetria = (1010 / (($request->tuhatmetria / 156.99) ** 4)) - 10;
        $result->tuhatviisisataametria = (1010 / (($request->tuhatviisisataametria / 247.03) ** 3.9216)) - 10;
        $result->kaksituhattametria = (1010 / (($request->kaksituhattametria / 344.2) ** 3.8462)) - 10;
        $result->kolmetuhattametria = (1010 / (($request->kolmetuhattametria / 534.16) ** 3.7736)) - 10;

        //HYPYT JA HEITOT
        $result->korkeushyppy = (1010 / ((194.45 / $request->korkeushyppy ) ** 2.9412)) - 10;
        $result->seivas = (1010 / ((437.5 / $request->seivas) ** 1.9417)) - 10;   
        $result->pituus = (1010 / ((676.5 / $request->pituus) ** 2.439)) - 10;
        $result->kolmiloikka = (1010 / ((13.94 / $request->kolmiloikka) ** 2.5316)) - 10;
        $result->kuula = (1010 / ((18.28 / $request->kuula) ** 1.2195)) - 10;
        $result->kiekko = (1010 / (( 60.38 / $request->kiekko ) ** 1.1765)) - 10;   
        $result->moukari = (1010 / (( 62.58 / $request->moukari ) ** 1.0309)) - 10;
        $result->keihas = (1010 / (( 71.02 / $request->keihas ) ** 1.1765)) - 10;
        $result->pallo = (1010 / (( 95.94 / $request->pallo ) ** 1.4493)) - 10;

        $juoksusumma = $result->satametria + $result->sataviiskytmetria + $result->kakssataametria + $result->kolmesataametria + $result->neljasataametria + $result->kuusikymmentametriaaita + $result->kahdenksankymmentametriaaita + $result->satametriaaita + $result->kaksisataametriaaita;

        $kestavyyssumma = $result->kuussataametria + $result->kahdeksansataametria + $result->tuhatmetria + $result->tuhatviisisataametria + $result->kaksituhattametria + $result->kolmetuhattametria;

        $hypyt = $result->korkeushyppy + $result->seivas + $result->pituus + $result->kolmiloikka;

        $heitot = $result->kuula + $result->kiekko + $result->moukari + $result->keihas + $result->pallo;

        $yhteissumma = $juoksusumma + $kestavyyssumma + $hypyt + $heitot;

        $result->taso = -$yhteissumma / 100 + 41;

        $result->save();

        return redirect('taso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

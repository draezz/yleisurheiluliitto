@extends('layouts.app')

@section('content')
<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Tasosi on:</h1>

                @foreach ($results as $result)
                    <h1><b>{{ $result->taso }}</b></h1>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

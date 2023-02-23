@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Skaiciuokle</div>

                    <div class="card-body">

                        <p><strong>Prekės kaina: </strong> {{ $kaina }}</p>
                        <p><strong>Prekės kaina su PVM: </strong> {{ $kainaSuPVM }}</p>
                        <p><strong>PVM suma: </strong> {{ $pvm }}</p>
                        <hr>
                        <a class="btn btn-success" href="{{ route('forma') }}">Atgal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

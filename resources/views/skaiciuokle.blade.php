@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Skaiciuokle</div>

                    <div class="card-body">

                        <form method="post" action="{{ route("rezultatas") }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Įveskite kainą:</label>
                                <input class="form-control" name="kaina" value="0">
                            </div>
                            <button class="btn btn-success">Skaičiuoti PVM</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

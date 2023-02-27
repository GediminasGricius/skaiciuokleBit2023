@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Grupės</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("groups.store") }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Pavadinias</label>
                                <input type="text" class="form-control" name="name">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Metai</label>
                                <input type="text" class="form-control" name="year">

                            </div>
                            <button class="btn btn-success">Pridėti</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



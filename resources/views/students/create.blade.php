@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Grupės</div>

                    <div class="card-body">
                        <form method="post" action="{{ route("students.store") }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input type="text" class="form-control" name="name">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavardė</label>
                                <input type="text" class="form-control" name="surname">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Metai</label>
                                <input type="text" class="form-control" name="year">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefonas</label>
                                <input type="text" class="form-control" name="phone">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grupė</label>

                                <select name="group_id" class="form-select">
                                    @foreach($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <button class="btn btn-success">Pridėti</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



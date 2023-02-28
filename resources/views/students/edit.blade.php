@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Grupės</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route("students.update", $student->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavardė</label>
                                <input type="text" class="form-control" name="surname" value="{{$student->surname}}">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Metai</label>
                                <input type="text" class="form-control" name="year" value="{{$student->year}}">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefonas</label>
                                <input type="text" class="form-control" name="phone" value="{{$student->phone}}">

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Grupės </label>

                                <select name="group_id" class="form-select">
                                    @foreach($groups as $group)
                                        <option value="{{ $group->id }}"  {{ ($group->id==$student->group_id)?'selected':'' }}>{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Išsaugoti</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



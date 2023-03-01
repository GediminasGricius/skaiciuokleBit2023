@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Studentai</div>

                    <div class="card-body">

                        <a href="{{ route("students.create") }}" class="btn btn-success float-end">Sukurti naują grupę</a>

                            <table class="table">
                            <thead>
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th>Metai</th>
                                <th>Telefonas</th>
                                <th>Grupes ID</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->name }} </td>
                                        <td>{{ $student->surname }} </td>
                                        <td>{{ $student->year }} </td>
                                        <td>{{ $student->phone }} </td>
                                        <td>{{ $student->group->name }} / {{ $student->group->year }} </td>
                                        <td style="width: 150px;">
                                            <a href="{{ route("students.edit", $student->id) }}" class="btn btn-success">Redaguoti</a>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route("students.destroy", $student->id) }}">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btn btn-danger">Ištrinti</button>
                                            </form>

                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>

                        Susisiekite su mumis: [[tel]]

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Grupės</div>

                    <div class="card-body">
                        <a href="{{ route("groups.create") }}" class="btn btn-success float-end">Sukurti naują grupę</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Pavadinimas</th>
                                <th>Metai</th>
                                <th>Studentai</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                    <tr>
                                        <td>{{ $group->name }} </td>
                                        <td>{{ $group->year }} </td>
                                        <td>
                                            @foreach( $group->students as $student)
                                                {{ $student->name }} {{ $student->surname }} <br>
                                            @endforeach

                                        </td>
                                        <td style="width: 200px;">
                                            <a href="{{ route("groups.update", $group->id) }}" class="btn btn-success">Redaguoti</a>
                                            @if ($group->students->count()==0)
                                            <a href="{{ route('groups.delete', $group->id) }}" class="btn btn-danger">Ištrinti</a>
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



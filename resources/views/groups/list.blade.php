@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Grupės</div>

                    <div class="card-body">
                        <a href="{{ route("groups.create") }}" class="btn btn-success float-end">Sukurti naują grupę</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Pavadinimas</th>
                                <th>Metai</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($groups as $group)
                                    <tr>
                                        <td>{{ $group->name }} </td>
                                        <td>{{ $group->year }} </td>
                                        <td style="width: 200px;">
                                            <a href="{{ route("groups.update", $group->id) }}" class="btn btn-success">Redaguoti</a>
                                            <a href="{{ route('groups.delete', $group->id) }}" class="btn btn-danger">Ištrinti</a>
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



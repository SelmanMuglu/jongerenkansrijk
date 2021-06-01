@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                            <a href="{{route('medewerker.create')}}">
                                <button type="button" class="btn btn-primary float-left">toevoegen</button>
                            </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Naam</th>
                                <th scope="col">Tussenvoegsel</th>
                                <th scope="col">Achternaam</th>
                                <th scope="col">email</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medewerkers as $medewerker)
                                <tr>
                                    <td>{{$medewerker->name}}</td>
                                    <td>{{$medewerker->infix}}</td>
                                    <td>{{$medewerker->last_name}}</td>
                                    <td>{{$medewerker->email}}</td>

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

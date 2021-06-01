@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('jongeren.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Tussenvoegsel</th>
                                <th scope="col">Achternaam</th>
                                <th scope="col">Registratie datum</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jongeren as $jonger)
                                <td>
                                <td>{{$jonger->youth_id}}</td>
                                <td>{{$jonger->name}}</td>
                                <td>{{$jonger->infix}}</td>
                                <td>{{$jonger->last_name}}</td>
                                <td>{{$jonger->registration_date}}</td>
                                <td>
                                    <a href="{{route('activiteiten.edit', $jonger->youth_id)}}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('activiteiten.destroy', $jonger)}}" method="POST"
                                          class="float-left">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
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

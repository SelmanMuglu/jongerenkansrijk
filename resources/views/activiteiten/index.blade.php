@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('activiteiten.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Activiteiten</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activiteiten as $activiteit)
                                <td>
                                <td>{{$activiteit->activity_id}}</td>
                                <td>{{$activiteit->activity}}</td>
                                <td>
                                    <a href="{{route('activiteiten.edit', $activiteit->activity_id)}}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('activiteiten.destroy', $activiteit)}}" method="POST"
                                          class="float-left">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-warning">Delete</button>
                                    </form>
                                </td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

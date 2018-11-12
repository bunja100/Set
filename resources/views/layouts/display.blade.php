@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="panel-heading">
                            <a href="{{'create'}}" class="btn btn-primary"><span
                                        class="glyphicon glyphicon-pencil"></span>
                                Create
                            </a>
                        </div>
                    @else
                    @endif

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>D.O.B</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr>

                                    <td>{{$no++}}</td>
                                    <td>{{$record->first_name}}</td>
                                    <td>{{$record->last_name}}</td>
                                    <td>{{$record->place_of_birth}}</td>
                                    <td>{{$record->sex}}</td>
                                    <td><a href="{{route('patient', $record->id)}}">View</a></td>

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

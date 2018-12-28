@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                        <div class="panel-heading">
                          Patients
                            <a href="{{'create'}}" class="btn btn-primary btn-sm pull-right"><span
                                        class="glyphicon glyphicon-pencil"></span>
                                Create
                            </a>
                        </div>
                    <div class="panel-body">

                      <table class="table active">
                        <tr>
                          <td>Total Registered</td>
                          <th>{{ App\Patient::count() }}</th>
                        </tr>
                          <tr>
                            <td>Total Boys</td>
                            <th>{{ App\Patient::where('sex', 'male')->count() }}</th>
                          </tr>
                          <tr>
                            <td>Total girls</td>
                            <th>{{ App\Patient::where('sex', 'Female')->count() }}</th>
                          </tr>
                      </table>

                      <div class="form-group row" >
                          <div class="col-md-6 col-md-offset-3">
                            <br>
                              <form class="" action="{{url('/search')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-8">
                                      <input type="text" name="search" class="form-control" placeholder="search record">
                                    </div>
                                      <div class="col-4">
                                        <span class="input-group-btn">
                                          <button type="submit" class="btn btn-default">FIND</button>
                                        </span>
                                      </div>
                                  </div>
                                </div>
                              </form>
                          </div>
                    </div>
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

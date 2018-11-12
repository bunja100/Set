@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('save') }}">
                            {{ csrf_field() }}

                            <h1 style="text-align:center; font-style:italic" ;> childs information </h1><br>

                            <div class="row">
                                <div class="col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="first_name" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control" name="first_name"
                                               value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
	                                        <strong>{{ $errors->first('first_name') }}</strong>
	                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div  style="background-image: url({{asset('image')}})" class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control" name="last_name"
                                               value="{{ old('last_name') }}" required autofocus>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
								                <strong>{{ $errors->first('last_name') }}</strong>
											</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-4 control-label">Sex</label>

                                <div class="col-md-6">
                                    <input id="sex" type="text" class="form-control" name="sex" value="{{ old('sex') }}"
                                           required autofocus>


                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('immunisation') ? ' has-error' : '' }}">
                                <label for="immunisation" class="col-md-4 control-label">immunisation </label>

                                <div class="col-md-6">
                                    <input id="immunisation" type="text" class="form-control" name="immunisation"
                                           value="{{ old('immunisation') }}" required autofocus>

                                    @if ($errors->has('immunisation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('immunisation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('rec_of_imm') ? ' has-error' : '' }}">
                                <label for="rec_of_imm" class="col-md-4 control-label">Record of immunisation </label>

                                <div class="col-md-6">
                                    <input id="rec_of_imm" type="text" class="form-control" name="rec_of_imm"
                                           value="{{ old('rec_of_imm') }}" required autofocus>

                                    @if ($errors->has('rec_of_imm'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('rec_of_imm') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                <label for="date_of_birth" class="col-md-4 control-label">Date Of Birth</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth"
                                           value="{{ old('date_of_birth') }}" required autofocus>

                                    @if ($errors->has('date_of_birth'))
                                        <span class="help-block">
                                      <strong>{{ $errors->first('date_of_birth') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('place_of_birth') ? ' has-error' : '' }}">
                                <label for="place_of_birth" class="col-md-4 control-label">Place of Birth</label>

                                <div class="col-md-6">
                                    <input id="place_of_birth" type="text" class="form-control" name="place_of_birth"
                                           value="{{ old('place_of_birth') }}" required autofocus>

                                    @if ($errors->has('place_of_birth'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('place_of_birth') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>


                            <h1 style="text-align:center; font-style:italic" ;> Parent information </h1><br>


                            <div class="form-group{{ $errors->has('fathers_name') ? ' has-error' : '' }}">
                                <label for="fathers_name" class="col-md-4 control-label">Father Name</label>

                                <div class="col-md-6">
                                    <input id="fathers_name" type="text" class="form-control" name="fathers_name"
                                           value="{{ old('fathers_name') }}" required autofocus>

                                    @if ($errors->has('fathers_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('Occupation_of_father') ? ' has-error' : '' }}">
                                <label for="Occupation_of_father" class="col-md-4 control-label">Occupation of
                                    father</label>

                                <div class="col-md-6">
                                    <input id="Occupation_of_father" type="text" class="form-control"
                                           name="Occupation_of_father" value="{{ old('Occupation_of_father') }}"
                                           required autofocus>

                                    @if ($errors->has('Occupation_of_father'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Occupation_of_father') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address_of_father') ? ' has-error' : '' }}">
                                <label for="address_of_father" class="col-md-4 control-label">Address of father</label>

                                <div class="col-md-6">
                                    <input id="address_of_father" type="text" class="form-control"
                                           name="address_of_father" value="{{ old('address_of_father') }}" required
                                           autofocus>

                                    @if ($errors->has('address_of_father'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address_of_father') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('mothers_name') ? ' has-error' : '' }}">
                                <label for="mothers_name" class="col-md-4 control-label">Mother Name</label>

                                <div class="col-md-6">
                                    <input id="mothers_name" type="text" class="form-control" name="mothers_name"
                                           value="{{ old('mothers_name') }}" required autofocus>

                                    @if ($errors->has('mothers_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('Occupation_of_mother') ? ' has-error' : '' }}">
                                <label for="Occupation_of_mother" class="col-md-4 control-label">Occupation of
                                    mother</label>

                                <div class="col-md-6">
                                    <input id="Occupation_of_mother" type="text" class="form-control"
                                           name="Occupation_of_mother" value="{{ old('Occupation_of_mother') }}"
                                           required autofocus>

                                    @if ($errors->has('Occupation_of_mother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('Occupation_of_mother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address_of_mother') ? ' has-error' : '' }}">
                                <label for="address_of_mother" class="col-md-4 control-label">address of mother</label>

                                <div class="col-md-6">
                                    <input id="address_of_mother" type="text" class="form-control"
                                           name="address_of_mother" value="{{ old('address_of_mother') }}" required
                                           autofocus>

                                    @if ($errors->has('address_of_mother'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address_of_mother') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

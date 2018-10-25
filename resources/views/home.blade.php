@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">


               dashboard
               <div class="row">
                 <div class="form-group">
                     <div class="col-md-4 col-md-offset-4">
                         <input type="text" class="form-control" placeholder="search">

                       </input>
                     </div>

               </div>
              </div>
                </div>

                <div class="panel-body">
              

                    <form class="form-horizontal" method="POST" action=" {{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-large btn-block">
                                    Register
                                </button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

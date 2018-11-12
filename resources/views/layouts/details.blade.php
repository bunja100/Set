<?php
/**
 * Created by PhpStorm.
 * User: cayor
 * Date: 10/24/18
 * Time: 3:34 PM
 */ ?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3" style="background-color: red; margin-right: 9px">
                    <img src="{{url('storage/images/f.jpg')}}" alt="image">
                </div>

                <div class="col-md-8" style="border: 1px solid black">
                    <form action="" method="post">
                        <div class="col-md-12">
                            <h1 style="text-align:center; font-style:italic" ;> Patient's information </h1><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">First Name:</label>
                            <input type="text" name="first_name" class="form-control" value="{{$patient->first_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{$patient->last_name}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control"
                                   value="{{$patient->date_of_birth}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Place of Birth:</label>
                            <input type="text" name="place_of_birth" class="form-control"
                                   value="{{$patient->place_of_birth}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Sex:</label>
                            <input type="text" name="sex" class="form-control" value="{{$patient->sex}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Immunization</label>
                            <input type="text" name="immunisation" class="form-control"
                                   value="{{$patient->immunisation}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Rec. of Immunization</label>
                            <input type="text" name="rec_of_imm" class="form-control" value="{{$patient->rec_of_imm}}">
                        </div>

                        <div class="col-md-12">
                            <h1 style="text-align:center; font-style:italic" ;> Parent's information </h1><br>
                        </div>

                        {{-- Father's Info--}}
                        <div class="form-group col-md-6">
                            <label for="">Father's Name:</label>
                            <input type="text" name="fathers_name" class="form-control"
                                   value="{{$patient->fathers_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Father's Occupation </label>
                            <input type="text" name="Occupation_of_father" class="form-control"
                                   value="{{$patient->Occupation_of_father}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Address of Father:</label>
                            <input type="text" name="address_of_father" class="form-control"
                                   value="{{$patient->address_of_father}}">
                        </div>

                        {{-- Mother's Info--}}
                        <div class="form-group col-md-6">
                            <label for="">Mother's Name:</label>
                            <input type="text" class="form-control" name="mothers_name"
                                   value="{{$patient->mothers_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Mother's Occupation </label>
                            <input type="text" class="form-control" name="Occupation_of_mother"
                                   value="{{$patient->Occupation_of_mother}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Address of Mother:</label>
                            <input type="text" name="address_of_mother" class="form-control"
                                   value="{{$patient->address_of_mother}}">
                        </div>
                        <a href="{{route('update', $patient->id)}}" class="btn btn-primary">Update </a>
                        {{--                        <a href="{{route('update', $patient->id)}}" class="btn btn-danger pull-right">Delete</a>--}}

                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection

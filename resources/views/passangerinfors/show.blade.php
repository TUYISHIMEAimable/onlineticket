@extends('passangerinfors.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show passangerinfor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('passangerinfors.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $passangerinfor->FirstName }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $passangerinfor->LastName }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gende:</strong>
                {{ $passangerinfor->Gender }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data of Birth:</strong>
                {{ $passangerinfor->DateOfBirth }}

            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TELEPHONE:</strong>
                {{ $passangerinfor->PhoneNumber }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-Mail:</strong>
                {{ $passangerinfor->Email }}

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Where are you come ?:</strong>
                {{ $passangerinfor->locationFrom }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Where are you Go:</strong>
                {{ $passangerinfor->locationto }}

            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>National Id ?:</strong>
                {{ $passangerinfor->n_id }}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agence select:</strong>
                {{ $passangerinfor->Agance }}

            </div>
        </div>       
    </div>
@endsection
@extends('products.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

               

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Price:</strong>

                {{ $product->price }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Car prack:</strong>

                {{ $product->prack }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Date:</strong>

    {{ $product->time}}

</div>

</div>
        <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Where you come:</strong>

    {{ $product->locationf}}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Where you go:</strong>

    {{ $product->locationt }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

    <strong>Agence:</strong>

    {{ $product->Agance }}

</div>

</div>


@endsection
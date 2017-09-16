@extends('layouts.app')
@section('title','CONTACT')
@section('content')
<h1>CONTACT</h1>

<div class="row">

</
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
  {!! Form::open(['url' => 'contact/submit']) !!}

  <div class="form-group">
    {{Form::label('name', 'NAME')}}
    {{Form::text('name', '', ['class'=>'form-control','placeholder'=>'ENTER YOUR NAME'])}}

  </div>
  <div class="form-group">
    {{Form::label('email', 'EMAIL')}}
    {{Form::email('email', '', ['class'=>'form-control','placeholder'=>'ENTER YOUR EMAIL'])}}

  </div>
  <div class="form-group">
    {{Form::label('message', 'MESSAGES')}}
    {{Form::textarea('message', '', ['class'=>'form-control','placeholder'=>'ENTER YOUR MESSAGE'])}}

  </div>
  <div>
    {{Form::submit('DONE!',['class'=>'btn btn-primary'])}}
  </div>

  {!! Form::close() !!}
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
  <h3>CONTACR DETAILS</h3>
  <div class="row">
    <div class="col-md-2">
      <i class "fa fa-map-marker"></i>

    </div>
    <div class="col-md-10">
    Address: Plot 5, Khayaban-e-Johar, Sector H-9, Islamabad-44000, Pakistan

    </div>
  </div>

</div>>>
@endsection

@extends('layouts.app')
@section('content')
<h2 class="h1-responsive font-weight-bold text-center text-light">Contact</h2>
<p class="text-center w-responsive text-light">Do you have any questions? Please do not hesitate to contact directly.</p>
<div class="col-md-7 mb-md-0 mb-5 text-light ">
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'name')}}
        {{Form::text('name', '',['class' => 'form-control','placeholder' => 'Enter your name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '',['class' => 'form-control','placeholder' => 'Example@gmail.com'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Enter message')}}
        {{Form::textarea('message', '',['class' => 'form-control','rows' => 7,'placeholder' => 'Enter your message here...'])}}
    </div>
    <div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    </div>
</div>



{!! Form::close() !!}








@endsection
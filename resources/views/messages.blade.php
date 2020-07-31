@extends('layouts.app')
@section('content')
<h1 class="text-light">Messages</h1>
<div class="ex3 mb-5">
    @if(count($messages) > 0)
    @foreach($messages as $message)

    <ul class="list-group my-3">
        <li class="list-group-item">Name: {{$message -> name}}</li>
        <li class="list-group-item">Email: {{$message -> email}}</li>
        <li class="list-group-item">Message: {{$message -> message}}</li>
    </ul>

    @endforeach
    @endif
</div>
@endsection

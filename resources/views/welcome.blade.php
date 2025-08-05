@extends('layout')
@section('title', 'Home')
@section('content')
<body style="overflow-y: hidden;">
<div class="d-flex justify-content-center align-items-center vh-100">
    <h1>Hi, {{auth()->user()->name}}</h1>
</div>
</body>
@endsection
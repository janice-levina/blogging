@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Welcome, {{ Auth::user()->name }}!</h1>
        <p>Home.</p>
    </div>
</div>
@endsection

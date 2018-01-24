@extends('layout')

@section('content')
    <h1>Sign In</h1>
    <form action="{{ url('login') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        @include('partials.errors')
    </form>
@endsection
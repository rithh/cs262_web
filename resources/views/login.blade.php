@extends('layout.master')

@section('contents')
<div class="container">
    <div class="login-form">
        <form method="post" action="{{ route('login') }}">
            @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            <h2>Login</h2>
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit">Login</button>
        </form>
        <p class="signup">Don't have an acccount?
            You can <a href="/register">register</a> with us right now.
        </p>
    </div>
</div>
@stop
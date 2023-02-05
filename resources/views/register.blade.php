@extends('layout.master')

@section('contents')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class="register-form">
    <form method="post" action="{{ route('register') }}">
        <h2>Registration</h2>
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Username" class="form-control p_input">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" class="form-control p_input">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control p_input">
        </div>
        <button type="submit">Register</button>
    </form>
    <p class="login"> Already have an account? You can <a href="/login">login</a> here.
</div>
@stop
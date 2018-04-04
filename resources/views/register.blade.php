<!doctype html>
<html>
<head>
<title>Sign up</title>
</head>
<body>

{{ Form::open(array('url' => 'register')) }}
<h1>Sign Up</h1>

<!-- if there are sign up errors, show them here -->
<p>
    {{ $errors->first('name') }}
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('name', 'User Name') }}
    {{ Form::text('name', Input::old('name'), array('placeholder' => 'test')) }}
</p>

<p>
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', Input::old('email'), array('placeholder' => 'test@gmail.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>
    {{ Form::label('password-confirm', 'Re-type Password') }}
    {{ Form::password('password_confirmation') }}
</p>

<p>{{ Form::submit('Sign Up!') }}</p>
{{ Form::close() }}
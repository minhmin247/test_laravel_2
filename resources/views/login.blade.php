<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('name') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('name', 'User Name') }}
    {{ Form::text('name', Input::old('name'), array('placeholder' => 'test')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
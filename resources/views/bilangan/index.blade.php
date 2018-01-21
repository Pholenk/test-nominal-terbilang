<html>
<head>
	<link href="https://cdnjs.cloudfare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel='stylesheet'>
</head>
<body>
    {!! Form::open(array('route' => 'nominal.store','method'=>'POST')) !!}

         @include('bilangan.form')

    {!! Form::close() !!}

	@if (!empty($message))
	<div class='alert alert-success'>
		{{ $message }}
	</div>
	@endif
</body>
</html>
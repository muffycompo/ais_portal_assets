@layout('template.layout')

@section('content')
		
<div class="home">
	<h2>Login</h2>
	@include('template.partials._notification')
	{{ Form::open() }}
		<p>
			{{ Form::label('username','Username:') }}<br>
			{{ Form::input('text','username','',array('id'=>'username')) }}
		</p>
		<p>
			{{ Form::label('password','Password:') }}<br>
			{{ Form::password('password',array('id'=>'password')) }}
		</p>
		<p>
			{{ Form::checkbox('remember',1) }}&nbsp;Remember me.
		</p>
		<p>	
			{{ Form::submit('Login') }}	| {{ HTML::link('#','Signup') }}	
		</p>
		<p>
			{{ HTML::link('#','Forgot Password?') }}
		</p>
		{{ Form::close() }}
</div>

@endsection
	

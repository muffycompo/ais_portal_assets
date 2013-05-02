@layout('template.layout')

@section('content')
		
<div class="home">
	<h2>Sign Up</h2>
	@include('template.partials._notification')
	{{ Form::open() }}
		<p>
			{{ Form::label('firstname','First Name:') }}<br>
			{{ Form::input('text','firstname','',array('id'=>'firstname')) }}
		</p>
		<p>
			{{ Form::label('surname','Surname:') }}<br>
			{{ Form::input('text','surname','',array('id'=>'surname')) }}
		</p>
		<p>
			{{ Form::label('email','Email:') }}<br>
			{{ Form::input('text','email','',array('id'=>'email')) }}
		</p>
		<p>
			{{ Form::label('gsm_no','Phone No. (GSM):') }}<br>
			{{ Form::input('text','gsm_no','',array('id'=>'gsm_no')) }}
		</p>
		<p>
			{{ Form::label('password','Password:') }}<br>
			{{ Form::password('password',array('id'=>'password')) }}
		</p>
		<p>
			{{ Form::label('pin_no','PIN No.:') }}<br>
			{{ Form::input('text','pin_no','',array('id'=>'pin_no')) }}
		</p>
		<p>	
			{{ Form::submit('Signup') }}	| {{ HTML::link('#','Cancel') }}	
		</p>
		{{ Form::close() }}
</div>

@endsection
	

	

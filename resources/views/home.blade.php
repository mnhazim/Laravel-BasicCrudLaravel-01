@extends('layout.app')

@section('title', 'My Tutorial')

@section('content')
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Create User</h2>
			<hr>
			<form action="/tutorial" method="post" autocomplete="off">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} ">
					{!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<label>Descriotion</label>
					<textarea rows="5" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
					{!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
				</div>
				<input type="submit" class="btn btn-info btn-block" value="Submit">
			</form>
		</div>


		<div class="col-md-6">
			<h2>List User</h2>
			<hr>
			<ol>
				@foreach($students as $student)
					<li><a href="/tutorial/{{$student->id}}/show">{{ $student->name }} </a> - {{ $student->created_at->diffForHumans() }}</li>
				@endforeach
			</ol>
		</div>
	</div>
@stop
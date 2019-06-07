@extends('layout.app')

@section('title', 'My Tutorial')

@section('content')
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Create User</h2>
			<hr>
			<form action="/tutorial/{{ $students->id }}/update" method="post" autocomplete="off">
				@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="" name="name" value="{{ $students->name }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} ">
					{!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
				</div>
				<div class="form-group">
					<label>Descriotion</label>
					<textarea rows="5" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{ $students->description }}</textarea>
					{!! $errors->first('description', '<span class="invalid-feedback">:message</span>') !!}
				</div>
				<input type="submit" class="btn btn-success btn-block" value="Update">
			</form>
		</div>


		<div class="col-md-6">
			<h2>Details User</h2>
			<hr>
			<div class="card">
			  <div class="card-body">
			    <h3 class="card-title">{{ $students->name }}</h3>
			    <h6 class="card-subtitle mb-2 text-muted">{{ $students->created_at->diffForHumans() }}</h6>
			    <p class="card-text">{{ $students->description }}</p>
			    <a href="/tutorial/{{ $students->id }}/show" class="mx-2 btn btn-warning">Back</a>
			  </div>
			</div>
		</div>
	</div>
@stop
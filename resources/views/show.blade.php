@extends('layout.app')

@section('title', 'My Tutorial')

@section('content')
	<div class="row mt-3">
		<div class="col-md-6">
			<h2>Details User</h2>
			<hr>
			<div class="card">
			  <div class="card-body">
			    <h3 class="card-title">{{ $students->name }}</h3>
			    <h6 class="card-subtitle mb-2 text-muted">{{ $students->created_at->diffForHumans() }}</h6>
			    <p class="card-text">{{ $students->description }}</p>
			    <a href="/tutorial/{{ $students->id }}/update" class="btn btn-info">Update</a>
			    <a href="/tutorial" class="mx-2 btn btn-warning">Back</a>
			    <div class="float-right">
			    	<form method="post" action="/tutorial/{{ $students->id }}/delete">
			    		@csrf
			    		<input type="submit" name="delete" class="btn btn-danger" value="Delete">
			    	</form>
			    </div>
			  </div>
			</div>
		</div>
	</div>
@stop
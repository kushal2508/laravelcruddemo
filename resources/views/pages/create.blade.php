@extends('pages.master')

@section('title', 'SMS')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
	<h1>Dashboard</h1>

	{{-- <section class="row text-center placeholders"> --}}
	<form method="POST" action="/students">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name: </label>
			<input type="text" class="form-control col-md-6" id="name" name="name" placeholder="Enter Name">
		</div>
		<div class="form-group">
			<label for="email">Email: </label>
			<input type="email" class="form-control col-md-6" id="email" name="email" placeholder="Enter Email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control col-md-6" id="password" name="password" placeholder="Enter Password">
		</div>
		<button type="submit" class="btn btn-success col-md-6">Submit</button>
	</form>
</main>
@endsection
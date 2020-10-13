@extends('layouts.main')
@section('title', 'Form')
@section('content')

	<form action="{{ route('create') }}" method="POST">
		@csrf
		<input type="text" name="title" placeholder="title">
		<input type="text" name="text" placeholder="text">
		<input type="text" name="description" placeholder="description">
		<button>submit</button>
	</form>

@endsection
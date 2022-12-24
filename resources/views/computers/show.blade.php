@extends('layout')
@section('title','Show Computer')


@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
	<div class="flex justify-center pt-8">
		<h1>Computers</h1>
	</div>

	<div class="mt-8">
    <p>{{ $computer['name'] }} ( {{ $computer['origin'] }} ) - <strong>{{ $computer['price'] }}$</strong></p>
	</div>

	<a href="{{route('computers.edit', $computer->id)}}" class="edit-btn">edit</a>
</div>
@endsection
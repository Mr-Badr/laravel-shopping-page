@extends('layout')
@section('title','computers')


@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
	<div class="flex justify-center pt-8">
		<h1>Computers</h1>
	</div>

	<div class="mt-8">
    @if (count($computers) > 0)
      <ul>
        @foreach ($computers as $computer)
          <li>{{  $computer['name']  }} is from <strong>{{  $computer['origin']  }}</strong></li>
        @endforeach
      </ul>
      @else
      <p>There are no Computer to Display</p>
    @endif
	</div>
</div>
@endsection
@extends('layout')
@section('title','Create Computer')


@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

  <div class="flex justify-center pt-8">
    <h1>Create a new computer</h1>
  </div>

  <div class="flex justify-center pt-8">
    <form action="" method="post" class="form bg-white p-6 border-1">
      <div>
        <label for="computer-name" class="text-sm">Computer Name</label>
        <input type="text" class="text-lg border-1" id="computer-name">
      </div>
      <div>
        <label for="" class="text-sm">Computer Origin</label>
        <input type="text" class="text-lg border-1" id="computer-name">
      </div>
      <div>
        <label for="" class="text-sm">Computer Price</label>
        <input type="text" class="text-lg border-1" id="computer-name">
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

</div>
@endsection
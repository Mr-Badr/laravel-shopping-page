@extends('layout')
@section('title','Create Computer')


@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

  <div class="flex justify-center pt-8">
    <h1>Edit an old computer</h1>
  </div>

  <div class="flex justify-center pt-8">
    <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
      @csrf
      <div>
        <label for="computer-name" class="text-sm">Computer Name</label>
        <input type="text" class="text-lg border-1" id="computer-name" value="{{$computer->name}}" name="computer-name">
        @error('computer-name')
          <div class="form-error">
            {{$message}}
          </div>
        @enderror
      </div>
      <div>
        <label for="computer-origin" class="text-sm">Computer Origin</label>
        <input type="text" class="text-lg border-1" id="computer-origin" value="{{$computer->origin}}" name="computer-origin">
        @error('computer-origin')
          <div class="form-error">
            {{$message}}
          </div>
        @enderror
      </div>
      <div>
        <label for="computer-price" class="text-sm">Computer Price</label>
        <input type="text" class="text-lg border-1" id="computer-price" value="{{$computer->price}}" name="computer-price">
        @error('computer-price')
          <div class="form-error">
            {{$message}}
          </div>
        @enderror
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

</div>
@endsection
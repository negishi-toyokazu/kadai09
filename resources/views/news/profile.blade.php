@extends('layouts.front')

@section('content')
<div class="container">
  <p>{{$profiles->name}}</p>
  <p>{{$profiles->gender}}</p>
  <p>{{$profiles->hobby}}</p>
  <p>{{$profiles->introduction}}</p>
</div>

@endsection

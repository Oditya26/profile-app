@extends('layout.master')
@section('container')

<div class="container-fluid mt-3 ">
<div class="card text-center mb-3 position-absolute top-50 start-50 translate-middle" style="width: 25rem;">
  <div class="card-header ">
    <h3>Member of Team Crusader</h3>
  </div>
  <div class="card-body">
  <p>
    @foreach($data as $key => $value)
    
      @if($value->user == 'odit')
      <b>Ketua: </b>
      @endif
      {{$value->name}} - {{$value->nim}} <br>
    @endforeach
    </p>
  </div>
</div>
</div>

@stop
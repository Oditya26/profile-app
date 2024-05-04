@extends('layout.master')
@section('container')

<div class="container mt-3 ">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>{{$data->name}}</h2>
      <p>{{$data->nim}}</p>
      <div class="card" style="width:540px">
      <img class="card-img-top" src="{{asset($data->image)}}" alt="Card image" style="width:100%">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <h4 class="card-title">{{$data->nama_panggilan}}</h4>
            <p>{{$data->description}}</p>
        </li>
        <li class="list-group-item">
            <dl>
                <dt>Name</dt>
                <dd>{{$data->nama_panggilan}}</dd>
                <dt>Age</dt>
                <dd>{{$data->age}} years old</dd>
                <dt>Gender</dt>
                <dd>{{$data->gender}}</dd>
                <dt>Place and Date of Birth</dt>
                <dd>{{$data->DOB}}</dd>
                <dt>Phone Number</dt>
                <dd>{{$data->phone}}</dd>
                <dt>Home Adress</dt>
                <dd>{{$data->address}}</dd>
                <dt>Hobby</dt>
                <dd>{{$data->hobby}}</dd>
                <dt>Favourite Food</dt>
                <dd>{{$data->fav_food}}</dd>
                <dt>Favourite Beverage</dt>
                <dd>{{$data->fav_drink}}</dd>
                <dt>Favourite Color</dt>
                <dd>{{$data->fav_color}}</dd>
                <br>
                
                <dd>
                <figure>
                  <blockquote class="blockquote">
                    <dd>{{$data->quote}}</dd>
                  </blockquote>
                  <figcaption class="blockquote-footer">
                    <cite title="Source Title">{{$data->name_quote}}</cite>
                  </figcaption>
                </figure>
                </dd>
            </dl>
        </li> 
      </ul>
    
      <div class="card-footer">
          <a href="{{url($data->link)}}" class="btn btn-primary">See LinkedIn</a>
      </div>
      
      </div>

    </div>
  </div>

  <br>
  
</div>

@stop

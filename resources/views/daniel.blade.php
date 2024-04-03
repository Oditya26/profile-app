@extends('layout.master')
@section('container')

<div class="container mt-3">
  <h2>Daniel Ebenerzer Budiharto</h2>
  <p>2602078146</p>
  <div class="card" style="width:540px">
  <img class="card-img-top" src="{{asset('images/daniel.jpg')}}" alt="Card image" style="width:100%">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4 class="card-title">Budi</h4>
        <p>I am a Computer Science student in Bina Nusantara University Malang. I am currently expanding my skillset by joining various events and programs inside and outside campus.</p>
    </li>
    <li class="list-group-item">
        <dl>
            <dt>Name</dt>
            <dd>Budi</dd>
            <dt>Age</dt>
            <dd>20 years old</dd>
            <dt>Gender</dt>
            <dd>Male</dd>
            <dt>Place and Date of Birth</dt>
            <dd>November 17th, 2004 in Jakarta, Indonesia.</dd>
            <dt>Phone Number</dt>
            <dd>+62 812-3082-2694</dd>
            <dt>Home Adress</dt>
            <dd>Jaksa Agung Suprapto St. 130.</dd>
            <dt>Hobby</dt>
            <dd>Reading books</dd>
            <dt>Favourite Food</dt>
            <dd>Fried Rice</dd>
            <dt>Favourite Beverage</dt>
            <dd>Water</dd>
            <dt>Favourite Color</dt>
            <dd>Crimson</dd>
            <br>
            
            <dd>
            <figure>
              <blockquote class="blockquote">
                <dd>"This day the noise of battle. The next the victor's song."</dd>
              </blockquote>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">Daniel E. Budiharto</cite>
              </figcaption>
            </figure>
            </dd>
        </dl>
    </li> 
  </ul>

  <div class="card-footer">
      <a href="https://www.linkedin.com/in/daniel-budiharto-40aa5b275/" class="btn btn-primary">See LinkedIn</a>
  </div>
  
  </div>

  <br>
  
</div>

@stop

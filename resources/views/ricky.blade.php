@extends('layout.master')
@section('container')

<div class="container mt-3">
  <h2>Ricky Reza Sanada</h2>
  <p>2602184132</p>
  <div class="card" style="width:540px">
  <img class="card-img-top" src="{{asset('images/ricky.jpg')}}" alt="Card image" style="width:100%">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4 class="card-title">Ricky Reza Sanada</h4>
        <p>I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have an interest in technology. Apart from that, I am also active in various campus activities to develop the skills I have and to increase the skills I have, such as participating in event committees, being involved in student associations, and being a volunteer.</p>
    </li>
    <li class="list-group-item">
        <dl>
            <dt>Name</dt>
            <dd>Ricky</dd>
            <dt>Age</dt>
            <dd>19 years old</dd>
            <dt>Gender</dt>
            <dd>Male</dd>
            <dt>Place and Date of Birth</dt>
            <dd>May 17, 2004 in Malang, Indonesia.</dd>
            <dt>Phone Number</dt>
            <dd>+62 857-4548-4719</dd>
            <dt>Home Adress</dt>
            <dd>Lawing Indah Housing Block Q-13.</dd>
            <dt>Hobby</dt>
            <dd>Playing Video Games</dd>
            <dt>Favourite Food</dt>
            <dd>Pempek</dd>
            <dt>Favourite Beverage</dt>
            <dd>Matcha</dd>
            <dt>Favourite Color</dt>
            <dd>Green Sage</dd>
            <br>
            
            <dd>
            <figure>
              <blockquote class="blockquote">
                <dd>"If you want live a happy life, tie it to a goal, not to people or things."</dd>
              </blockquote>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">Ricky R. Sanada</cite>
              </figcaption>
            </figure>
            </dd>
        </dl>
    </li> 
  </ul>

  <div class="card-footer">
      <a href="https://www.linkedin.com/in/ricky-reza-sanada-b42762290" class="btn btn-primary">See LinkedIn</a>
  </div>
  
  </div>

  <br>
  
</div>

@stop
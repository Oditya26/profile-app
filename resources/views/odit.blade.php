@extends('layout.master')
@section('container')

<div class="container mt-3">
  <h2>Oditya Ridho Darmanto</h2>
  <p>2602217225</p>
  <div class="card" style="width:540px">
  <img class="card-img-top" src="{{asset('images/odit.jpg')}}" alt="Card image" style="width:100%">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4 class="card-title">Odit</h4>
        <p>I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.</p>
    </li>
    <li class="list-group-item">
        <dl>
            <dt>Name</dt>
            <dd>Odit</dd>
            <dt>Age</dt>
            <dd>20 years old</dd>
            <dt>Gender</dt>
            <dd>Male</dd>
            <dt>Place and Date of Birth</dt>
            <dd>August 21st, 2004 in Ngawi, Indonesia.</dd>
            <dt>Phone Number</dt>
            <dd>+62 822-2933-1485</dd>
            <dt>Home Adress</dt>
            <dd>Patiunus Street No.35, Ngawi.</dd>
            <dt>Hobby</dt>
            <dd>Reading books</dd>
            <dt>Favourite Food</dt>
            <dd>Cheese Burger</dd>
            <dt>Favourite Beverage</dt>
            <dd>Hot Choco Milk</dd>
            <dt>Favourite Color</dt>
            <dd>Blue</dd>

            <br>

            <dd>
            <figure>
              <blockquote class="blockquote">
                <dd>"Life is like a drawing without an eraser."</dd>
              </blockquote>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">Oditya R. Darmanto</cite>
              </figcaption>
            </figure>
            </dd>
        </dl>
    </li> 
  </ul>

  <div class="card-footer">
      <a href="https://www.linkedin.com/in/oditya/" class="btn btn-primary">See LinkedIn</a>
  </div>
  
  </div>

  <br>
  
</div>

@stop
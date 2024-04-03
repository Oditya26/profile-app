@extends('layout.master')
@section('container')

<div class="container mt-3">
  <h2>Naufal Arif</h2>
  <p>2602184031</p>
  <div class="card" style="width:540px">
  <img class="card-img-top" src="{{asset('images/naufal.jpg')}}" alt="Card image" style="width:100%">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4 class="card-title">Naufal Arif</h4>
        <p>I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.</p>
    </li>
    <li class="list-group-item">
        <dl>
            <dt>Name</dt>
            <dd>Naufal</dd>
            <dt>Age</dt>
            <dd>20 years old</dd>
            <dt>Gender</dt>
            <dd>Male</dd>
            <dt>Place and Date of Birth</dt>
            <dd>August 18, 2004 in Jambi City, Indonesia.</dd>
            <dt>Phone Number</dt>
            <dd>+62 822-1505-8413</dd>
            <dt>Home Adress</dt>
            <dd>Jambi, Bagan Pete.</dd>
            <dt>Hobby</dt>
            <dd>Badminton</dd>
            <dt>Favourite Food</dt>
            <dd>Rice</dd>
            <dt>Favourite Beverage</dt>
            <dd>Clean Water</dd>
            <dt>Favourite Color</dt>
            <dd>Black and Green</dd>

            <br>
            
            <dd>
            <figure>
              <blockquote class="blockquote">
                <dd>"One live is enough."</dd>
              </blockquote>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">N. Arif</cite>
              </figcaption>
            </figure>
            </dd>
        </dl>
    </li> 
  </ul>

  <div class="card-footer">
      <a href="https://www.linkedin.com/in/naufal-arif-b8783b295" class="btn btn-primary">See LinkedIn</a>
  </div>
  
  </div>

  <br>
  
</div>

@stop
@extends('layout.master')
@section('container')

<div class="container mt-3">
  <h2>Nathanael Orvalo Rosandi</h2>
  <p>2602184435</p>
  <div class="card" style="width:540px">
  <img class="card-img-top" src="{{asset('images/nathan.jpg')}}" alt="Card image" style="width:100%">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h4 class="card-title">Nathan</h4>
        <p>I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.</p>
    </li>
    <li class="list-group-item">
        <dl>
            <dt>Name</dt>
            <dd>Nathan</dd>
            <dt>Age</dt>
            <dd>20 years old</dd>
            <dt>Gender</dt>
            <dd>Male</dd>
            <dt>Place and Date of Birth</dt>
            <dd>October 20th, 2003 in Jember, Indonesia.</dd>
            <dt>Phone Number</dt>
            <dd>+62 853-3079-99930</dd>
            <dt>Home Adress</dt>
            <dd>Letjend Suprapto No.17, Bodowoso.</dd>
            <dt>Hobby</dt>
            <dd>Badminton</dd>
            <dt>Favourite Food</dt>
            <dd>Fried Chicken</dd>
            <dt>Favourite Beverage</dt>
            <dd>Ice Tea</dd>
            <dt>Favourite Color</dt>
            <dd>Black</dd>
            <br>
            
            <dd>
            <figure>
              <blockquote class="blockquote">
                <dd>"S.P.I.R.I.T"</dd>
              </blockquote>
              <figcaption class="blockquote-footer">
                <cite title="Source Title">Nathanael O. Rosandi</cite>
              </figcaption>
            </figure>
            </dd>
        </dl>
    </li> 
  </ul>

  <div class="card-footer">
      <a href="http://www.linkedin.com/in/nathanael-rosandi" class="btn btn-primary">See LinkedIn</a>
  </div>
  
  </div>

  <br>
  
</div>

@stop
@extends('layouts.header')
@section('content')
   <div class="demoContainer">
        <div class="demoLeft">
            <h1>See HackerRank in action.</h1>
            <p>Attend a live demo with one of our product experts, who can share more about how we help teams like yours hire talent with the tech skills you need to innovate. You’ll see how to:              
            </p>
            <ul>
                <li>Standardize your hiring process</li>
                <li>Screen and interview more effectively and without bias</li>
                <li>Make informed, skills-based hiring decisions — every time</li>
            </ul>
            <p style="margin-top: 50px;font-size: 19px;text-align: center;width:100%;">Trusted by more than 3,000 tech organizations</p>
            @for($i=1 ; $i<6 ; $i++)
                <img src="./files/images/{{$i}}.png"/>
            @endfor
        </div>
        <div class="demoRight">
            <div class="form">
                <h3>Schedule a demo</h3>
                <p>Please fill out the form below, and we’ll contact you shortly.</p>
                <form action="">
                    <label>Name</label>
                    <input type="text" name=""  />
                    <label>Work Email</label>
                    <input type="text" name=""  />
                    <label>Phone Numnber</label>
                    <input type="text" name=""  />
                    <label>job title</label>
                    <input type="text" name=""  />
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
   </div>
@endsection
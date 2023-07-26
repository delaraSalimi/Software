@extends('layouts.developer')
<style>
    body{
        -apple-system, BlinkMacSystemFont, 'Segoe UI', 'PingFang SC', 'Hiragino Sans GB', 'Microsoft YaHei', 'Helvetica Neue', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'
    }
    .left{
   /* float:left; */
   /* width:75%; */
   border:solid b lue 2px;
   margin-top:30px;
}
.left > h3{
    margin-top: 50px;
margin-bottom: 20px;
font-size: 23px;
}
 .left .item{
    background: white;
    padding: 25px 15px 1px;
    border-bottom: solid #e9e8e8 1px;
    box-shadow: 3px 6px 15px #adadad;
    margin-bottom: 15px;
}
 .left .item h3{
    font-size: 24px;
color: #3a3a3a;
}
 .left .item p{
    font-size: 14px;
color: #515151;
}
 .left .item p span{
    margin-left:3px;
}
 .left .item .difficulty{
    color:green;
}
 .left .item .link{
float: right;
/* background: #1ba94c; */
/* color: white; */
padding: 6px 14px;
border-radius: 3px;
font-size: 17px;
box-shadow: 0px 0px 5px gray;
font-weight: bold;
/* marg/in-top:20px; */
border: solid 1px #1ba94c;
color: #1ba94c;
}
.left .item .category{
    display: block;
text-align: center;
margin-top: -15px;
margin-bottom: 8px;
background: #436D86;
color: white;
padding: 5px 0;
border-radius: 4px;
font-size: 16px;
}
.confirmation{
    background: #e7eeef;
width: 100%;
padding: 20px;
border-radius: 7px;
box-shadow: 4px 8px 37px #e0e0e0;
border: solid #dddbdb 1px;
margin-top: 15px;
}
.title{
   font-weight:bold;
}
.confirmation p{
    line-height: 28px;
margin-top: 18px;
font-size: 15px;
}
.confirmation button{
    background: white;
padding: 9px 25px;
border: solid #bcbcbc 1px;
border-radius: 5px;
margin: auto;
  margin-top: auto;
display: table;
margin-top: 27px;
color: #323448;
font-weight: bold;
}
.cv{
    margin-top: 0px;
float: left;
background-color: #4174c1;
border-radius: 8px;
padding: 10px;
color:White;
position: relative;
margin-left:4%;
}
.leftCv{
    width:55%;
}
.cv img{
    position: absolute;
top: -29px;
right: 0;
width: 330px;
}
.leftCv h3{
    font-weight: bold;
  font-size: 25px;
}
.leftCv button{
    border: 0;
background: white;
padding: 5px 20px;
border-radius: 10px;
margin: 30px auto;
display: table;
}
.category .item{
    background: linear-gradient(#f7dc58, #fea116);
  background-size: auto;
background-size: 100% 100%;
float: left;
width: 10%;
height: 100px;
margin: 25px 15px ;
text-align: center;
color: white;
font-size: 17px;
border-radius:10px;
box-shadow:0 1px 3px rgba(26, 26, 26, 0.1);
cu  rsor: pointer;

}
.category .item .inner{
    background-size: 100% 100%;
    height: 100px;
    border-radius:10px;
}
.inner p{
    padding-top: 30%;
font-size: 16px;
text-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
font-weight: 400;
}
table {
    float: left;
width: 60%;
background: white;
border: solid #d7d7d7 1px;
margin-bottom:100px;
border-radius:10px;
}
table tr{

}
table tr:nth-child(even){
    background-color:#fafafa;
}
table tr td{
    text-align:Center;
    padding:10px 0;
    font-size:14px;
    color:#646464;
}
table tr:hover{
    background:#d0d0d0;
}
table tr td span{
color: white;
padding: 5px;
border-radius: 4px;
font-size: 12px;
}
table tr th{
text-align: center;
padding: 10px 0;
border-bottom: solid #eee 2px;
}
.completed{
    float: left;
width: 32.5%;
margin-left: 20px;
}
.completed table{
    width:100%;
}
.completed table tr{}
.completed table tr th {}
</style>
@section('content')
<div class="category container" style="margin-top:40px;" >
       <h4> <i class="fas fa-table"></i>  Category - Database</h4>
       <!-- <div class="item" style="margin-left:0">
          <div class="inner" style="background-image:url('https://leetcode.com/static/webpack_bundles/images/algorithm_bg.90562ce29.png');">
            <p>HTML</p>
          </div>
       </div>
       <div class="item" style="background:linear-gradient(#70def7  ,#106afe)">
          <div class="inner" style="background-image:url('https://leetcode.com/static/webpack_bundles/images/database_bg.f3bec933a.png')">
            <p>CSS</p>
          </div>
       </div>
       <div class="item" style="background:linear-gradient(#8eeb98, #449d44)">
          <div class="inner" style="background-image:url('https://leetcode.com/static/webpack_bundles/images/shell_bg.c91db4414.png')">
            <p>PHP</p>
          </div>
       </div>
       <div class="item" style="background:linear-gradient(#d891c9, #8365cd)">
          <div class="inner" style="background-image:url('https://leetcode.com/static/webpack_bundles/images/concurrency_bg.6ea4e46e1.png')" >
            <p>Javascript</p>
          </div>
       </div>
       <div class="item" style="background:linear-gradient(#FFD749, #FFAF52);position:relative">
          <div class="inner" style="background-image:url('data:image/png;base64,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QABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUkr9t6t/FZs2689Ee/x01Ga6/GmTO9E0d4KRmp+Lrr+8NOpLH2V6OyZxLxin0l2KeXdxedh30W/dimnzIBif466Ntr8UUc8tzdt4EH3zSTSTWWxAqW/u/SIA4JTcwgIgRUAASBEQAFImMWnvBnndbHflZYGFxcPlrcaD5bE67s9HU1cvsPquH46Zh/G4aNqNPEwdjZWXBf5fE4d/cvtiAyZxcPzbIO/s9OrKm0kLpZ/Fwdy+Havz7V/HLHZW5t30dhzP/iceG138Sdlp/3btvCs34vD4VnAqk/Lyh7eDtHrtue+s3dCWzr4dr/rWXr92Q1OPyj9b17Gqb+6dsGFyUF5+37qekmcgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKQICAApAgJAioAAkCIgAKSUeu0HzwRfwf3no9anV8a1HkVz/jfBOE0OfhSz2FmZl/JJxNn3gnGqB3+zdt7Gu9Gfux2cyhCQb/88yOtqG027/ie50s+CcarNdO287/poSxeMk3XdqMmJO5Qv54/dBLRvHz+Li4Xq1u9jx7qm2GEApAgIACkCAkDKJO7P345Nu7B1Nrruu8NT5K3lT5vcjLsPbwbjtLv9VJRub2nWlz6mzfXYP7oTjNOF5s+jay4vD+txtO37sX98Pxifre0m2vleNOWJpXnT3IvSfxD784284DMpv7pxPTasvnblUuy2V6KP5YAc1v2v4/P4ZtQ3XoyVgCzeXNlv7ljX8aqvX70Q7fFyQJoyj/uzj4d19WrrCNVXX5rGxVuXVzfUo/h0drO88tFhbIBbWACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkTOqrT16MTbtYd2MeZWW+Xba+ls/jm9Ef7UTzyDVHqSWeqGes65jNtlZGXW0Xx/GwrvNgfJ78fRtdOx2Oz+V510yi2Tk/rOs0NqDUa9/9aWxababR9+ejqctnmyYOo5bDYJxq7Azfzj0yq9E2B1HrUTBOTT0bXZxZmvVdH83WvSj9LBifsriA789FX7aX54v1HI7XKF1swGQ48J+OjevW3xzrY3c44+wGj4/FH9TFxULE+WCc1p1KmnY4gruLUYMx+nzdypp5s/jJ48nY0MJ6BgJAioAAkCIgAKQsnoHcDPJquTBkePW5Tl/64YHVrWCcanN55SWQhT4Oo9T9YJxKeWb9hvZu1PmD4FQmcffy20HeuY9/vDYgk/owPrVvR+upj//ui5c+HtHHZ3Fw+TfBOD3x8c/Xzg/rB3F8+cPgVCbllV97Te8rqNee66L2a7fZt+NV39pbv6GU3rqOV33zhHXdabvyL9b1tDwDASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASBFQABIERAAUgQEgBQBASCl1GvP/STIK/2l6GN3dd7Mhu83g3Hq6pVo6poLrHIQpdwJxqn231k7L+WT4duD4FQmJ+5Qvpx60ryfDt/t27E68Wfzei7q8B+Pl1qfPvlg5iRuYQGQIiAApAgIACmTmLR3Y9OO+snwAHI3yvD1h2o9iunkYTBOtduKLs4sz4avNh5E086CcernO9GX7eVZ10edPIjtZh6MT1+bqMO61mb6yIZuOAffj1o28sBnEgfHv41NOzO5MHy/OpxadpbmTXtr+LzrwTidnX5r+AP4vaVZW7ohKjfi8PhWME5bzfPDvYhnl2aLtwjbeG84XveD8ZluTWLavjhctF96ZMNBHM3fieP+KDZgUl7+8HZsWH3tSsRu26+81HBUHnwdn8c3o77x4m40/SPD4UrmsD0ov3rfuo5Uff3qMxHHy8PFhcHhfN/xOk711ZemcfHWXpTlm0BR+lnszz8rr3x0GBvgGQgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACkCAgAKQICQIqAAJAiIACk/B/y/0YFnej6LQAAAABJRU5ErkJggg==')" >
            <p>Python</p>
            <span style="position: absolute;right: -7px;top: -7px;background: red;font-size: 10px;padding: 3px 8px;border-radius: 15px;">New</span>
          </div>
       </div> -->
       <table>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th>Acceptance</th>
            <th>Difficulty</th>
            <th>Category</th>
          </tr>
          @php
             $counter = 176;
             @endphp
             @foreach($topics as $topic)  
             @php 
               $color= $topic->difficulty === 'medium' ? '#48bf48' : ($topic->difficulty === 'easy' ? '#5c5cdb' : '#bb2929' )     ;   
            @endphp    
          <tr>
                <td>{{$counter}}</td>
                <td ><a style="color:#08c" href="{{route('challange',$topic->id)}}">{{$topic->title}}</a></td>
                <td>{{$topic->acceptance}}</td>
                <td><span style="background:{{$color}}">{{$topic->difficulty}}</span></td>
                <td>{{$topic->category}}</td>
            </tr>
            @php
             $counter++;
            @endphp
          @endforeach
       </table>
   </div>
   <div class="completed">
        <h3>In progress </h3>
        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>difficulty</th>
                <th>status</th>
            </tr>      
            @foreach($topicUsers as $topicUser )
            @php 
               $color= $topicUser->difficulty === 'medium' ? '#48bf48' : ($topicUser->difficulty === 'easy' ? '#5c5cdb' : '#bb2929' )     ;   
            @endphp 
               <tr>
                  <td>{{$topicUser->id}}</td>
                  <td>{{$topicUser->title}}</td>
                  <td><span style="background:{{$color}}">{{$topicUser->difficulty}}</span></td>
                  <td><span style="background:#3dae3d">In Progress</span></td>
               </tr>
             @endforeach
        </table>
   </div>
   <div class="clearfix">
       <section   style='margin-top:-50px;float:left;width:35%;margin-left:7%;' class="container">
           <h3 > Preparation</h3>
           <div class="confirmation ">
               <h3 class="title"><i class="far fa-envelope"></i> Confirm your <span style="color:Green">email address. </span></h3>
               <p>Please check your Inbox. We've sent a link to confirm your email address. Once you confirm, you will be able to access all the features of our site,<span style="color: #2e2361;font-weight: bold;"> including Jobs, Leaderboard, Recommendations and more.<span></p>
               <button>Resend Confirmation Email</button>
           </div>
       </section>
       <section class="cv" >
            <div class="leftCv">
               <p style="margin-top: 32px;">New</p>
               <H3>Create a Job Winning Resume</H3>
               <p>Boost your chances of landing that dream job by building fine-tuned latex resumes that stand out.</p>
               <button>Create a Resume</button>
            </div>
            <img src="https://hrcdn.net/fcore/assets/dashboard/hackerresume-card-dd9b01fcd2.svg" alt="">
       </section>
   </div>
  
@endsection
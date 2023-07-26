@extends('layouts.developer')
@section('content')
  <style>
    body{
        background:#454545 !important;
        color:White;
    }
    .container{
        width:100%;
        pad ding:20px;
    }
    .left1 ,.right1{
        width:50%;
        padding:10px;
        margin-top:50px;
        float:left;
    }
    textarea{
        width:100%;
        height:28%;
        background:#1f1f1f;
        color:white;
        border:0;
        outline:0;
        font-size:18px;
    }
    label i{
        margin: 0 1px 0 10px;
    }
    label{
        height: 30px;
        background: #000;
        width: 100%;
        font-size: 14px;
        padding-top: 5px;
    }
    iframe{
        width:100%;
        height:60%;
        background:#fff;
        border:0;
        outline:0;

    }
    .ask{padding: 10px;
background: #6f6f6f;
border-radius: 4px;
margin-bottom: 20px;
text-align: center;}
.link{
    padding: 8px 15%;
border-radius: 25px;
margin: 20px auto;
display: table;
}
.alert-div {
        display: none;
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 4px;
    }
  </style>
    <div class="container clearfix">
        <form method="post" >
            <div class="left1">
                <h2>Question</h2>
                <div class="ask">
                    <p>{{$challange->content}}</p>
                </div>
                    {{ csrf_field() }}
                    <label for="html"><i class="fab fa-html5"></i> Html</label>
                    <textarea name="html" id="html" cols="30" rows="10" onkeyup="run()"></textarea>
                    <label for="css"><i class="fab fa-css3-alt"></i> Css</label>
                    <textarea name="css" id="css" cols="30" rows="10" onkeyup="run()"></textarea>
                    <label for="javascript"><i class="fab fa-js-square"></i> Javascript</label>
                    <textarea name="javascript" id="javascript" cols="30" rows="10" onkeyup="run()"></textarea>
            </div>  
            <div class="right1" style="margin-top:98px;">
                <div class="alert-div" id="alert-div">
                    The HTML field is empty!
                </div>
                <label for="output"><i class="fas fa-play"></i> Output</label>
                <iframe src="" frameborder="0" id="output"></iframe>
                <input type="submit" class="btn btn-primary link" value="Send">        
            </div>
        </form>
    </div>
    <script>
        function run(){ 
            let html= document.getElementById("html").value;
            let css= document.getElementById("css").value;
            let javascript= document.getElementById("javascript").value;
            let output= document.getElementById("output");
            output.contentDocument.body.innerHTML = html + "<style>" + css + "</style>";
            output.contentWindow.eval(javascript);
            let alertDiv = document.getElementById("alert-div");

            if (html === "" ) {
                alertDiv.style.display = "block";
                return;
            } else {
                alertDiv.style.display = "none";
            }
        }

        const form = document.querySelector('form');

        form.addEventListener('submit', function(e) {
            let output = document.getElementById("output").contentDocument.body.innerHTML;
            let alertDiv = document.getElementById("alert-div");

            if(output.trim() === "") { 
                alertDiv.style.display = "block"; 
                e.preventDefault();  // prevent form submission
            } else {
                alertDiv.style.display = "none"; 
            }
        });

    </script>
@endsection
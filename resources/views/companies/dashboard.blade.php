@extends('layouts.developer')
<style>
.developers{
    margin-top:70px;
}
.developers .item{
    background: white;
    margin: 25px auto;
padding: 15px 20px;
border-radius: 5px;
position:relative;
box-shadow: 0 6px 16px 0 rgba(0,0,0,.2);
}
.developers .item .name{
    color: #39424e;
font-size: 24px;
margin-bottom: 10px;
}
.developers .item .phone{
    background: #a54343;
    float: left;
    color: white;
    padding: 5px 15px;
    border-radius: 3px;
    margin: 0;
}
.developers .item .hire{
    display: block;
margin-bottom: 10px;
color: white;
background: #1794a8;
}
.developers .item .action{
float:right;
}
.developers .item .action {
float:right;
}
.developers .item .itemChallange{
    width: 100%;
float: left;
margin-top: 30px;
display:none;
}

.item1{
    background: white;
    padding: 25px 15px 1px;
    border-bottom: solid #e9e8e8 1px;
    box-shadow: 3px 6px 15px #adadad;
    margin-bottom: 5px;
}
.item1 h3{
    font-size: 24px;
color: #3a3a3a;
}
.item1 p{
    font-size: 14px;
color: #515151;
}
.item1 p span{
    margin-left:3px;
}
.item1 .difficulty{
    color:green;
}
.item1 .link{
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
.item1 .category{
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

table {
    float: left;
width: 80%;
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



table tr{
    position: relative;
}
.itemChallangeTable{
    position: absolute;
    width: 100%;
    margin: 10px 5%;
    bo rder: 1px solid #ddd;
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    display: none;
    z-index: 1;
    left:-50px;
}


</style>
@section('content')

<div class="container dashboard" style="margin-top:70px;">
   <h3>Developers</h3>
   <table>
       <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Phone Number</th>
           <th>Tasks</th>
           <th></th>
       </tr>
       @foreach($developers as $developer)
         <tr>
            <td style="color:#08c">{{$developer->name}}</td>
            <td >{{$developer->email}}</td>
            <td>{{$developer->phone}}</td>
            <td class="click">
                <i style="#1e7a1e" class="far fa-eye"></i>
                <div class="itemChallangeTable">
                    @php $tt=$developer->topics; @endphp
                    @foreach($tt as $t)
                    <div class="item1 clearfix">
                        <div style='float:left;'>
                            <h3 class="title" style="text-align:left;">{{$t->title}}</h3>
                            <p><span class='difficulty' style="float:left;margin:0">{{$t->difficulty}} </span><span> {{$t->category}}({{$t->skill}})</span> </p>
                        </div>
                        <div style="float:right;">
                            <span class='category'>{{ $t->category }}</span>
                            <a  class='link'>In Progress</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </td>
            <td><span class="btn" style="color:white;background: #1794a8;padding: 5px 20px;font-size:13px;">Hire Now</span></td>
         </tr>
       @endforeach
   </table>
</div>

<script>
  $('.item .action').click(function(){
      $(this).parents('.item').find('.itemChallange').slideToggle();
  })
  $('.click').click(function(e){
    e.stopPropagation();
    $('.itemChallangeTable').hide();  
    $(this).find('.itemChallangeTable').slideToggle();
  })
  $(window).click(function() {
      // Hide all itemChallangeTable divs
      $('.itemChallangeTable').hide();
  })
</script>
@endsection

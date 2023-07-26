@extends('layouts.developer')
@section('content')
<Style>
    .input_container{
     width:50%;
     float:left;
    }
    .ck{
        height:200px;
    }
</style>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <div class="mainProfile clearfix">
    @include('partials.errors')
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="personal_information clearfix">
                    <h3 class="title"><i class="far fa-question-circle" style="color:#2525ad"></i> Personal Information</h3>
                    <!-- @php 
                    $constant="Illuminate\Support\Facades\Auth"
                    @endphp
                    @if(session('ChangesSuccessfully'))
                    <p class="alert alert-success">
                        Change Successfuly.
                    </p>
                    @endif -->
                    <div class="input_container">
                        <label for="name">Full Name<span style="color: #d52424;font-size: 22px;">*</span></label>
                        <input type="text" id="name" name="name" value="{{ $constant::user()->name  }}">
                    </div>
                    <div class="input_container">
                        <label for="phone">Phone<span style="color: #d52424;font-size: 22px;">*</span></label>
                        <input type="text" name="phone" id="phone" value="{{$constant::user()->phone == '0' ? ''  : $constant::user()->phone }}">
                    </div>
                    <div class="input_container">
                        <label for="Email">Email</label>
                        <input style="background:#cdcccc;cursor: not-allowed;" type="text" name="email" id="email" value="{{$constant::user()->email == '0' ? ''  : $constant::user()->email }}" readonly>  
                    </div>
                    <div class="input_container">
                        <label for="degree">Degree</label>
                        <select name="degree" id="degree">
                            <option value="" ></option>
                            <option value="Nothing"  {{ $constant::user()->degree=='' ? 'selected' : '' }}>No degree</option>
                            <option value="associate"{{ $constant::user()->degree=='associate' ? 'selected' : '' }}>Associate degree</option>
                            <option value="bachelor" {{ $constant::user()->degree=='bachelor' ? 'selected' : '' }}>Bachelor’s degree</option>
                            <option value="master"   {{ $constant::user()->degree=='master' ? 'selected' : '' }}>Master’s degree</option>
                            <option value="doctor"  {{ $constant::user()->degree=='doctor' ? 'selected' : '' }}>Doctoral degrees</option>
                        </select>
                    </div>  
                    <div class="input_container">  
                        <label for="status">Status:</label>
                        <select name="status" id="status">
                            <option value=""></option>
                            <option value="student" {{ $constant::user()->status=='student' ? 'selected' : '' }} >Student</option>
                            <option value="employed"  {{ $constant::user()->status=='employed' ? 'selected' : '' }}>Employed</option>
                            <option value="unemployed"  {{ $constant::user()->status=='unemployed' ? 'selected' : '' }}>Unemployed</option>
                        </select>
                    </div>
             </div>
             <div class="profile clearfix">
                 <h3 class="title"><i class="far fa-user" style="color:#2525ad"></i> Profile</h3>
                 <label for="description">Description</label>
                 <textarea  name="profile" id="editor">{{ $constant::user()->profile  }}</textarea>
             </div>
             <div class="language clearfix">
                 <h3 class="title"><i class="fas fa-globe-europe" style="color: #2525ad;vertical-align: middle;margin-right: 5px;"></i>Language</h3>
                 <div class="input_container">  
                    <label for="languageTitle">Title</label>
                    <input type="text" name="languageTitle" id="languageTitle" value=" {{ $constant::user()->languageTitle }}">
                 </div>
                 <div class="input_container">  
                     <label for="languageLevel">level:</label>
                     <select name="languageLevel">
                        <option value=""></option>
                        <option value="Basic Level" {{ $constant::user()->languageLevel=='Basic Level' ? 'selected' : '' }}>Basic Level</option>
                        <option value="Intermediate Level"{{ $constant::user()->languageLevel=='Intermediate Level' ? 'selected' : '' }}>Intermediate Level</option>
                        <option value="Advance Level"  {{ $constant::user()->languageLevel=='Advance Level' ? 'selected' : '' }}>Advance Level</option>
                     </select>
                 </div>
             </div>
                 <input type="hidden" value="1" name="active"   />
                <input type="submit" value="Save">
            <!-- <label for="country">Country</label>
            <select name="country" id="country">
                  <option value=""></option>
                  @include('partials.countriesList')
            </select> -->
        </form>
            <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                                CKEDITOR.replace('content');
                </script>
    </div>
@endsection
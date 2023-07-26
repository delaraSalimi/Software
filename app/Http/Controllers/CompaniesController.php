<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Company;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CompaniesController extends Controller
{
    
    function register(){
      return view('registerCompany');
    }
    function doregister(){
    //   $this->validate(request(),[
    //     'email' => 'Required|email',
    //     'password' => 'Required|min:4'
    // ]);
    $email = request()->input('email');
      if (empty($email)) {
          return redirect()->route('registerCompany')->withErrors(['email' => 'Email field is required.']);
      }
    $password = request()->input('password');
      if (empty($password)) {
          return redirect()->route('registerCompany')->withErrors(['password' => 'Password field is required.']);
      }
    $user=User::create(request()->all());
          
      if($user instanceof User )
      {
          return redirect()->route('loginCompany')->with('registerSuccess',true);
      }
      else{
          return redirect()->route('registerCompany');
      }


    }
    function login(){
    return view('loginCompany');
    }
    function dologin(){
      //  $this->validate(request(),[
      //   'email' => 'Required|email',
      //   ]);
      $email = request()->input('email');
      if (empty($email)) {
          return redirect()->route('loginCompany')->withErrors(['email' => 'Email field is required.']);
      }
     $password = request()->input('password');
      if (empty($password)) {
          return redirect()->route('loginCompany')->withErrors(['password' => 'Password field is required.']);
      }

        if(Auth::attempt(['email'=>request()->input('email'),'password'=>request()->input('password') ]))
        {
            return redirect()->route('companyDashboard');
        }
        else{
            return redirect()->route('loginCompany')->withErrors(['wrong' => 'Username and Password  is wrong.']);
        }
    }
    function dashboard(){
       $developers=User::where('role','D')->get();
       
      //  foreach($developers as $developer){
      //       dd($developer->topics);
      //  }
      return view ('companies.dashboard',compact('developers'));
    }
     public function logout(){
      Auth::logout();
      return redirect()->route('index');
     }
     public function profile(){
       return view('companies.profile');
     }
     public function profileUpdate(){     
        
      $user=User::find(Auth::user()->id);
      if(request()->input('phone') == '' )
      {
        $phone=0 ; 
      } 
      else{
        $phone=request()->input('phone');
      }
        echo $phone;
      $user->update(['name' => request()->input('name'),'phone' => $phone ]);
      if($user instanceof User)
      {
          return redirect()->route('profileCompany')->with('ChangesSuccessfully',true);
      }
  }

}

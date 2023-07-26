<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Model\Topic;
use App\Model\Task;
use App\Model\Topicuser;
use App\Model\Taskuser;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class DevelopersController extends Controller
{
    public function register(){
        return view('registerDeveloper');
    }
    public function doregister(){
        // $this->validate(request(),[
        //     'name' => 'Required',
        //     'email' => 'Required|email',
        //     'password' => 'Required|min:4'
        // ]);
        $email = request()->input('email');
      if (empty($email)) {
          return redirect()->route('registerDeveloper')->withErrors(['email' => 'Email field is required.']);
      }
    $password = request()->input('password');
      if (empty($password)) {
          return redirect()->route('registerDeveloper')->withErrors(['password' => 'Password field is required.']);
      }
        
        $user=User::create(request()->all());
        
        if($user instanceof User )
        {
            return redirect()->route('loginDeveloper')->with('registerSuccess',true);
        }
        else{
            return redirect()->route('registerDeveloper')->withErrors(['password' => 'Password field is required.']);
        }

         
        request()->all();
    }
    public function login(){
        return view('loginDeveloper');
    }
    public function dologin(){

        // $this->validate(request(),[
        //     'email' => 'Required|email',
        //     'password' => 'Required|min:4'
        // ]);
        $email = request()->input('email');
        if (empty($email)) {
            return redirect()->route('loginDeveloper')->withErrors(['email' => 'Email field is required.']);
        }
       $password = request()->input('password');
        if (empty($password)) {
            return redirect()->route('loginDeveloper')->withErrors(['password' => 'Password field is required.']);
        }

        if(Auth::attempt(['email'=>request()->input('email'),'password'=>request()->input('password') ]) && Auth::user()->role === "D")
        {

            if(Auth::user()->active === '0'){
                return redirect()->route('profileDeveloper');
            }
            else{
                return redirect()->route('developerDashboard');
            }
        }
             else{
                return redirect()->route('loginDeveloper')->withErrors(['wrong' => 'Username and Password  is wrong.']);
            }
    }

    public function dashboard(){
     
        $topics=Topic::all();
         $userId=Auth::user();
         $taskUser=$userId->tasks;
         $topicUsers=$userId->topics;
         return view('developers.dashboard',compact('taskUser','topics','topicUsers'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
    public function profile(){
        return view('developers.profile');
    }
    public function profileUpdate(){
        
          $this->validate(request(),[
            'phone' => 'Required|min:10',
            'name' => 'Required' , 

        ]);
        // echo request()->input('profile');
        $user=User::find(Auth::user()->id);
        $user->update(request()->all());
        if($user instanceof User)
        {
            return redirect()->route('developerDashboard')->with('Changes Successfully',true);
        }
    }

    public function topic($category){
         $topics = DB::table('topics')->where('category',$category)->get();
         return view('developers.topic',compact('topics'));
    }
    public function action(){
        echo "dffddffddf";
    }
    // public function challange($id){
    //    $challange=Topic::find($id); 
    //    return view('developers.challange',compact('challange'));
    // }
    public function challange($id){
       $challange=Topic::find($id); 
       return view('developers.challange',compact('challange'));
    }
    public function dochallange($topic_id){
        // echo $topic_id;
        $html=request()->input('html');
        $css=request()->input('css');
        $javascript=request()->input('javascript');
        $task=Task::create(['topic_id'=>$topic_id , 'html' => $html , 'css' => $css  , 'javascript' => $javascript]);
        if($task instanceof Task){
            $user = Auth::user();
            $topic = Topic::findOrFail($topic_id);
            // Attach the user to the task
            $topic->users()->attach($user->id);
            // $task->users()->attach($user->id);

    
            // Redirect to dashboard
            return redirect()->route('developerDashboard');
        }
        else{
            // If task creation failed, redirect back with error message
            return redirect()->back()->withErrors(['task' => 'Unable to create task.']);
        }
    }
    
}

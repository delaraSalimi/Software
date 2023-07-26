<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

       
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
           'html' ,'css' , 'javascript','topic_id'

        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
          
        ];

        public function topics(){
            return $this->belongsTo('App\Models\Topic');     
        }       
        public function users(){
            return $this->belongsToMany(User::class,'task_user','task_id','user_id');
          } 
    }
       

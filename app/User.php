<?php

namespace App;
use App\Model\Topic;
use App\Model\Task;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','phone','degree','status','profile','languageTitle','languageLevel','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function topics(){
        return $this->belongsToMany(Topic::class,'topic_user','user_id','topic_id');
      }
    public function tasks(){
        return $this->belongsToMany(Task::class,'task_user','user_id','task_id');
      }
}

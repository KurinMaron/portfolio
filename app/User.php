<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //Postに対するリレーション
    
    //「1:多」の関係なのでposts（複数形）
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }
    
    public function getOwnPaginateByLimit(int $limit_count = 5)
    {
        return $this->find(Auth::id())->posts()->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //Likeに対するリレーション
    
    //「1対多」
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    
    function getLikes(int $limit_count =5)
    {
        return $this->find(Auth::id())->likes()->get('post_id');
    }
    
   //Messageに対するリレーション
   
   //「1対多」
   public function messages()
   {
       return $this->hasMany('App\Message');
   }
   
}

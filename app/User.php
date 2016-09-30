<?php



namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Cmgmyr\Messenger\Traits\Messagable;
 
class User extends Model implements Authenticatable  

{

    use Messagable;
     //use Illuminate\Contracts\Auth\Authenticatable;

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


    use \Illuminate\Auth\Authenticatable;

   public function posts()
    {

        return $this->hasMany('App\Post');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }



}




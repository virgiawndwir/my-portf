<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Storage;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','image','cv'
    ];

    // IF UPLOAD IMAGE USE :

    protected $disk = null;
    protected $path = 'public/user/';

    public function img_url($size = null){
        $url  = asset('template/images/default.jpg'); // default 
        $size = (!is_null($size) ? $size.'/' : '');
        $path = $this->path.$size.$this->image;

        if($this->image && Storage::disk($this->disk)->exists($path)) $url = Storage::disk($this->disk)->url($path);
        return $url;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'subtitle',
        'summary',
        'image',
        'order_list'
    ];

    protected $disk = null;
    protected $path = 'public/gallery/';

    public function img_url($size = null){
        $url  = asset('template/images/default.jpg'); // default 
        $size = (!is_null($size) ? $size.'/' : '');
        $path = $this->path.$size.$this->image;

        if($this->image && Storage::disk($this->disk)->exists($path)) $url = Storage::disk($this->disk)->url($path);
        return $url;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'image',
        'video_url'
    ];

     /**
     * 
     * Delete slider image from storage 
     * @return void
     */
    public function deleteImage()
    {
        Storage::delete($this->image);
    }
}

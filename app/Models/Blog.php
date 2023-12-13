<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $guarded = [];


    //use accessors
    //this will return arabic data if app language is arabic and english data if not 
    public function getFirstTitleAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->first_title_ar;
        }
        else 
        {
            return $this->first_title_en;
        }
    }

    public function getFirstContentAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->first_content_ar;
        }
        else 
        {
            return $this->first_content_en;
        }
    }
    public function getSecondTitleAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->second_title_ar;
        }
        else 
        {
            return $this->second_title_en;
        }
    }

    public function getSecondContentAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->second_content_ar;
        }
        else 
        {
            return $this->second_content_en;
        }
    }



    //start relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

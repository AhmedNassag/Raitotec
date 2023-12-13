<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSupport extends Model
{
    use HasFactory;

    protected $table = 'service_supports';
    protected $guarded = [];

    //use accessors
    //this will return arabic data if app language is arabic and english data if not 
    public function getTitleAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->title_ar;
        }
        else 
        {
            return $this->title_en;
        }
    }

    public function getContentAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->content_ar;
        }
        else 
        {
            return $this->content_en;
        }
    }



    //start relations
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

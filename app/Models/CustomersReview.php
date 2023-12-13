<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersReview extends Model
{
    use HasFactory;

    protected $table = 'customers_reviews';
    protected $guarded = [];

    //use accessors
    //this will return arabic data if app language is arabic and english data if not 
    public function getUserNameAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->user_name_ar;
        }
        else 
        {
            return $this->user_name_en;
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
}

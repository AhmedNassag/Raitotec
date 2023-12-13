<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;

    protected $table = 'company_informations';
    protected $guarded = [];

    //use accessors
    //this will return arabic data if app language is arabic and english data if not 
    public function getBriefAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->brief_ar;
        }
        else 
        {
            return $this->brief_en;
        }
    }

    public function getAddressAttribute()
    {
        if(app()->getLocale() == 'ar') 
        {
            return $this->address_ar;
        }
        else 
        {
            return $this->address_en;
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramManage extends Model
{
    use HasFactory;

    protected $table = 'program_manages';
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



    //start relations
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

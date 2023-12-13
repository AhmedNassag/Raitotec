<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantCustomer extends Model
{
    use HasFactory;

    protected $table = 'important_customers';
    protected $guarded = [];
}

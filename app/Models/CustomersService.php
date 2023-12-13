<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersService extends Model
{
    use HasFactory;

    protected $table = 'customers_services';
    protected $guarded = [];
}

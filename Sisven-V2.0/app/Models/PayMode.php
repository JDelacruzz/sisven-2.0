<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayMode extends Model
{
    use HasFactory;
    protected $table = "pay_mode";
    protected $primaryKey = 'id';
    public $timestamps = false;
}

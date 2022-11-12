<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendonor_category extends Model
{
    use HasFactory;

    protected $table = "pendonor_category";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
}

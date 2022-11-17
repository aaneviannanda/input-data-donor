<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor_category extends Model
{
    use HasFactory;

    protected $table = "pendonor_category";
    protected $primaryKey = "id";
    protected $fillable = ['name'];
    
    public function Pendonors(){
        return $this->hasMany(Pendonor_data::class, 'pendonor_category_id', 'id');
    }
}

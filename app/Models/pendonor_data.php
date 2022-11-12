<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendonor_data extends Model
{
    use HasFactory;

    protected $table = "pendonor_data";
    protected $primaryKey = "id";
    protected $fillable = ['pendonor_catgory_id', 'card_number', 'name', 'gender', 'no_ktp_sim', 'address', 'phone_number', 'profession', 'office_address', 'office_phone_number', 'place_birth', 'date_birth', 'number_of_donors'];
}

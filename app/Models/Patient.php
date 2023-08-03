<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    
    protected $fillable = [
        'telephone', 'name', 'date_of_birth', 'id_number', 'address',
        'county', 'sub_county', 'email', 'gender', 'marital_status',
    ];
}


<?php

namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
class Housemanager extends Model
{
    use HasFactory;

    protected $table = 'house_managers';

    protected $fillable = [
        'name',
        'id_number',
        'phone_number'
        'education_level',
        'years_ of_ experience',
        'former_ employer_ number',
        'residence',
        'next_ of_ kin _details',
    ];

    //
}

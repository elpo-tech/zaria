<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clientdb extends Model
{

    use HasFactory;

    public  $table = 'clientdbs';

    protected $fillable = [
        'fname',
        'loc',
        'phone',
        'gen',
        'email',
        'hsize',
        'status',
        'gid',
        'nump',
        'numg',
        'pay',
        'uni',
        'inter',
        'app',
        'foth1',
        'foth2',
        'foth3',
        'foth4',
        'foth5',
        'foth6',
        'foth7',
        'foth8',
        'foth9',
        'foth10',

    ];
}

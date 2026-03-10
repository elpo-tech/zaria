<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Housemanagersdb extends Model
{
    //  use HasFactory;

    public  $table = 'housemanagersdb';

    protected $fillable = [
        'fname',
        'idnum',
        'phone',
        'whatsnum',
        'loc',
        'county',
        'gen',
        'email',
        'pri',
        'sec',
        'coll',
        'pass',
        'femp',
        'pay',
        'uni',
        'inter',
        'jobtype',
        'status',
        'clientid',

        'foth1',
        'foth2',
        'foth3',
        'foth4',
        'foth5',
        'foth6',
        'foth7',
        'foth8',
        'foth9',
        'foth10'
    ]
}

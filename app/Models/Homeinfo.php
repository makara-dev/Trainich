<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeinfo extends Model
{
    use HasFactory;

    public $timestamps = true;
    // table associate width model
    protected $table = 'homeinfos';

    // primarykey 
    protected $primaryKey = 'id';

    // fill table 

    protected $fillable = [
        'images',
        'title',
        'paragraph',
        'p-detail',
    ];

}

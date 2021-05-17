<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamp = true;

    // table associate with the model
    protected $table = 'services';

    // primary key 

    protected $primaryKey = 'id';

    // fillable 

    protected $fillable = [
        'images',
        'title',
        'p-detail',
    ];
}

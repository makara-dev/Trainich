<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamp = true;

    // table associate with the model
    protected $table = 'projects';

    // primary key 

    protected $primaryKey = 'id';

    // fillable 

    protected $fillable = [
        'image',
        'project_name',
        'location',
    ];
}

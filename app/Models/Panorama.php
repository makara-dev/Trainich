<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panorama extends Model
{
    use HasFactory;
    public $timestamps = true;

    // table associated with the model
    protected $table = 'panoramas';

    // primary key
    protected $primaryKey = 'id';

    // fillable
    protected $fillable = [
        'desktop_img_path',
        'mobile_img_path',
    ];
}

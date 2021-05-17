<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homecyle extends Model
{
    use HasFactory;

    public $timestamps = true;

    // table associate with table 

    protected $table = 'homecycles';

    // primary key

    protected $primaryKey = 'id';

    // fillable 

    protected $fillable = [
        'img',
        'heading',
        'paragraph',
    ];
}

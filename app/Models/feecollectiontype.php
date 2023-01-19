<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feecollectiontype extends Model
{
    use SoftDeletes;
    public $table = 'feecollectiontype';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feecategory extends Model
{
    use SoftDeletes;
    public $table = 'feecategory';
    use HasFactory;
}

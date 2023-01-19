<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feetypes extends Model
{
    use SoftDeletes;
    public $table = 'feetypes';
    use HasFactory;
}

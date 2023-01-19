<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrymode extends Model
{
    use SoftDeletes;
    public $table = 'entrymode';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class common_fee_collection extends Model
{
    use SoftDeletes;
    public $table = 'common_fee_collection';
    use HasFactory;
}

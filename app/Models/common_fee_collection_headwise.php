<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class common_fee_collection_headwise extends Model
{
    use SoftDeletes;
    public $table = 'common_fee_collection_headwise';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financial_trans extends Model
{
    use SoftDeletes;
    public $table = 'financial_trans';
    use HasFactory;
}

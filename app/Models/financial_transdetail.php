<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financial_transdetail extends Model
{
    use SoftDeletes;
    public $table = 'financial_transdetail';
    use HasFactory;
}

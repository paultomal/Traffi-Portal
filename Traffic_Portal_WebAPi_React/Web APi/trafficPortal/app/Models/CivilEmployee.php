<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilEmployee extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'ce_id';
}

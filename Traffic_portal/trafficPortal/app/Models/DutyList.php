<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutyList extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'd_id';
}

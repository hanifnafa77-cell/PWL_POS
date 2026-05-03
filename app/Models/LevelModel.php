<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';
    
    // Matikan timestamps jika tabel m_level tidak punya created_at/updated_at
    public $timestamps = false;
}
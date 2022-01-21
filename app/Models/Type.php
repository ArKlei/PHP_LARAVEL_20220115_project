<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    
    
    use HasFactory;

    public function typeCompanies() {
        return $this->hasMany(Company::class, 'type_id', 'id');
    }
}

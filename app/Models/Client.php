<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function clientCompany () {
        return $this->belongsTo(Company::class, 'company_id','id');
    }
}

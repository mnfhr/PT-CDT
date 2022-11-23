<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = ['id'];

    public function status() {
        return $this->belongsTo(Status::class);
    }

     public function invoices() {
        return $this->hasMany(Invoice::class);
    }
}

<?php

namespace App\Models;
use App\Models\Promotion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefs extends Model
{
    use HasFactory;

    public function Promotion()
{
    return $this->belongsToMany(Promotion::class);
}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votation extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function options()
    {
        return $this->hasMany(VotingOption::class);
    }
}

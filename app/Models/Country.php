<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Country extends Model
{
    use HasFactory;
    
    public function states(): BelongsTo
    {
      return $this->hasMany(State::class);
    }
    
    public function cities(): BelongsTo
    {
      return $this->hasMany(City::class);
    }
}

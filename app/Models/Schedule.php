<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function scopeIsActive() {
        return $this->is_active;
    }
}

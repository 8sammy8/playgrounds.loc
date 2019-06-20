<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorLayout extends Model
{
    public function colorScheme()
    {
        return $this->belongsTo(ColorScheme::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}

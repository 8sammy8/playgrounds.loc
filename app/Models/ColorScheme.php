<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColorScheme extends Model
{

    public function colorLayouts()
    {
        return $this->hasMany(ColorLayout::class);
    }
}

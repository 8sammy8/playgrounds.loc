<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ColorScheme
 *
 * @property int $id
 * @property string $name
 * @property string|null $img
 * @property string $posts_clamps
 * @property string $metal_rails
 * @property string $roofs
 * @property string $slides
 * @property string $plastic_climbers
 * @property string $panels
 * @property string $panel_accents
 * @property string $accessories
 * @property string $bridges
 * @property int|null $default
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereAccessories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereBridges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereMetalRails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme wherePanelAccents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme wherePanels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme wherePlasticClimbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme wherePostsClamps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereRoofs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ColorScheme whereSlides($value)
 * @mixin \Eloquent
 */
class ColorScheme extends Model
{
    protected $guarded = [];

    public $timestamps = false;
}

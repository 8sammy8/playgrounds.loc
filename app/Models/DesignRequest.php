<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DesignRequest
 *
 * @property int $id
 * @property int $user_id
 * @property string $input_quote
 * @property int $request_type
 * @property string|null $structure_name
 * @property string|null $sku
 * @property string|null $model
 * @property string $posts_clamps
 * @property string $metal_rails
 * @property string $slides
 * @property string $plastic_climbers
 * @property string $panels
 * @property string $panel_accents
 * @property string $accessories
 * @property string $bridges
 * @property int $responsible_id
 * @property int $priority
 * @property int $complete_at
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereAccessories($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereBridges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereCompleteAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereInputQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereMetalRails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePanelAccents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePanels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePlasticClimbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePostsClamps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereRequestType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereSlides($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereStructureName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereUserId($value)
 * @mixin \Eloquent
 * @property int $color_scheme_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereColorSchemeId($value)
 */
class DesignRequest extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }



}

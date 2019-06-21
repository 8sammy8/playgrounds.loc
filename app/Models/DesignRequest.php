<?php

namespace App\Models;

use App\User;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DesignRequest
 *
 * @property int $id
 * @property string $quote
 * @property string $job_name
 * @property string $job_location
 * @property int $request_type
 * @property string|null $structure_name
 * @property string|null $sku
 * @property string|null $model
 * @property int $priority
 * @property string $complete_at
 * @property int $status
 * @property string|null $notes
 * @property int $user_id
 * @property int $color_scheme_id
 * @property int $responsible_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $responsible
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest getRequestsByDesigner()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereColorSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereCompleteAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereJobLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereJobName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereRequestType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereResponsibleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereStructureName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DesignRequest whereUserId($value)
 * @mixin \Eloquent
 */
class DesignRequest extends Model
{
    use Sortable;

    const STATUS_COMPLETED = 5;

    protected $guarded = [];

    public $sortable = ['user_id', 'priority', 'request_type', 'updated_at', 'complete_at', 'status'];

    public function responsible()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     * @return void
     */
    public function scopeGetRequestsByDesigner($query)
    {
//        $user = \Auth::id();
        $user = 5;
        $query->where('responsible_id', $user);
        $query->orWhere('responsible_id', null);
        $query->whereNotIn('status', [self::STATUS_COMPLETED]);

        return $query;
    }
}

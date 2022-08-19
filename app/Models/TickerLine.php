<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TickerLine
 *
 * @property int $id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TickerLine whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TickerLine extends Model
{
    protected $fillable = ['content'];

    protected $hidden = ['created_at', 'updated_at'];
}

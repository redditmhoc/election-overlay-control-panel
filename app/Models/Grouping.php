<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Grouping
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $colour
 * @property string $text_colour
 * @property int $seats
 * @property int|null $previous_seats
 * @property int $votes
 * @property float $vote_share
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping wherePreviousSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereSeats($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereTextColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereVoteShare($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Grouping whereVotes($value)
 * @mixin \Eloquent
 */
class Grouping extends Model
{
    protected $fillable = [
        'name', 'code', 'colour', 'text_colour', 'seats', 'previous_seats', 'votes', 'vote_share'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}

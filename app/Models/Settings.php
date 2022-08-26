<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Settings
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @mixin \Eloquent
 */
class Settings extends Model
{
    protected $fillable = ['show_bars'];
    protected $hidden = ['id', 'created_at', 'updated_at'];
}

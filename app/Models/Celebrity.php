<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Traits\HasRelationTrait;
class Celebrity extends Model
{

    use HasRelationTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ff_celebs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'external_id',
        'photo_url',
        'birth_date',
        'death_date',
        'active_start_date',
        'active_end_date',
        'facebook',
        'instagram',
        'twitter'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $primaryKey = 'id';
}

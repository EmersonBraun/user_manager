<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model
{
    /**
     * When models are soft deleted, they are not actually removed from your database.
     * Instead, a deleted_at attribute is set on the model and inserted into the database.
     * If a model has a non-null deleted_at value, the model has been soft deleted
     */
    // use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'sector_id',
        'graduation_id',
        'ip',
        'created_at'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that should be cast to \Carbon.
     *
     * @var array
     */
    protected $dates = [];

    public function groups()
    {
        return $this->belongsToMany('App\Models\Group', 'groups_has_users');
    }

    public function sector()
    {
        return $this->belongsTo('App\Models\Sector');
    }

    public function graduation()
    {
        return $this->belongsTo('App\Models\Graduation');
    }

    public function ip()
    {
        return $this->belongsTo('App\Models\IP');
    }

    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }

}

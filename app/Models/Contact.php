<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
class Contact extends Model
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
    protected $table = 'contacts';

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
        'ddd',
        'number',
        'active',
        'phone_types_id',
        'user_id',
        'sector_id'
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

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

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

    public function sector()
    {
        return $this->hasOne('App\Models\Sector');
    }

    public function phoneType()
    {
        return $this->hasOne('App\Models\PhoneType');
    }

}

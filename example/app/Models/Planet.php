<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $sizeInKm;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
        'description',
        'size_in_km',
        'updated'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
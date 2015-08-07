<?php namespace Stone\StaffPages\Models;

use Model;

/**
 * Manager Model
 */
class Manager extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stone_staffpages_managers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name',
        'title',
        'description'
    ];

    /**
     * @var array Relations
     */

    public $attachOne = [
      'image' => ['System\Models\File']
    ];

}
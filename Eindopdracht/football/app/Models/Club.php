<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

      /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = ['ClubID'];


    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ClubID';


    // /**
    //  * The table associated with the model.
    //  *
    //  * @var string
    //  */
    // protected $table = 'cliubs';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}

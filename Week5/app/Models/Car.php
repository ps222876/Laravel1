<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = ['autonummer'];


    
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'autonummer';


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'leenautos';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


//     use HasFactory;

//     /**
//      * The attributes that aren't mass assignable.
//      *
//      * @var array<string>|bool
//      */
//     protected $guarded = ['autonummer', 'created_at', 'updated_at'];
// 
}

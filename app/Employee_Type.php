<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Type extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * Get the Employees for the Employee_Type.
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
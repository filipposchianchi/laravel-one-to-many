<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        "name",
        "description",
        "year"

    ];

    
    public function tasks() {        
        return $this -> hasMany(Task::class);
    }
}

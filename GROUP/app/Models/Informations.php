<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class informations extends Model
{
    // protected $table = 'informations';
    protected $fillable = [
        'name',
        'email',
        'picture',
        'status',
        'contact',
        'summary',
        'skills1',
        'skills2',
        'skills3',
        'skills4',
        'certifications1',
        'certifications2',
        'address',
        'applicationLink',
        'applicationStatus',
        'course',
        'schoolName',
        'schoolYear'
    ];
}

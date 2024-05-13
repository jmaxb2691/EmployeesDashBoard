<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'rowid';
    protected $fillable = [
        'firstLastName',
        'secondLastName',
        'firstName',
        'otherNames',
        'country',
        'typeid',
        'id_number',
        'email',
        'datei',
        'area'
    ];
    use HasFactory;
}

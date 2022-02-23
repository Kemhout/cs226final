<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'full_name'
    ];
    
    public function studentInfo() {
        return $this->hasOne(Student_Info::class);
    }
};

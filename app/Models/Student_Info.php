<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Info extends Model
{
    use HasFactory;

    public function StudentInfo() {
        return $this->hasOne(Student::class);
    }

    protected $fillable = [
        'student_card',
        'parent_name',
        'parent_phone',
        'scholarship',
        'enroll_date'
    ];
}

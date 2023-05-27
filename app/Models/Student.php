<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'email', 'group_code', 'epik_id', 'done_class'];

   public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}

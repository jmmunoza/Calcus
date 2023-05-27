<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    use HasFactory;

   protected $fillable = ['inscription_date', 'parcial', 'retry', 'status', 'done_workshop', 'done_class'];

   public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function calendars(): HasMany
    {
        return $this->hasMany(Calendar::class);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }
}

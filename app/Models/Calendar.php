<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = ['presentation_date'];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function setExam(Exam $exam): void 
    {
        $this->exam = $exam;
    }

    public function getExam(): Exam
    {
        return $this->exam;
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }
}

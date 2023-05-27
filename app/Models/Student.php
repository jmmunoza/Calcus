<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'group_code', 'epik_id'];

    public static function validate($request): void
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'group_code' => 'required|gt:0',
            'epik_id' => 'required|gt:0',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

   public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

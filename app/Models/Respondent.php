<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Respondent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'date',
        'question_id',
        'response'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}

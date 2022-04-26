<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_start',
        'time_end',
        'comment',
        'task_id',
        'job_id'
    ];

    public function job() {
        return $this->belongsTo(Job::class);
    }
}

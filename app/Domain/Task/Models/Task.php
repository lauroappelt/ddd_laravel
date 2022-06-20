<?php

namespace Domain\Task\Models;

use Domain\Task\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task', 'category', 'status'
    ];

    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakingRequest extends Model
{
    use HasFactory;

    protected $table = 'speaking_requests';

    protected $fillable = [
        'name',
        'organization',
        'email',
        'event_name',
        'topic',
        'notes',
        'phone',
        'event_date',
        'event_location',
        'audience_size',
        'budget',
        'additional_requirements',
        'status'
    ];

    protected $casts = [
        'event_date' => 'date',
        'audience_size' => 'integer',
        'budget' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Status constants
    const STATUS_PENDING = 'pending';
    const STATUS_REVIEWED = 'reviewed';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINED = 'declined';
    const STATUS_COMPLETED = 'completed';

    public static function getStatuses()
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_REVIEWED => 'Reviewed',
            self::STATUS_APPROVED => 'Approved',
            self::STATUS_DECLINED => 'Declined',
            self::STATUS_COMPLETED => 'Completed'
        ];
    }

    public function getStatusLabelAttribute()
    {
        $statuses = self::getStatuses();
        return $statuses[$this->status] ?? 'Unknown';
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeApproved($query)
    {
        return $query->where('status', self::STATUS_APPROVED);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    // Accessors
    public function getFormattedBudgetAttribute()
    {
        return $this->budget ? '$' . number_format($this->budget, 2) : 'Not specified';
    }

    public function getFormattedEventDateAttribute()
    {
        return $this->event_date ? $this->event_date->format('M j, Y') : 'Not specified';
    }
}
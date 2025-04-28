<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// Created using `php artisan make:model Job` command
class Job extends Model {
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['employer_id', 'title', 'salary'];
    protected $guarded = [];

    public function employer() : BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }


}

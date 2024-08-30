<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Estate extends Model
{
    use HasFactory;
    use  HasSEO;
    protected $fillable = [
        'image',
        'location',
        'user_id',
        'town',
        'price',
        'description',
        'area',
        'is_active'
    ];
    function formatDate($date)
    {
        $locale = app()->getLocale();
        Carbon::setLocale($locale);
        $format = $locale === 'en' ? 'F d, Y ' : 'd M Y';

        return Carbon::parse($date)->translatedFormat($format);
    }

    // RELATIONSHIPS
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

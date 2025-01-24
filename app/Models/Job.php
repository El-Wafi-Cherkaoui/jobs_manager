<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function employer():BelongsTo{
        return $this->belongsTo(Employer::class);
    }
    public function tags():BelongsToMany{
        return $this->belongsToMany(Tag::class);
    }

    public function add_tag($tag){
        $new_tag = Tag::firstOrCreate(['title' => $tag]);
        $this->tags()->attach($new_tag);
    }
}

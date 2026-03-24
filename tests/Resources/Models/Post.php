<?php

namespace Blendbyte\FilamentResourceLock\Tests\Resources\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Blendbyte\FilamentResourceLock\Models\Concerns\HasLocks;

class Post extends Model
{
    use HasFactory;
    use HasLocks;

    protected $table = 'posts';

    protected $guarded = [];
}

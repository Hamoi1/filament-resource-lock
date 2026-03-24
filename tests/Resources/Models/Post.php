<?php

namespace Blendbyte\FilamentResourceLock\Tests\Resources\Models;

use Blendbyte\FilamentResourceLock\Models\Concerns\HasLocks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasLocks;

    protected $table = 'posts';

    protected $guarded = [];
}

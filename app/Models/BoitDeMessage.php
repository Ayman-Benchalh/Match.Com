<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BoitDeMessage extends Model
{
    use HasFactory;
    public function user(): HasOne
    {
        return $this->HasOne(User::class);
    }
    public function admin(): HasOne
    {
        return $this->HasOne(Admin::class);
    }
}

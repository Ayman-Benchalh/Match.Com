<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class boitdemessages extends Model
{
    use HasFactory;  
    protected $table = 'boitdemessages';

    protected $fillable = [
        'idAdmin',
        'messageAdmin',
        'dateMessageAdmin',
        'idUser',
        'messageUser',
        'dateMessageUser',
    ];
    public function user(): HasOne
    {
        return $this->HasOne(User::class);
    }
    public function admin(): HasOne
    {
        return $this->HasOne(Admin::class);
    }
 

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Command extends Model
{
    use HasFactory;
    // protected $f='idUser';


    protected $primaryKey ='idCommand';
    protected $foreignkey=['idUser','idProduct'];
    protected $fillable = [   
        'idUser',  
        'idAdmin',
        'idProduct',
        'datecommand',
        'statut',
   
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function product(): HasOne
    {
        return $this->HasOne(Product::class,'idcommand');
    }
}

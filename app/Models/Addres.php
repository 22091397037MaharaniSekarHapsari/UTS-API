<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    protected $table = "addresses";
    protected $primaryKey = "id";
    protected $keyType = true;
    protected $timestamps = true;

    protected $fillable = ['street','city','province','country','postal_code'];
    public function contact(): BelongsTo 
    {
        return $this->belongsTo(Contact::class, "contact_id", "id");
    }
    
}

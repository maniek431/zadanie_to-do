<?php

namespace App\Models;
use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ApiPlatform\Metadata\Patch;

#[ApiResource]
#[Patch]
class Task extends Model
{
    use HasFactory;
 

    protected $fillable = [
        'id',
        'nazwa_zadania',
        'opis',
        'priorytet',
        'status',
        'termin',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

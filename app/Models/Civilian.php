<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilian extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('firstname', 'like', '%' . request('search') . '%')
                ->orWhere('lastname', 'like', '%' . request('search') . '%')
                ->orWhere('fingerprint', 'like', '%' . request('search') . '%')
                ->orWhere('dna', 'like', '%' . request('search') . '%');
        }
    }
}

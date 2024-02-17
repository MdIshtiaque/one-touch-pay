<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusinessCategoryType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function applicationTransactionUrl(): HasMany
    {
        return $this->hasMany(ApplicationTransactionUrl::class);
    }

}

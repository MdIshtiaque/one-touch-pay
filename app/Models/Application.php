<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Application extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function applicationKey(): HasOne
    {
        return $this->hasOne(ApplicationKey::class);
    }

    public function applicationConfig(): HasOne
    {
        return $this->hasOne(Config::class);
    }

    public function businessCategoryType(): HasMany
    {
        return $this->hasMany(BusinessCategoryType::class);
    }

    public function config(): HasOne
    {
        return $this->hasOne(Config::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}

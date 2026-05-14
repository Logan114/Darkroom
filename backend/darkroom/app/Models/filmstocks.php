<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class filmstocks extends Model
{
    protected $primaryKey='StockID'
    public function exposures()
    {
        return $this->hasMany(Exposure::class, 'StockID','StockID')
    }
}

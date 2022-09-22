<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return array
     */
    function format(): array
    {
        return [
            'customer_id' => $this->id,
            'name' => $this->name,
            'active' => $this->active,
            'created_by' => $this->user->email,
            'last_updated' => $this->updated_at->diffForHumans()
        ];
    }
}

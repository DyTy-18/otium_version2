<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'empresa', 'cargo', 'ciudad', 'whatsapp', 'email',
        'empleados', 'preocupacion', 'phone', 'subject', 'message', 'read_at',
    ];

    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
        ];
    }

    public function isUnread(): bool
    {
        return is_null($this->read_at);
    }
}

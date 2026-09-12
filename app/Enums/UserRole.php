<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case CLIENTE = 'cliente';

    public function label(): string
    {
        return match($this){
            self::ADMIN => 'Adm',
            self::CLIENTE => 'Cliente',
        };
        
    }
}

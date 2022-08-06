<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    protected $table = 'client_type';
    public $timestamps = false;
    
    public static function getNameById($id) {
        $category = ClientType::find($id);
        return $clienttype->name;
    }
}

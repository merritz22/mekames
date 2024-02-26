<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Client_State_ID',
        'Client_Name',
        'Client_Description',
        'Client_Location',
        'Client_Phone',
        'Client_InscriptionDate',
        'Client_SpendedMoney'
    ];
}

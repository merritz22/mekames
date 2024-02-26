<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'Project_CL_ID',
        'Project_Description',
        'Project_Status_ID',
        'Project_Billable',
        'Project_Price',
        'Project_EstimatedTime',
        'Project_EndDate',
        'Project_DevBeginingDate'
    ];
}

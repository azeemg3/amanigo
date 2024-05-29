<?php

namespace App\Models\Lms;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadTransferHistory extends Model
{
    use HasFactory;
    protected $fillable=['id', 'LID', 'transfer_from', 'transfer_to', 'transfer_by', 'notes', 'created_at', 'updated_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingAttachment extends Model
{
    use HasFactory;

    protected $table = 'booking_attachments';

    protected $fillable = [
      'title', 'description', 'service_id','booking_id' ,'user_id'
    ];
}

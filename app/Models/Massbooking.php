<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massbooking extends Model
{
    protected $fillable = [
                            'name',
                            'DateTime',
                            'intention',
                            'intentionfor',
                            'email',
                            'mobile',
                            'language',
                            'mass_id',
                            'download_starttime',
                            'download_endtime',
                            'masstime_restriction',
                            'payment_status',
                            'payment_reference',
                            'amt',
                            'mass_id',
                            'date',
                            'surcharge',
                            'clientcode',
                            'signature',
                            'merchant_id',
                            'mer_txn',
                            'f_code',
                            'bank_txn',
                            'ipg_txn_id',
                            'bank_name',
                            'mmp_txn',
                            'udf5',
                            'udf6',
                            'udf3',
                            'udf4',
                            'udf1',
                            'udf2',
                            'discriminator',
                            'desc',
                            'auth_code'
                            ];
    
} 

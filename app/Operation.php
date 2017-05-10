<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $table = 'operations';

    protected $fillable = [
        'out',
        'bt_integra',
        'bt_cuenta',
        'number_operation',
        'idecli',
        'dirpart',
        'urbpart',
        'provpart',
        'dptopart',
        'telfpart',
        'product',
        'lw05prod',
        'money',
        'capital',
        'deuda_ven',
        'deu_ven_us',
        'deuda_total',
        'dias_mora',
        'codfun',
        'nomfun',
        'citi',
        'cuoini',
        'cuopag',
        'cuoven',
        'campaign',
        'base',
        'agency_id',
        'user_id',
        'purse_id'
    ];
}

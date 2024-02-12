<?php

namespace App\Models\ingenieria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManufactureORD extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv';
    protected $table = 'LCA.dboReaders.VW_Planning_DispatchRO_InventoryPacked';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = [
        'wallet_id',
        'amount',
        'description',
    ];




    public function transactionWallet()
    {
        return $this->belongTo(Wallet::class, 'wallet_id', 'id');
    }
}

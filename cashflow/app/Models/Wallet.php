<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    
    protected $table = 'wallets';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = [
        'user_id',
        'ballance',
    ];

    public function walletUser()
    {
        return $this->belongTo(User::class, 'user_id', 'id');
    }

    public function transactionWallet()
    {
        return $this->hasMany(Transaction::class, 'id', 'wallet_id');
    }

}

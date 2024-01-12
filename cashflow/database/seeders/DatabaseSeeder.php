<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

   /*  public function run()
    {
        // Create a Faker instance
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia

        // Generate 10 fake customers with Indonesian details
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make($faker->password),
            ]);
        }
    } */

   /*  public function run()
    {
        // Create a Faker instance
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia

        // Generate 10 fake wallets with valid user IDs and balance in the range 10000 - 10000000
        for ($i = 0; $i < 10; $i++) {
            $user = User::inRandomOrder()->first(); // Get a random user
            $balance = $faker->numberBetween(10000, 1000000); // Generate a random number within the desired range

            Wallet::create([
                'user_id' => $user->id,
                'balance' => $balance,
            ]);
        }
    } */

    public function run()
    {
        // Create a Faker instance
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia
    
        // Generate 10 fake transactions with valid user IDs and balance in the range 10000 - 50000
        for ($i = 0; $i < 10; $i++) {
            $wallet = Wallet::inRandomOrder()->first(); // Get a random Wallet
            $amount = $faker->numberBetween(10000, 50000); // Generate a random number within the desired range
    
            // Create a transaction and associate it with the wallet
            $wallet->transactionWallet()->create([
                'wallet_id' => $wallet->id,
                'amount' => $amount,
                'description' => $faker->sentence // Assuming you want a random description
            ]);
        }
    }
    
    
}

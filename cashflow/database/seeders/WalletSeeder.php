<?php


use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create a Faker instance
        $faker = Faker::create('id_ID'); // Menggunakan locale Indonesia

        // Generate 10 fake wallets with valid user IDs and balance in the range 10000 - 10000000
        for ($i = 0; $i < 10; $i++) {
            $user = User::inRandomOrder()->first(); // Mendapatkan user secara acak
            $balance = $faker->numberBetween(10000, 10000000); // Menghasilkan angka acak dalam rentang yang diinginkan

            Wallet::create([
                'user_id' => $user->id,
                'balance' => $balance,
            ]);
        }
    }
}

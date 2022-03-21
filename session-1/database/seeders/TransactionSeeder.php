<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('transactions')->insert(
        //     [
        //         'transaction_id' => Str::uuid(),
        //         'username' => 'Juju',
        //         'item_name' => 'Minyak Goreng',
        //         'price' => 45000,
        //         'created_at' => Carbon::now(),
        //     ]
        // );

        Transaction::factory(10)->create();
    }
}

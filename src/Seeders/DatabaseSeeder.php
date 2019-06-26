<?php

namespace Halpdesk\LaravelSimpleStripe\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PaymentsSeeder::class,
        ]);
    }

}

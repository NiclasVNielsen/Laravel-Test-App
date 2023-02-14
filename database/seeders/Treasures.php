<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Treasures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $treasure = new \App\Models\Treasure([
            'title' => 'Aaargh!',
            'tale' => 'Once apon a time on a stormy night...',
            'value' => 10000
        ]);
        $treasure->save();
    }
}

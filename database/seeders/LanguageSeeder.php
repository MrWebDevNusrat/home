<?php

namespace Database\Seeders;

use App\Models\Crm\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = Language::firstOrCreate([
            'code' => 'oz',
            'name' => 'O‘zbekcha',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Settings::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'key' => 'facebook_url',
                'value' => NULL,
            ],
            [
                'key' => 'youtube_url',
                'value' => NULL,
            ],
            [
                'key' => 'twitter_url',
                'value' => NULL,
            ],
            [
                'key' => 'instagram_url',
                'value' => NULL,
            ],
            [
                'key' => 'contact_no',
                'value' => NULL,
            ],
            [
                'key' => 'contact_email',
                'value' => NULL,
            ],
            [
                'key' => 'contact_address',
                'value' => NULL,
            ],
            [
                'key' => 'brochure_path',
                'value' => NULL,
            ],
        ];

        foreach ($data as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}

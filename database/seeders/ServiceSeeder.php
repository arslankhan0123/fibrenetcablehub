<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ServiceSeeder extends Seeder
{
    /**
     * Seed the services imported from the previous site database.
     */
    public function run(): void
    {
        $services = json_decode(
            File::get(database_path('seeders/data/services.json')),
            true,
            flags: JSON_THROW_ON_ERROR
        );

        foreach ($services as $service) {
            $price = $service['price'];
            $numericPrice = is_string($price)
                ? preg_replace('/[^0-9.]/', '', $price)
                : $price;

            Service::updateOrCreate(
                ['id' => $service['id']],
                collect($service)
                    ->except(['id', 'user_id', 'price'])
                    ->put('price', is_numeric($numericPrice) ? $numericPrice : null)
                    ->all()
            );
        }
    }
}

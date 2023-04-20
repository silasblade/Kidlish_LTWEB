<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => 'Classic',
                'slug' => 'classic',
                'stripe_plan' => 'price_1MugZ2DcduVpF3R9EsdcnZgx',
                'price' => 1,
                'description' => 'Classic'
            ],
            [
                'name' => 'Plus',
                'slug' => 'plus',
                'stripe_plan' => 'price_1MugZfDcduVpF3R9CE65htJ1',
                'price' => 4,
                'description' => 'Plus'
            ],
            [
                'name' => 'Royal',
                'slug' => 'royal',
                'stripe_plan' => 'price_1MugahDcduVpF3R9UpJYquPm',
                'price' => 9.99,
                'description' => 'Royal'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}

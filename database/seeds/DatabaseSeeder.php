<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(PortfolioImagesTableSeeder::class);
        $this->call(PortfolioSkillTableSeeder::class);
        $this->call(CertificatesTableSeeder::class);
        $this->call(CertificateSkillTableSeeder::class);
    }
}

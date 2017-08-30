<?php

use Illuminate\Database\Seeder;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAttributes();
        //$this->createEventTypes();
    }

    protected function createAttributes()
    {
        \App\Models\Data\Attribute\DataAttribute::create(['attribute_name' => 'referrer']);
    }

    protected function createEventTypes()
    {

    }
}

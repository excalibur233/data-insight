<?php

use DataInsight\DataSystem\EventModel\AttributeType;
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
        $this->createAttributeTypes();
        //$this->createEventTypes();
    }

    protected function createAttributeTypes()
    {
        factory(AttributeType::class)->create([
            'name' => 'test',
            'label' => ''
        ]);
    }

    protected function createEventTypes()
    {

    }
}

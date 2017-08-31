<?php

use DataInsight\DataSystem\AnalyticObject\TargetUser\TargetUser;
use DataInsight\DataSystem\EventModel\Attribute;
use DataInsight\DataSystem\EventModel\AttributeType;
use DataInsight\DataSystem\EventModel\EventType;
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
        $this->createEventTypes();
        $this->createTargetUsers();
        $this->createEvents();
    }

    protected function createAttributeTypes()
    {
        factory(AttributeType::class)->create([
            'name' => 'ip',
            'label' => 'IP'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'agent',
            'label' => '用户代理'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_id',
            'label' => '元素id'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_content',
            'label' => '元素内容'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_class_name',
            'label' => '元素样式名'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_type',
            'label' => '元素类型'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_selector',
            'label' => '元素选择器'
        ]);
        factory(AttributeType::class)->create([
            'name' => 'element_target_url',
            'label' => '元素链接地址'
        ]);
    }

    protected function createEventTypes()
    {
        factory(EventType::class)->create([
            'name' => 'web_click',
            'label' => 'web元素点击'
        ]);
        factory(EventType::class)->create([
            'name' => 'login',
            'label' => '登录'
        ]);
    }

    protected function createTargetUsers()
    {
        factory(TargetUser::class, 10)->create();
    }

    protected function createEvents()
    {
        factory(\DataInsight\DataSystem\EventModel\Event::class, 10000)->create()
            ->each(function ($e) {
                $e->attributes()->save(
                    factory(Attribute::class)->states('ip')->make()
                );
                $e->attributes()->save(
                    factory(Attribute::class)->states('agent')->make()
                );
                $e->attributes()->save(
                    factory(Attribute::class)->states('element_id')->make()
                );
            });
    }
}

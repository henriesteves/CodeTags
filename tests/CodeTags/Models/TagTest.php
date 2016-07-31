<?php

namespace CodePress\CodeTags\Tests\Models;

use CodePress\CodeTags\Tests\AbstractTestCase;
use CodePress\CodeTags\Models\Tag;

class CategoryTest extends AbstractTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->migrate();
    }

    public function test_check_if_a_tag_can_be_persisted()
    {
        $tag = Tag::create(['name' => 'Tag Test', 'active' => true]);
        $this->assertEquals('Tag Test', $tag->name);

        $tag = Tag::all()->first();
        $this->assertEquals('Tag Test', $tag->name);
    }
}
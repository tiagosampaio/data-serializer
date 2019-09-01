<?php

namespace TiagoSampaioTest;

/**
 * Class SerializerTest
 *
 * @package TiagoSampaioTest
 */
class SerializerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var array
     */
    private $unserialized = [
        'first_name' => 'John',
        'last_name' => 'Doe',
    ];

    /**
     * @var string
     */
    private $serialized = '{"first_name":"John","last_name":"Doe"}';

    /**
     * @var \TiagoSampaio\Serializer
     */
    private $object;

    protected function setUp()
    {
        $this->object = new \TiagoSampaio\Serializer();
    }

    /**
     * @test
     */
    public function serialize()
    {
        $this->assertEquals($this->serialized, $this->object->serialize($this->unserialized));
    }

    /**
     * @test
     */
    public function serializeWithException()
    {
        $this->expectException('TypeError');
        $this->assertEquals('{"first_name":"John","last_name":"Doe"}', $this->object->serialize('anything'));
    }

    /**
     * @test
     */
    public function unserialize()
    {
        $this->assertEquals($this->unserialized, $this->object->unserialize($this->serialized));
    }

    /**
     * @test
     */
    public function unserializeWithException()
    {
        $this->expectException('InvalidArgumentException');
        $this->assertEquals($this->unserialized, $this->object->unserialize('anything'));
    }
}

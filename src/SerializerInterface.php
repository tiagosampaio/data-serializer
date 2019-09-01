<?php

namespace TiagoSampaio;

/**
 * Class SerializerInterface
 *
 * @package TiagoSampaio
 */
interface SerializerInterface
{
    /**
     * @param array $data
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function serialize(array $data);

    /**
     * @param string $data
     *
     * @return array
     *
     * @throws \InvalidArgumentException
     */
    public function unserialize($string);
}

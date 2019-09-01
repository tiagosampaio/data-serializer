<?php

namespace TiagoSampaio;

/**
 * Class Serializer
 *
 * @package TiagoSampaio
 */
class Serializer implements SerializerInterface
{
    /**
     * {@inheritdoc}
     */
    public function serialize(array $data)
    {
        $result = json_encode($data);

        if (false === $result) {
            throw new \InvalidArgumentException("Unable to serialize value. Error: " . json_last_error_msg());
        }

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($string)
    {
        $result = json_decode($string, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException("Unable to unserialize value. Error: " . json_last_error_msg());
        }

        return $result;
    }
}

<?php declare(strict_types=1);

namespace Alies\ShepherdTest;

final class Address
{
    public function __contruct(
        public readonly string $country,
        public readonly string $city,
        public readonly string $addressLine1)
    {
    }
}
<?php declare(strict_types=1);

namespace Alies\ShepherdTest;

final class Address
{
    public function __construct(
        public readonly string $country,
        public readonly string $city,
        public readonly string $addressLine1)
    {
    }

    public function __toString(): string
    {
        return $this->country
            .', '
            .$this->city
            .', '
            .$this->addressLine1;
    }
}

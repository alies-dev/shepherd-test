<?php declare(strict_types=1);

namespace Alies\ShepherdTest;

final class Address
{
    public function __contruct(public readonly string $country, public readonly $city, public readonly $addressLine1)
    {}
}

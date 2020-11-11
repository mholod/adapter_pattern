<?php


namespace App;


use App\Packages\IpLocation;

class IpLocationLocatorAdapter implements Locator
{
    public function fromIp($ipAddress): Mark
    {
        $locator = new IpLocation();
        $location = $locator->locate($ipAddress);

        return new Mark(
            $location['state'],
            $location['region'],
            $location['city']
        );
    }
}
<?php


namespace App;


use App\Packages\IpDatabaseLocator;

class IpDatabaseLocatorAdapter implements Locator
{
    public function fromIp($ipAddress): Mark
    {
        $locator = new IpDatabaseLocator();
        $location = $locator->locate($ipAddress);

        return new Mark(
            $location['db_state'],
            $location['db_region'],
            $location['db_city']
        );
    }
}
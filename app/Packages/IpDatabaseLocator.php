<?php


namespace App\Packages;


class IpDatabaseLocator
{
    public function locate($ip)
    {
        return [
            'db_ip' => $ip,
            'db_city' => 'Bracknell (from db)',
            'db_region' => 'Berkshire',
            'db_state' => 'UK',
        ];
    }
}
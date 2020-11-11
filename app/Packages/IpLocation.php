<?php


namespace App\Packages;


class IpLocation
{
    public function locate($ip)
    {
        return [
            'ip' => $ip,
            'city' => 'Bracknell (from api)',
            'region' => 'Berkshire',
            'state' => 'UK',
            ];
    }
}
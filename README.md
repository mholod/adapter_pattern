# Adapter pattern example in Laravel 8

###Scenario 

A news provider wants to provide local news based on user location

API Package is used that can retrieve location based on user IP address, but it is subject to change: the way it returns the data may change
 
Also another package option exists that fetches location data from database

Based on Laracon conference - "Colin Decarlo - Design Patterns with Laravel" (https://youtu.be/e4ugSgGaCQ0)


##Contents:

- tests: `vendor/bin/phpunit --filter AdapterTest`
- Fake packages that act as a data sources:
   - app/Packages/IpDatabaseLocator.php
   - app/Packages/IpLocation.php
- Adapter classes:
   - app/IpDatabaseLocatorAdapter.php
   - app/IpLocationLocatorAdapter.php
   - app/FakeLocatorAdapter.php
- Dependancy inversion: app/Mark.php
- A repository of news: app/News.php
- Controller: app/Http/Controllers/LocalNewsController.php
- Service provider: app/Providers/NewsProvider.php


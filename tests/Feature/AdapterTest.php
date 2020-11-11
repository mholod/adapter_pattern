<?php

namespace Tests\Feature;

use App\FakeLocatorAdapter;
use App\Locator;
use App\Mark;
use Tests\TestCase;

class AdapterTest extends TestCase
{
    /**
     * @test
     */
    public function adapterReturnsOk()
    {
        $this->app->instance(
            Locator::class,
            FakeLocatorAdapter::returning(new Mark('England', 'Greater London', 'London (test)'))
        );
        
        $response = $this->get('/');
        
        $response->assertStatus(200);
        $response->assertSee('All the NEWS near the London (test)');
    }
}

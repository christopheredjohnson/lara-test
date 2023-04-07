<?php

namespace Christopheredjohnson\LaraTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Christopheredjohnson\LaraTest\LaraTest
 */
class LaraTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Christopheredjohnson\LaraTest\LaraTest::class;
    }
}

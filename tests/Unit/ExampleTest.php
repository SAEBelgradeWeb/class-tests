<?php

namespace Tests\Unit;

use App\Services\NameService;
use PHPUnit\Framework\TestCase;
use Exception;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_that_numbers_are_equal()
    {
        $a = 10;
        $b = 10;
        $this->assertEquals(0, $a - $b);
    }

    public function test_fullname_returns_correct_name()
    {
        $nameService = new NameService();
        $fullname = $nameService->fullname("Jane", "Brown");
        $this->assertEquals("Jane Brown", $fullname);
    }

    public function test_that_fullname_returns_error_on_numbers()
    {
        $this->expectException(Exception::class);
        $nameService = new NameService();
        $nameService->fullname(3, 5);


    }
}

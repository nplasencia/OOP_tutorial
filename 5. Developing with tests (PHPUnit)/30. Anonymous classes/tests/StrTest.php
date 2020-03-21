<?php

namespace Nplasencia;

use Nplasencia\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function test_studly_method_convert_string()
    {
        $this->assertSame(
            'Name', Str::studly('name'),
            'The method Str::studly() using name doesn\'t return Name'
        );

        $this->assertSame(
            'FullName', Str::studly('full_name'),
            'The method Str::studly() using full_name doesn\'t return FullName'
        );
    }
}

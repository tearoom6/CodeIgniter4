<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;

final class OneOfMyModelsTest extends CIUnitTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        helper('text');
    }
}

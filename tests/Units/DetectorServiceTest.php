<?php

namespace App\Tests\Units;

use App\Services\DetectorService;
use PHPUnit\Framework\TestCase;

class DetectorServiceTest extends TestCase
{
    public function testDetectBot()
    {
        $detector = new DetectorService;
        $data = $detector->detect('bot');

        $this->assertArrayHasKey('bot', $data);
    }

    public function testDetectClient()
    {
        $detector = new DetectorService;
        $data = $detector->detect('device');

        $this->assertArrayHasKey('clientInfo', $data);
    }
}

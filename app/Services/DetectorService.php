<?php

/**
 * This file is part of device detector microservice app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Services;

use DeviceDetector\DeviceDetector;

class DetectorService
{
    /**
     * Detect agent
     *
     * @param string $agent
     * @return array
     */
    public function detect(string $agent): array
    {
        $dd = new DeviceDetector($agent);
        $dd->parse();

        if ($dd->isBot()) {
            return ['bot' => $dd->getBot()];
        }

        return [
            'clientInfo' => $dd->getClient(),
            'osInfo' => $dd->getOs(),
            'device' => $dd->getDeviceName(),
            'brand' => $dd->getBrandName(),
            'model' => $dd->getModel(),
        ];
    }
}

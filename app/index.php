<?php

/**
 * This file is part of device detector microservice app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

/**
 * Register The Auto Loader
 */
require_once '../vendor/autoload.php';

/**
 * Set header
 */
header('Content-type: application/json');

/**
 * Run The Application
 */
use App\Services\DetectorService;
$detector = new DetectorService;
$data = $detector->detect($_SERVER['HTTP_USER_AGENT']);

echo json_encode($data);

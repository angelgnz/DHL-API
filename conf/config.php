<?php
$dhl_id = getenv('DHL_ID');
$dhl_pass = getenv('DHL_PASS');
$dhl_shipper = getenv('DHL_SHIPPER');
return array(
    // Opciones AutoloadManager
    'autoloader' => array(

        // Solo escanea cuando no se encuentra en el mapa (Solo debe hacerse fuera de producción)
        'scanOptions' => autoloadManager::SCAN_ONCE,

        // Completa la dirección del mapa
        'dir' => sys_get_temp_dir() . '/dhl-api-autoload.php',
    ),

    // Configuraciónes relacionadas a DHL
    'dhl' => array(
        // ID DHL
        'id' => $dhl_id,

        // Password DHL
        'pass' => $dhl_pass,

        // Numeros de cuenta
        'shipperAccountNumber' => $dhl_shipper,
        'billingAccountNumber' => $dhl_shipper,
        'dutyAccountNumber' => $dhl_shipper,
    ),
);
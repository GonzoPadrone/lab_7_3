<?php

use Zolotarev\MyLog;
use Zolotarev\ZolotarevException;
use Zolotarev\QuEquation;

include "vendor/autoload.php";


ini_set("display_errors", 1);
error_reporting(-1);

try {
    $folder = 'log\\';
    if (!file_exists($folder)) {
        mkdir($folder, 0700);
    }

    $open_file = fopen("version", "r");
    MyLog::log("Version program: " . fgets($open_file));
    fclose($open_file);

    $b = new QuEquation();
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Введите " . $i . " аргумент: ";
        $values[] = readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Уравнение: " . $va . "x^2 + " . $vb . "x + " . $vc . " = 0");
    $x = $b->solve($va, $vb, $vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: " . $str);
} catch (ZolotarevException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();

?>
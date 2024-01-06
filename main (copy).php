<?php

require_once 'vendor/autoload.php'; // Include the Composer autoloader

use Symfony\Component\Yaml\Yaml;

function readYamlFile($filePath) {
    try {
        $yamlData = Yaml::parseFile($filePath);
        return $yamlData;
    } catch (Exception $e) {
        echo "Error reading YAML file: " . $e->getMessage();
        return null;
    }
}

// Example usage
$filePath = 'error_codes.yaml';
$yamlData = readYamlFile($filePath);

if ($yamlData !== null) {
    echo "YAML data as an associative array:\n";
    print_r($yamlData);
}

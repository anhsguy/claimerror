<?php

require_once 'vendor/autoload.php'; // Include the Composer autoloader
use Symfony\Component\Yaml\Yaml;
include'read_file.php';

function readYamlFile($filePath) {
    try {
        $yamlData = Yaml::parseFile($filePath);
        return $yamlData;
    } catch (Exception $e) {
        echo "Error reading YAML file: " . $e->getMessage();
        return null;
    }
}
// Function to get description based on error code
function getDescriptionByErrorCode($errorCode, $errorsArray) {
    return $errorsArray[$errorCode] ?? "Description not found for error code $errorCode";
}
// Example usage
$error_filePath = 'error_codes.yaml';
$explan_filePath = 'explan_codes.yaml';

$filePath = 'EL801284.411';
$errors = readYamlFile($error_filePath);
$explan = readYamlFile($explan_filePath);
list($ERerrors,$ERexplan)=read_file($filePath,$errors,$explan) ;
print_r($ERerrors);
print_r($ERexplan);

$filePath = 'PK801284.821';
list($RApaidexams,$NotPaid)=RA_file_to_array($filePath,$explan);
print_r($RApaidexams);
print_r($NotPaid);
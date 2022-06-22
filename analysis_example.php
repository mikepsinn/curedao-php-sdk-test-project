<?php


use CureDAO\Client\Models\MeasurementSet;
use CureDAO\Client\Requests\AnalysisRequest;
use CureDAO\Client\Variables\PhysicalActivityVariables\DailyStepCountVariable;
use CureDAO\Client\Variables\VitalSignsVariables\HeartRateVariabilityVariable;

require_once __DIR__ . '/vendor/autoload.php';
$predictorMeasurementSet = (new MeasurementSet())
    ->setVariable(new DailyStepCountVariable())
    ->addMeasurements([
        [
            'start_at' => '2022-05-7',
            'value' => 8472,
        ],
        [
            'start_at' => '2022-05-8',
            'value' => 3402,
        ],
        [
            'start_at' => '2022-05-9',
            'value' => 3930,
        ],
        [
            'start_at' => '2022-05-10',
            'value' => 9909,
        ],
        [
            'start_at' => '2022-05-11',
            'value' => 4943,
        ],
        [
            'start_at' => '2022-05-12',
            'value' => 9012,
        ],
        [
            'start_at' => '2022-05-13',
            'value' => 1122,
        ],
    ]);

$outcomeMeasurementSet = (new MeasurementSet())
    ->setVariable(new HeartRateVariabilityVariable())
    ->addMeasurements([
        [
            'start_at' => '2022-05-7',
            'value' => 8472,
        ],
        [
            'start_at' => '2022-05-8',
            'value' => 3402,
        ],
        [
            'start_at' => '2022-05-9',
            'value' => 3930,
        ],
        [
            'start_at' => '2022-05-10',
            'value' => 9909,
        ],
        [
            'start_at' => '2022-05-11',
            'value' => 4943,
        ],
        [
            'start_at' => '2022-05-12',
            'value' => 9012,
        ],
        [
            'start_at' => '2022-05-13',
            'value' => 1122,
        ],
    ]);

$yourUserId = "test-user-for-sdk-analyze-test".time();
$analysis = new AnalysisRequest($yourUserId, $predictorMeasurementSet, $outcomeMeasurementSet);
$results = $analysis->analyze();
print_r($results);

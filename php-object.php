<?php

$object = new stdClass();
$object->first_name = 'Ahmad';
$object->last_name = 'Raza';
$object->age = '20';
$object->Job = 'Full Stack Developer';
$object->company = 'Atakisolutions';

echo "<pre>";
print_r($object);
echo "<pre>";
echo "<br />";

$person_detail = array(
    "first_name" => 'Ahmad',
    "last_name" => 'Raza',
    "age" => '20',
    "Job" => 'Full Stack Developer',
    "company" => 'Ataki-solutions',
);

$object = (object) $person_detail;

echo "<pre>";
print_r($object);
echo "<pre>";

<?php

$food = 'cake';

$return_value = match($food) {
    'apple' => 'This food is an apple',
    'cake' => 'This food is a cake'
};
var_dump($return_value);

<?php

// The array

$array = [
  'item' => 'value!',
  'array' => [
    'arrayitem' => 'array item value'
  ],
  
];

// Will return 'value!'
Shorthand::get($array, 'item');

// Will return 'array item value'
Shorthand::get($array, 'array\arrayitem');

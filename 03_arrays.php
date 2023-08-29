<?php
  // simple array
  $numbers = [1, 44, 55, 76, 89];
  $fruits = array('apple', 'orange', "pear");

  // print_r($numbers);
  // print_r($fruits);
  
  // var_dump($numbers);
  // var_dump($fruits);


  echo $fruits[1];

  // associative array (can choose index) - basically an object/dictionary (key/index)
  $colours = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
  ];

  $person = [
    'first_name' => 'Ben',
    'last_name' => 'Bilgili',
    'email' => 'benbilgili@gmail.com',
  ];

  $people = [
    [
      'first_name' => 'Ben',
      'last_name' => 'Bilgili',
      'email' => 'benbilgili@gmail.com',
    ],
    [
      'first_name' => 'John',
      'last_name' => 'Smith',
      'email' => 'johnsmith@gmail.com',
    ]
    ];
  
  echo $colours[4];
  echo $hex['blue'];
  echo $person['first_name'];
  echo $people[1]['email'];

  var_dump(json_encode($people));
  

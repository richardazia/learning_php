
<?php
  $name = 'Richard';
  echo "Hello, $name. ";
  // concatenation
  echo 'Hello, ' .$name . '!';

  echo 'Welcome to Richard\'s page';

  echo "This is line 1 \n";
  echo "This is line 2 \n";

  echo 'Richard\'s nickname in this place was unknown!';

  //Indexable array

  $colours = array('Red', 'Green', 'Blue');
  print_r( $colours );
  echo $colours[2];

  echo '<h1>' . $colours[1] . '</h1>';

  $xolours[] = 'orange';
  print_r( $colours );

  // Playing with asssociative arrays
  $walk_villages = array(
    'lakeside' => 'Coppet, Vaud',
    'Jura' => 'St Cergue, Vaud',
    'small' => 'Tranchepied, Vaud',
  );

  echo '<pre';
  print_r( $walk_villages );
  echo '</pre>';

  echo '<p>' . $walk_villages['small'] . '</p>';

  //Multidimentional Array
  $people = array(
    'Joe' => array(
      'age' => 34,
      'job' => 'teacher',
      'state' => 'PA',
    ),
    'Phil' => array(
      'age' => 19,
      'job' => 'Photographer',
      'state' => 'NY',
    ),
    'Mike' => array(
      'age' => 25,
      'job' => 'logistician',
      'state' => 'NY',
    ),
    'Rob' => array(
      'age' => 27,
      'job' => 'sheep herder',
      'state' => 'Wy',
    ),
  );

  echo '<pre>';
  print_r( $people );
  echo '</pre>';

  //To get data
  echo '<h3>'. $people['Mike']['job'] . '</h3>';

 ?>

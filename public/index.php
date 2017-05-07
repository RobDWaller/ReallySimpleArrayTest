<?php

/**
 * A simple array test for PHP developers. There are numerous ways to complete
 * the tasks involved in this test and there are no right, or perfect, answers.
 * The test though will reveal roughly how knowledgeable and experienced a 
 * developer is.
 *
 * For more information on how to complete this test please read the ReadMe.
 *
 * @author Rob Waller <rdwaller1984@gmail.com>  
 */

require_once(__DIR__ . '/../src/Functions.php');
$userArray = require_once(__DIR__ . '/../src/UserArray.php');

dump($userArray);

/**
 * Task One
 *
 * From the $userArray array create a new array that only includes users under
 * the age of 30.
 */

$usersUnderThirty = 'Write some code.';

dump($usersUnderThirty);

/**
 * Task Two
 * 
 * From the $userArray array create a new array that adds a new field called 
 * fullname to each array item. This field should combine the values of the 
 * forename and surname fields. 
 */

$usersWithFullname = 'Write some code.';

dump($usersWithFullname);

/**
 * Task Three
 *
 * From the $userArray array create a new array where each array item has had 
 * the email field removed. 
 */

$usersWithEmailRemoved = 'Write some code.';

dump($usersWithEmailRemoved);
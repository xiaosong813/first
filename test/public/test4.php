<?php
$message = 'hello';

// 没有 "use"
$example = function () {
    var_dump($message);
};
echo $example().'<br>';

// 继承 $message
$example = function () use ($message) {
    var_dump($message);
};
echo '2--'.$example().'<br>';

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
echo '3--'.$example().'<br>';

// Reset message
$message = 'hello';

// Inherit by-reference
$example = function () use (&$message) {
    var_dump($message);
};
echo '4--'.$example().'<br>';

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world';
echo '5--'.$example().'<br>';

// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");

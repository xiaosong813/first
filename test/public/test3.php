<?php
class test{
public function testTry(){
    $i = 0;
 try {
    $i= $i+1;
    return $i;
} catch (Exception $e) {
    echo "wc";
} finally {
   $i= $i+2;
  // print_r($i);
  return "1111";//当finally有return的时候 返回这个，当注释后，返回try 或者是 catch的内容。
 
}
  
}
}
 
$b = new test();
echo $b->testTry();
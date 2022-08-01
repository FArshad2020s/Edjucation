<?php
$string1 = "I have %d milion tomens money";
$string2 = "I have %f milion tomens money";
$string3 = "I have %s";
echo "resulte1: ".sprintf($string1,5);?><br><?php
echo "resulte2: ".sprintf($string2,5.350);?><br><?php
echo "resulte3: ".sprintf($string3,"no anymoney");?><br><?php
?>
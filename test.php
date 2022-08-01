<?PHP
$str = "";
$array = ["a","c","b","d"];
foreach($array as $item){
	$str = $str.$item ;
	if($item === $array[count($array)-1]){
		continue ;
	}
	$str = $str.",";
}
echo $str ;
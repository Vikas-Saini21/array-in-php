<?php
$arr=array(1,2,3,4,5);
echo"<pre>";
    print_r($arr);
echo"</pre>"
?>


<!-- method in array -->
<!-- count method -->
<?php
$arr=array(1,2,3,4,5);
var_dump($arr);
?>


<!-- sizeof method -->
<?php
$arr=array(1,2,3,4,5);
echo sizeof($arr);
?>

<!-- array_count_values method-->
<?php
$arr=array(1,2,3,4,5,6,1,1);
print_r(array_count_values($arr));
?>


<!-- in_array method-->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
if(in_array('kota',$places))
{
    echo "yes it is";
}
else
{
    echo "not available";
}
?>

<!-- array_search method-->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
echo array_search('kota',$places);
?>

<!-- array_replace method -->
<?php
$places=array('jaipur','jhunjhunu','manesar');
$places2=array('kota','jammu','udaipur');
$newplaces=array_replace($places2,$places);
print_r($newplaces)
?>

<!-- array_shift method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
array_shift($places);
print_r($places);
?>

<!-- array_unshift method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
array_unshift($places,'delhi');
print_r($places);
?>
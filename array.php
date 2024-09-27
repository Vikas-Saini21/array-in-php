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
echo count($arr)."<br>";
var_dump($arr);
?>


<!-- sizeof method -->
<?php
$arr=array(1,2,3,4,5);
echo sizeof($arr)."<br>";
?>

<!-- array_count_values method-->
<?php
$arr=array(1,2,3,4,5,6,1,1);
echo"<pre>";
print_r(array_count_values($arr));
echo"</pre>";
?>


<!-- in_array method-->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
if(in_array('kota',$places))
{
    echo "yes it is"."<br>";
}
else
{
    echo "not available"."<br>";
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
echo"<pre>";
print_r($newplaces);
echo"</pre>";
?>

<!-- array_shift method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
array_shift($places);
echo"<pre>";
print_r($places);
echo"</pre>";
?>

<!-- array_unshift method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu','udaipur');
array_unshift($places,'delhi');
echo"<pre>";
print_r($places);
echo"</pre>";
?>


<!-- array_merge method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu');
$places2=array('delhi','agra','udaipur','jaipur');
$newplaces=array_merge($places,$places2);
echo"<pre>";
print_r ($newplaces);
echo"</pre>";
?>


<!-- array_combine method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu');
$places2=array('delhi','agra','udaipur','jaipur');
$newplaces=array_combine($places,$places2);
echo"<pre>";
print_r ($newplaces);
echo"</pre>";
?>


<?php
$places=array('india','rajasthan','goa','punjab');
$places2=array('delhi','jaipur','panjim','chandigarh');
$newplaces=array_combine($places,$places2);
echo"<pre>";
print_r ($newplaces);
echo"</pre>";
?>


<!-- array_slice method -->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array_slice($arr,1,3);
echo"<pre>";
print_r($arr1);
echo"</pre>";
?>


<!-- array_intersect method -->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array(1,2,7,8,9,10);
$arr2=array_intersect($arr,$arr1);
echo"<pre>";
print_r($arr2);
echo"</pre>";
?>


<!-- array_values method-->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array_values($arr1);
echo"<pre>";
print_r($arr1);
echo"</pre>";
?>


<!-- associative array -->
<?php
$arr=array(
    "vikas"=>20,
    "deependra"=>22,
    "arvind"=>20,
    "suraj"=>23,
    "komal"=>22,
    "monika"=>26,
    "himanshu"=>30,
);
echo"<pre>";
print_r($arr);
echo"</pre>";
var_dump($arr)."<br>";
?>

<?php
$arr=[
    "vikas"=>20,
    "deependra"=>22,
    "arvind"=>20,
    "suraj"=>23,
    "komal"=>22,
    "monika"=>26,
    "himanshu"=>30,
];
echo"<pre>";
print_r($arr)."<br>";
echo"</pre>";
var_dump($arr);
?>

<!-- inserting the value -->
<?php
$arr=array(
    "vikas"=>20,
    "deependra"=>22,
    "arvind"=>20,
    "suraj"=>23,
    "komal"=>22,
    "monika"=>26,
    "himanshu"=>30,
);
$arr["abhay"]=50;
echo"<pre>";
print_r($arr);
echo"</pre>";
?> 

<!-- another way to create an array with square braces  -->
<?php
$marks=array(
    "arvind"=>[
        "hindi"=>40,
        "english"=>50,
        "maths"=>60,
    ],
    "vikas"=>[
        "hindi"=>60,
        "english"=>80,
        "maths"=>70,
    ],
    );
    echo"<pre>";
    print_r($marks);
    echo"</pre>";
?>

<!-- array_flip method -->
<?php
$arr=array(
    "Vikas"=>20,
    "Suraj"=>23,
);
$newarray=array_flip($arr);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>


<!-- array_change_key_case -->
<?php
$arr=array(
    "Vikas"=>20,
    "Suraj"=>23,
);
$newarray=array_change_key_case($arr,CASE_UPPER);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>


<!-- array_sum mthod -->
<?php
$arr=array(1,2,3,4,5,6);
$newarray=array_sum($arr);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>


<!-- array_product mthod -->
<?php
$arr=array(1,2,3,4,5,6);
$newarray=array_product($arr);
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>


<!-- sort method -->
<?php
$number=array(25,55,45,5,8);
sort($number);
echo"<pre>";
print_r($number);
echo"</pre>";
?>


<!-- rsort method -->
<?php
$number=array(25,55,45,5,8);
rsort($number);
echo"<pre>";
print_r($number);
echo"</pre>";
?>


<!-- asort method -->
<?php
$number=array(
    "a"=>2,
    "b"=>1
);
asort($number);
echo"<pre>";
print_r($number);
echo"</pre>";
?>


<!-- array_fill_keys method -->
<?php
$arr=array(1,2,3,4,5,6,7,8,9,10);
$a=array_fill_keys($arr,"php");
echo"<pre>";
print_r($a);
echo"</pre>";
?>


<!-- array_fill method-->
<?php
$newarray=array_fill(3,7,"php");
echo"<pre>";
print_r($newarray);
echo"</pre>";
?>

<!-- array traversing method -->
 <!-- current method -->
  <?php
  $arr=array(1,2,3,4,5,6);
  echo current($arr)."<br>";
  ?>
  

<!-- key method -->
<?php
  $arr=array(1,2,3,4,5,6);
  echo key($arr)."<br>";
?>  


<!-- pos method   -->
<?php
  $arr=array(1,2,3,4,5,6);
  echo pos($arr)."<br>";
  ?>


<!-- next method   -->
<?php
  $arr=array(1,2,3,4,5,6);
  next($arr)."<br>" ;
  echo current($arr)."<br>";
  ?>


<!-- prev method   -->
<?php
  $arr=array(1,2,3,4,5,6);
  prev($arr)."<br>";
  echo current($arr)."<br>";
  ?>


<!-- end method   -->
<?php
  $arr=array(1,2,3,4,5,6);
  end ($arr);
  echo current($arr)."<br>";
  ?>


<!-- reset method   -->
<?php
  $arr=array(1,2,3,4,5,6);
  reset($arr);
  echo current($arr)."<br>"; 
  ?>

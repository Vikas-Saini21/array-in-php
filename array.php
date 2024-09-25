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


<!-- array_merge method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu');
$places2=array('delhi','agra','udaipur','jaipur');
$newplaces=array_merge($places,$places2);
print_r ($newplaces);
?>


<!-- array_combine method -->
<?php
$places=array('jaipur','jhunjhunu','kota','jammu');
$places2=array('delhi','agra','udaipur','jaipur');
$newplaces=array_combine($places,$places2);
print_r ($newplaces);
?>


<?php
$places=array('india','rajasthan','goa','punjab');
$places2=array('delhi','jaipur','panjim','chandigarh');
$newplaces=array_combine($places,$places2);
print_r ($newplaces);
?>


<!-- array_slice method -->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array_slice($arr,1,3);
print_r($arr1);
?>


<!-- array_intersect method -->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array(1,2,7,8,9,10);
$arr2=array_intersect($arr,$arr1);
print_r($arr2);
?>


<!-- array_values method-->
<?php
$arr=array(1,2,3,4,5,6);
$arr1=array_values($arr1);
print_r($arr1);
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
print_r($arr)."<br>";
var_dump($arr);
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
print_r($arr)."<br>";
var_dump($arr);
?>

<!-- insering the value -->
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
print_r($arr);
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
print_r($newarray);
?>


<!-- array_change_key_case -->
<?php
$arr=array(
    "Vikas"=>20,
    "Suraj"=>23,
);
$newarray=array_change_key_case($arr,CASE_UPPER);
print_r($newarray);
?>


<!-- array_sum mthod -->
<?php
$arr=array(1,2,3,4,5,6);
$newarray=array_sum($arr);
print_r($newarray)
?>


<!-- array_product mthod -->
<?php
$arr=array(1,2,3,4,5,6);
$newarray=array_product($arr);
print_r($newarray)
?>


<!-- sort method -->
<?php
$number=array(25,55,45,5,8);
sort($number);
print_r($number)
?>

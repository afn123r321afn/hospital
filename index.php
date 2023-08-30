<?php
echo gettype(true);
echo '<br>';
echo gettype(false);
echo '<br>';
echo gettype(5);
echo '<br>';
echo gettype(3.5);
echo '<br>';
echo gettype(array(5=>"w",'t','q'));
echo '<br>';
echo gettype([5=>"w",'t','q']);
echo '<br>';
echo 5 + (int)'3 lessons';
echo '<br>';
echo (int)(10.5+10.5);
echo '<br>';
echo gettype((int)(10.5+10.5));
echo '<br>';
////////////////////////////////////////////////////////////////////
var_dump((bool) '');
echo '<br>';
var_dump((bool) array());
echo '<br>';
var_dump((bool) '0');
echo '<br>';
var_dump((bool) []);
echo '<br>';
var_dump((bool) 'kj');
echo '<br>';
var_dump((bool) 34);
echo '<br>';
var_dump((bool) [0]);
echo '<br>';
var_dump((bool) 6.9);
echo '<br>';
/////////////////////////////////////////////////////////////////////////
echo "hello'world'";
echo '<br>';
echo 'hello"world"';
echo '<br>';
echo 'hello';
echo '<br>';
echo nl2br('uytt
yft\'
khh');
/////////////////////////////////////////////////////////
$name = 'afnan';
echo <<<"heredoc"
khl \\\\,, ''''''
' "'' $name
heredoc;

echo '<br>';

echo <<<'nowdoc'
khl \\\ ,, ''''''
' "'' $name
nowdoc;
/////////////////////////////////////////////////////////////
echo '<br>';

echo '<pre>';
print_r([
    'a'=>'afnan',
    'n'=>'noor'
]);
echo '</pre>';
//////////////// 8/19 /////////////////////////////////////////
$username = 'eman';
echo '$username';
echo '<br>';
echo "welcome $username";
echo '<br>';
include 'test.php';
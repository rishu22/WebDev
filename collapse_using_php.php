<html>
<head>
<title>Collapse_using_php</title>
<style>
    ul {
        list-style: none;
    }
	ul li {
    background: silver;
    margin: 10px;

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slide').hide();
    });
    
    function Show(id)
    {
        var sym = $('#'+id+'-symbol').html();
        
        if(sym.trim() == "+")
        {
            $('#'+id).show(500);
            $('#'+id+'-symbol').html("- ");
        }
        else
        {
            $('#'+id).hide(500);
            $('#'+id+'-symbol').html("+ ");
        }
        
    }
    
</script>
<body>

<?php

$firstoption=array("numbers","vowels","animals","birds");    
$numbers=array("one","two","three");    
$vowels= array ("a","e","i","o","u");    
$animals=array("lion","tiger","dog","wolf","horse","Zebra");    
$birds=array("parrot","sparrow","crow");

$AllArray = ["firstoption", "numbers", "vowels", "animals", "birds"];

echo "<ul>";

foreach($AllArray as $a)
{
	echo"<center>";
    echo "<li><a onclick=\"Show('".$a."')\" style='text-decoration:none; color:black;' href='#'><span  id='".$a."-symbol'>+ </span>".$a."</a><ul class='slide'  id='".$a."'>";
    
    foreach($$a as $id=>$val)
    {
        echo "<li> @ ".$val."</li>";
    }
    
    echo "</ul></li>";
}

echo "</ul>";
echo "</center>"

?>
</body>
</html>


<?php
$regexdate="^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}^";
$regexmobile="/[789][0-9]{9}/";
$text=$_POST['text'];
if (preg_match_all($regexmobile,$text,$match)) {
    echo '<b>'."MOBILE NUMBERS:";
    $t=count($match[0]);

    echo "<br><br><br>";
    $t--;
    while($t>=0){
        echo '<li>'.$match[0][$t]."<br></li>";
    $t=$t-1;
}
} 
else {
    
    echo "No match found !!";
}
echo '<br><br><br>';

if (preg_match_all($regexdate,$text,$matches)) {
    echo '<b>'."DATES:";
    $t=count($matches[0]);
    echo"<br><br><br>";
    $t--;

    while($t>=0){
        $date=array();
        $date=explode('/',$matches[0][$t]);
        if(checkdate($date[0],$date[1],$date[2]))
        echo '<li>'.$matches[0][$t]."<br></li>";
    $t=$t-1;
}
} else {
    echo "No match found !!";
}
?>

<?php  
print(str($_POST['input_text']));
$out = system("python test1.py "+str($_POST['input_text']))
?>
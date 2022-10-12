<?php
$paragraph='Hi, this is my first time using PHP , i hope it will be a success!';
$lenght=strlen($paragraph);

?>

<?= $paragraph ?>
<br />
<?=  'paragraph lenght :' . $lenght ?>

<?php
 $paragraphCensured = str_replace($_GET['word'], '****',$paragraph );
?>
<br />
<?= $paragraphCensured ?>
<br />
<?= 'paragraph lenght :' . strlen($paragraphCensured) ?>

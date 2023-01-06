Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

<?php 

$par1 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis facilis maxime quisquam. qui modi enim illo iste voluptatum hic illum quam quo minus quaerat saepe eligendi veniam officiis quos? Natus." ;

$par2 = explode(".", $par1);

var_dump ($par2);

foreach($par2 as $key => $value) {
    
    echo  $value;
    echo "<br>";
}

?>


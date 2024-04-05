<?php 
$name = "Patricio";
$isDev = false;
$age = 2;

$isOLD = $age > 30;

define("LOGO_URL", "https://www.php.net/images/logos/new-php-logo.svg");

$output = "Hola" 
. " $name" 
. " <br/> con una edad de " 
. "$age";


$outputAge = $isOLD
    ?  'eres viejo wey' 
    :  'eres joven milagro' ;


$outAge = match (true) {
    $age < 2 => 'eres un bebe',
    $age < 10 => 'eres un niño',
    $age < 15 => 'eres joven',
    $age === 18 => 'eres un adolecente',
    $age < 30 => 'eres joven adulto',
    $age < 40 => 'eres viejo',
    default => 'eres viejo',

};


$bestLenguage = [ "Java", "Javascript", "PHP", "Python",];
$bestLenguage[4] = "React";
$bestLenguage[] = "Angular ";


$person = [
    "name" => "Patricio",
    "age" => 2,
    "isDev" => false,
    "bestLenguage" => [ "Java", "Javascript", "PHP", "Python",],
];
// var_dump($name);
// var_dump($isDev);
// var_dump($age);
const TICK = 'SAYONARA';
?>

<h4> 

    <?php $person ?>
</h4>

<ul>
    <?php foreach ($bestLenguage as $key => $lenguage) : ?> 
        <li><?= $lenguage?></li>
    <?php endforeach;?> 
</ul>

<?php if ($isOLD) : ?>
    <h2> bienvenido señor </h2>
<?php elseif ($isDev) : ?>
    <h2> Eres dev, Tas jodido</h2>
<?php else: ?>
    <h2> Bienvenido Joven  </h2>

<?php endif;?>


<h2> 
    <?= $outAge ?>
</h2>

<h1>
    <?=  $output. "<br/>". $outputAge;  ?>
</h1>

<img src="<?= LOGO_URL ?> " alt="LOGO" width="200px">
<style>
    :root {
        background-color: lightslategrey;
    }

    body {
        display: grid;
        place-content: center;
    }

    h1 {
        color: saddlebrown;
    }
</style>
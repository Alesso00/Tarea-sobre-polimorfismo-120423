<?php
include("gato.php");
include("perro.php");
include("vaca.php");

class Animal
{


    public function roar()
    {
        echo "El";
    }
}

function RoarAnimal(Animal $_animal)
{
    $_animal->roar();
}
$gato = new Gato("gato");
$perro = new Perro("perro");
$vaca = new Vaca("vaca");

if (isset($_POST['gato'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['perro'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['vaca'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
}

?>
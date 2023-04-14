<?php

include("abc.php");
class Abecedario
{


    public function decir_abecedario()
    {
        echo "El";
    }
}

function decirabc(Abecedario $_abecedadio)
{
    $_abecedadio->decir_abecedario();
}
$abc = new ABC("abecedario");
$a = new A("La letra");
$b = new B("La letra");
$c = new C("La letra");
$d = new D("La letra");
$e = new E("La letra");
$f = new F("La letra");
$g = new G("La letra");
$h = new H("La letra");
$i = new I("La letra");
$j = new J("La letra");
$k = new K("La letra");
$l = new L("La letra");
$m = new M("La letra");
$n = new N("La letra");
$o = new O("La letra");
$p = new P("La letra");
$q = new Q("La letra");
$r = new R("La letra");
$s = new S("La letra");
$t = new T("La letra");
$u = new U("La letra");
$v = new V("La letra");
$w = new W("La letra");
$x = new X("La letra");
$y = new Y("La letra");
$z = new Z("La letra");



if (isset($_POST['abecedario'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($abc) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['a'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($a) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['b'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($b) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['c'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($c) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['d'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($d) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['e'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($e) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['f'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($f) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['g'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($g) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['h'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($h) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['i'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($i) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['j'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($j) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['k'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($k) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['l'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($l) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['m'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($m) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['n'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($n) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['o'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($o) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['p'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($p) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['q'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($q) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['r'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($r) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['s'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($s) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['t'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($t) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['u'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($u) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['v'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($v) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['w'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($w) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
} else if (isset($_POST['x'])) {
?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php decirabc($x) ?>");
        window.speechSynthesis.speak(msg);
    </script>
<?php
}
else if (isset($_POST['y'])) {
    ?>
        <script>
            var msg = new SpeechSynthesisUtterance("<?php decirabc($y) ?>");
            window.speechSynthesis.speak(msg);
        </script>
    <?php
    } else if (isset($_POST['z'])) {
    ?>
        <script>
            var msg = new SpeechSynthesisUtterance("<?php decirabc($z) ?>");
            window.speechSynthesis.speak(msg);
        </script>
    <?php
    }
?>
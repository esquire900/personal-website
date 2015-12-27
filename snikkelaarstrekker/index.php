<?php

$fullPool = ['Simon', 'Thomas', 'Job', 'Vero', 'Wouter', 'Laure-Anne', 'Sharan'];

$func = function ($fullPool) {
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        if ($_POST['pass'] == '') {
            return "Vul iets van een wachtwoordje in, dan kunnen de andere pieten niet meekijken";
        }
        if (is_file('res.data')) {
            $file = json_decode(file_get_contents('res.data'), true);
        } else {
            $file = [];
        }
        $pool = isset($file['pool']) ? $file['pool'] : $fullPool;
        if (!in_array($_POST['name'], $fullPool)) {
            return "Naam moet een dan de volgende zijn: " . implode(",", $pool);
        }
        if (!isset($file['results'])) {
            $file['results'] = [];
        }

        if (isset($file['results'][$_POST['name']])) {
            $res = openssl_decrypt($file['results'][$_POST['name']], "aes-128-cbc", $_POST['pass'], false,
                'xxxxxxxxxxxxxxxx');
            if ($res == false) {
                return "De NSA encryptor heeft gezien dade gij uw wachtwoord nie het ingevuld!";
            }
            return "Ge het al getrokken: " . $res;
        } else {
            $trekPool = $pool;
            foreach ($trekPool as $i => $name) {
                if ($name == $_POST['name']) {
                    unset($trekPool[$i]);
                }
            }
            $trekPool = array_values($trekPool);
            $rand = rand(0, count($trekPool) - 1);
            $getrokken = $trekPool[$rand];

            foreach ($pool as $i => $name) {
                if ($name == $getrokken) {
                    unset($pool[$i]);
                }
            }

            $file['results'][$_POST['name']] = openssl_encrypt($getrokken, "aes-128-cbc", $_POST['pass'], false,
                'xxxxxxxxxxxxxxxx');
            $file['pool'] = array_values($pool);
            file_put_contents("res.data", json_encode($file, true));
            return "Och zo schoon zou het zijn, als er van jou voor <b>" . $getrokken . "</b> een cadeautje zou zijn.";
        }
    }
    return false;
};

$message = $func($fullPool);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/darkly/bootstrap.min.css">
</head>
<body>
<br><br><br>
<marquee behavior="scroll" direction="left" scrollamount=15>
    <h2>Super Sint-trekker 2000 &trade; &copy;</h2>
</marquee>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <center>
                <img src="sint_galop1.gif" alt="">
            </center>
            <br><br>
            <?php if ($message): ?>
                <div class="alert alert-success" role="alert"><?= $message ?></div>
            <?php endif; ?>
            <center>
                Sinterklaas kapoentje, <br>
                Stop wat in mijn invoerveldje, <br>
                Stop wat in mijn (l)aarsje, <br>
                En ge krijgt lootje van sinterklaasje. <br>
            </center>
            <br><br>

            <div class="well">
                <form class="form-horizontal" action="index.php?n=<?= $_GET['n'] ?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="select" class="col-lg-6 control-label">Hoe je moeder je noemt</label>

                            <div class="col-lg-6">
                                <select class="form-control" id="select" name="name">
                                    <option><?php echo base64_decode($_GET['n']) ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-6 control-label">Iets wa gij makkelijk kent
                                onthouden</label>

                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="textArea" name="pass">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Geef me die naam nou maar">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

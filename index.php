<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>

<body>
    <h1>
        <?php
        $title = "Hello World PHP";
        echo $title;
        ?>
    </h1>

    <p>
        <?php
        $citDante = "Nel mezzo del cammin di nostra vita, mi ritrovai per una selva oscura, che la retta via era smarrita.";
        echo "&quot;" . $citDante . "&quot;";
        ?>
    </p>

    <span>
        <?php
        echo "La lunghezza del verso è " . strlen($citDante) . " caratteri";
        ?>
    </span>

    <p>
        <?php
        $censura = $_GET['parola'];
        $newString = str_replace($censura, "***", $citDante);
        echo "&quot;" . $newString . "&quot;";
        ?>
    </p>

    <span>
        <?php
        echo "La lunghezza del verso è " . strlen($newString) . " caratteri";
        ?>
    </span>
</body>

</html>
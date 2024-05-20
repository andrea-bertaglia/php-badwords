<?php
$paragraph = $_GET["paragraph"];
$word = $_GET["word"];
$new_paragraph = str_replace($word, "***", $paragraph)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>

<body>
    <h1 style="text-align: center;">My first PHP project</h1>

    <div style="background-color: lightgreen; border: 1px solid black; margin: 0 auto; width: 70%; display: flex; flex-direction: column; align-items: center; gap: 1em; padding: 2em">
        <h2>Il testo che hai digitato è:</h2>
        <?php echo "$paragraph" ?>
        <h2>La lunghezza è: <span style=" color: blue;"><?php echo strlen($paragraph) ?> caratteri</span></h2>
        <h2>La parola che hai digitato è: <span style=" color: blue;"><?php echo "$word" ?></span></h2>
    </div>


    <div style="background-color: lightgoldenrodyellow; border: 1px solid black; margin: 0 auto; width: 70%; display: flex; flex-direction: column; align-items: center; gap: 1em; padding: 2em; margin-top: 2em">
        <h2>Il testo censurato è:</h2>
        <?php echo "$new_paragraph" ?>

        <h2>La nuova lunghezza è: <span style=" color: blue;"><?php echo strlen($new_paragraph) ?> caratteri</span></h2>
    </div>
</body>

</html>
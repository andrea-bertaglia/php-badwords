<?php
echo "form";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1 style="text-align: center;">My first PHP project</h1>


    <form action="response.php" method="GET" style="background-color: lightblue; border: 1px solid black; margin: 0 auto; width: 70%; display: flex; flex-direction: column; align-items: center; gap: 1em; padding: 2em">
        <label for="input-text">Digita qui il tuo paragrafo</label>
        <textarea name="paragraph" id="input-text" rows="4" style="width: 80%;"></textarea>

        <label for="input-word">Digita qui la parola</label>
        <input type="text" name="word" id="input-word" style="width: 30%;"></input>

        <button type="submit">Invia</button>

    </form>

    </div>

</body>

</html>
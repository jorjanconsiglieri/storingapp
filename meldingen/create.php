<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="group" id="group">
                    <option value="">-kies een type-</option>
                    <option value="achtbaan">megacoaster</option>
                    <option value="draaiend">spinaroo</option>
                    <option value="kinder">kidzone</option>
                    <option value="horeca">devbar</option>
                    <option value="show">devshowz</option>
                    <option value="water">splashzone</option>
                    <option value="overig">overig</option>
            </div>

            <div class="form-group">
                <label for="prioriteit">Type</label>
                <select name="group" id="group">
                    <option value="">-kies een type-</option>
            </div>

            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>

            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>

            <textarea name="overig" id="overig" class="form-input" rows="4"></textarea>

            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>

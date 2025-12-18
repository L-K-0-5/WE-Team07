<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web-Entwicklung-2025</title>

    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>







    <body>
    <h1>Benutzerliste</h1>

    <?php if (!empty($personen) && is_array($personen)): ?>
        <table class="table table-responsive table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>E-Mail</th>
                <th>Passwort (Hash)</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($personen as $personen): ?>
                <tr>
                    <td><?= esc($personen['id']) ?></td>
                    <td><?= esc($personen['vorname']) ?></td>
                    <td><?= esc($personen['nachname']) ?></td>
                    <td><?= esc($personen['email']) ?></td>
                    <td><?= esc($personen['passwort']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Keine Benutzer gefunden.</p>
    <?php endif; ?>




    </body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web-Entwicklung-2025</title>

    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<body>

<!-- Navbar Top -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <table>
                    <tr>
                        <td>
                            <li class="nav-item">
                                <a class="nav-link" href="task"><img width = "250px" src="img/WE-Logo.svg"></a>
                            </li>
                        </td>
                        <td>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="task">Task</a>
                            </li>
                        </td>
                        <td>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Boards</a>
                            </li>
                        </td>
                        <td>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="spalten">Spalten</a>
                            </li>
                        </td>
                    </tr>
                </table>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar Top -->

<p></p>

<!-- Card -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Spalte erstellen</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td><label for="Spalten-Bezeichnung" class="form-label">Spalten-Bezeichnung</label></td>
                    <td><input required type="text" class="form-control" id="Spalten-Bezeichnung" placeholder="Bezeichnung für die Spalte"></td>
                </tr>
                <tr>
                    <td><label for="Spaltenbeschreibung" class="form-label">Spaltenbeschreibung</label></td>
                    <td><textarea class="form-control" id="Spaltenbeschreibung" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td><label for="Sortid" class="form-label">Sortid</label></td>
                    <td><input required type="text" class="form-control" id="Sortid" placeholder="Sortid angeben"></td>
                </tr>
                <tr>
                    <td><label for="Board-auswählen" class="form-label">Board auswählen</label></td>
                    <td>
                        <select class="form-select" aria-label="Board-auswählen">
                            <option selected> Allgemeine Todos </option>
                            <option value="1"> . </option>
                            <option value="2"> .. </option>
                            <option value="3"> ... </option>
                        </select>
                    </td>
                </tr>
            </table>
            <a class="btn btn-outline-success" href="spalten" role="button">Speichern</a>
            <a class="btn btn-outline-danger" href="spalten" role="button">Abbrechen</a>
        </div>
    </div>
</div>
<!-- Card -->

<!-- Navbar Bottom -->
<nav class="navbar fixed-bottom">
    <div class="container-fluid">
        <span class="left text-light">@Web-Entwicklung 2025</span>
        <span class="right text-light">Impressum Datenschutz Kontakt</span>
    </div>
</nav>
<!-- Navbar Bottom -->

</body>

</html>
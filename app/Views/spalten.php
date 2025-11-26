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
            <h2>Spalten</h2>
        </div>
        <div class="card-body">
            <a class="btn btn-outline-dark" href="formular" role="button">Erstellen</a>
            <p></p>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>ID</th>
                    <th>Board</th>
                    <th>Sortid</th>
                    <th>Spalte</th>
                    <th>Spaltenbeschreibung</th>
                    <th>Bearbeiten</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Allgemeine Todos</td>
                    <td>100</td>
                    <td>Zu besprechen</td>
                    <td>Noch zu besprechende Todos</td>
                    <td>
                        <a href="#"><i class="fa-sharp fa solid fa-pen-to-square" style="color:#002060"></i></a>
                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color:#002060"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Allgemeine Todos</td>
                    <td>200</td>
                    <td>In Bearbeitung</td>
                    <td>Todos die aktuell bearbeitet werden</td>
                    <td>
                        <i class="fa-sharp fa solid fa-pen-to-square" style="color:#002060"></i>
                        <i class="fa-sharp fa-solid fa-trash" style="color:#002060"></i>
                    </td>
                </tr>
            </table>
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
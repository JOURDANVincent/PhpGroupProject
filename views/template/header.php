<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets\css\style.css"> 

    <title> <?= $titlePage ?? 'Projet de groupe PHP' ?> </title>

</head>

<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
        <a class="navbar-brand" href="index.php?id=l">
            <img src="assets\img\bonhomme-Petit-1.png" width="100" class="img-fluid" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets\img\bonhomme.svg" alt="ouvrier" class="img-fluid" width="50">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-dark sizing-change ml-3 zoom" href="1.html">Accueil <span class="sr-only">(current)</span></a>
                    <a class="nav-link text-dark sizing-change ml-3 zoom" href="2.html">Qui sommes nous?</a>
                    <a class="nav-link text-dark sizing-change ml-3 zoom" href="3.html">Nos clients témoignent</a>
                    <a class="nav-link text-dark sizing-change ml-3 zoom" href="4.html">Contact</a>
                </div>
            </div>
        </nav>
    </header>
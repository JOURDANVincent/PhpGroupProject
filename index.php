<?php

    // lien avec controller.php
    include('controllers/controller.php');

    // récupère le header
    include('views/template/header.php');

    // affichage de la page sélectionnée
    echo '<main>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 py-5" id="page'.$id.'">
                        '.$contentPage.'
                    </div>
                </div>
            </div>
        </main>';

    // récupère le header
    include('views/template/footer.php');

?>

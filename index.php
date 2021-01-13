<?php
    // lien avec controller.php
    include('controllers/controller.php');


    // récupère le header
    include('views/template/header.php');

        echo '<main>
    <div class="container">
        <div class="row">
            <div class="col-12" id="page'.$id.'">
                '.$actualPage.'
            </div>
        </div>
    </div>
    </main>';



    // récupère le header
    include('views/template/footer.php');


?>
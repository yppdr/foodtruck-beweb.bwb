<?php

include './fun/public.php';

?><div class="container">
    <div class="col blog-main">
            <h1 class="pb-3 mb-4 border-bottom">Livre d'or </h1>
        

<?php

foreach (get_lo('ORDER BY id DESC') as $key ) {

    ?>

    <div class="col p-3">
        <div class="card text-center " id="<?= $key["id"]; ?>">

                <div class="card-header">
                    <?= $key["username"]; ?> <em> <?= $key["jesuisla"]; ?></em>
                </div>
                <div class="card-body">
                    <p><?= $key["content"]; ?></p>
                </div>
                
        </div>

    </div>

        <?php
}

?>


    </div>
</div>
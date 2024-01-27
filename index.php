<?php

include './header.php';

if(isset($_GET['p'])):
    $p = filter_input(INPUT_GET, 'p', FILTER_DEFAULT);
    if(!file_exists('./pagina/'.$p.'.php')):
        $p = 'home';
    endif;
else:
    $p = "home";
endif;

include './pagina/'.$p.'.php';

include './footer.php';
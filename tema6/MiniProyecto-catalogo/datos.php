<?php 

    if (!isset($_REQUEST['productos'])) {
        $productos = [
            ['nombre'=>'Jamon York','precio'=>'2.5','stock'=>'6', 'caducidad'=>'2026/11/04'],
            ['nombre'=>'Leche Semidesnatada','precio'=>'0.90','stock'=>'10', 'caducidad'=>'2026/12/05'],
            ['nombre'=>'Yogur Proteina','precio'=>'1.5','stock'=>'0', 'caducidad'=>'2026/12/15'],
            ['nombre'=>'Pan Integral','precio'=>'2.75','stock'=>'9', 'caducidad'=>'2026/12/20']
        ];
    } else {
        $productos = unserialize(base64_decode($_REQUEST['productos']));
    };


    


?>
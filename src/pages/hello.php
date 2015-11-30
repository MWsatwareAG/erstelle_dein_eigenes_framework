<?php $input = $request->get('name', 'World') ?>

    Hallo <?php echo  htmlspecialchars($input, ENT_QUOTES, 'UTF-8') ?>
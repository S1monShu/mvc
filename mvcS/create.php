<!-- <pre>
    <?php
    print_r($_FILES);
    ?>
</pre> -->



<?php

require 'upload.php';

$image = uploadImage($_FILES['image']);

require 'showview.php';
?>



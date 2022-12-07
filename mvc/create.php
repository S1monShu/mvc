<!-- <pre>
    <?php
    print_r($_FILES);
    ?>
</pre> -->



<?php

require 'upload.php';

uploadImage($_FILES['image']);

require 'showview.php';
?>



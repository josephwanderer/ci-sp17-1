<?php
// application/views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');

?>

<h2><?php echo $title; ?></h2>


<?php 



    echo
    '<p><a href="' . site_url('pics/view/mariners') . '">Mariners pics</a></p>' .
        '<p><a href="' . site_url('pics/view/seahawks') . '">Seahawks pics</a></p>' .
        '<p><a href="' . site_url('pics/view/sounders') . '">Sounders pics</a></p>';

?>



<?php 

$this->load->view($this->config->item('theme') . 'footer');

?>

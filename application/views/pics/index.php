<?php
// application/views/pics/index.php

$this->load->view($this->config->item('theme') . 'header');

?>

<h2><?php echo $title; ?></h2>

<?php foreach ($pics as $pic): ?>

        <h3><?php echo $pic['title']; ?></h3>
        <div class="main">
                <?php echo $pic['url']; ?>
        </div>
        <p><a href="<?php echo site_url('pics/'.$pic['slug']); ?>">View pic</a></p>

<?php endforeach; 

$this->load->view($this->config->item('theme') . 'footer');

?>
<?php
// application/news/view.php

$this->load->view($this->config->item('theme') . 'header');
?>
<h2><?=$this->config->item('title')?></h2>
<?php
echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];

$this->load->view($this->config->item('theme') . 'footer');

?>

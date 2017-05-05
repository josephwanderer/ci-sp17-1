<?php
//application

$this->load->view($this->config->item('theme') . 'header');

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    
    echo "<div><p>$pic->title</p>"; 
    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' /></div>";
 

    
}

    $this->load->view($this->config->item('theme') . 'footer');

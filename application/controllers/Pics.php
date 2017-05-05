<?php
// application/controllers/Pics.php
class Pics extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pics_model');
        $this->load->helper('url');
    }

    public function index($slug = null)
    {
        
        $data['title'] = 'Pics aggregator';

        //$this->load->view('templates/header', $data);
        $this->load->view('pics/index', $data);
        //$this->load->view('templates/footer');
    }

    public function view($slug = 'bears')
    {
        
        $data['pics'] = $this->pics_model->get_pics($slug);
        $data['title'] = 'Pics aggregator';
//var_dump($data['pics']);
//        die;

        //$this->load->view('templates/header', $data);
        $this->load->view('pics/view', $data);
        //$this->load->view('templates/footer');
//        $data['pic'] = $this->pics_model->get_pics($slug);
//
//        if (empty($data['pic']))
//        {
//            show_404();
//        }
//
//        $data['title'] = $data['pic']['title'];
//
//        //$this->load->view('templates/header', $data);
//        $this->load->view('pics/view', $data);
//        //$this->load->view('templates/footer', $data);
    }
    
//    public function create()
//    {
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//
//        $data['title'] = 'Create a news item';
//
//        $this->form_validation->set_rules('title', 'Title', 'required');
//        $this->form_validation->set_rules('text', 'Text', 'required');
//
//        if ($this->form_validation->run() === FALSE)
//        {//show form
//            //$this->load->view('templates/header', $data);
//            $this->load->view('news/create', $data);
//            //$this->load->view('templates/footer', $data);
//
//        }
//        else
//        {// say thanks for entering data!
//            $this->news_model->set_news();
//            //$this->load->view('templates/header', $data);
//            $this->load->view('news/success', $data);
//            //$this->load->view('templates/footer', $data);
//        }
//            
//    }//end of create method
    
    
    /*
    
    <?php
/*
//flickr-api-test.php

//original from: http://lifesforlearning.com/connecting-to-the-flickr-api-with-php/



$api_key = 'flickr-api-key-goes-here';
$tags = 'bears,polar';

$perPage = 3;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key=' . $api_key;
$url.= '&tags=' . $tags;
$url.= '&per_page=' . $perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$pics = $response->photos->photo;
 

//echo "<pre>";
//echo var_dump(file_get_contents($url));
//echo var_dump($response);
//echo "</pre>";
//die;

 
foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}

    
    */
       
}//end of News controller

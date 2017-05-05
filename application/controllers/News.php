<?php
// application/controllers/News.php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url');
        $this->config->set_item('banner','News');
    }

    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        //$data['title'] = 'News archive';
        $this->config->set_item('title','News Archive');

        //$this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        //$this->load->view('templates/footer');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
        $this->config->set_item('title','News Item');

        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        //$this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        //$this->load->view('templates/footer', $data);
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->config->set_item('title','Create News Item');
        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE)
        {//show form
            //$this->load->view('templates/header', $data);
            $this->load->view('news/create', $data);
            //$this->load->view('templates/footer', $data);

        }
        else
        {//Show the newly created item
            $slug = $this->news_model->set_news();
            
            if($slug)
            {//Data looks good
                
            feedback('News item successfully created!','notice');
            redirect('news/view/' . $slug);
            }else{//
            feedback('News item NOT created!','warning');
            redirect('news/create');
            }
            
            
            //$data['title'] = 'Item Entered';
            
            //$this->load->view('templates/header', $data);
            //$this->load->view('news/success', $data);
            //$this->load->view('templates/footer', $data);
        }
            
    }//end of create method
       
}//end of News controller

<?php
//application/models/News_model.php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('sp17_news');
            return $query->result_array();
        }

        $query = $this->db->get_where('sp17_news', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function set_news()
    {
    $this->load->helper('url');

    $slug = url_title($this->input->post('title'), 'dash', TRUE);

    $data = array(
        'title' => $this->input->post('title'),
        'slug' => $slug,
        'text' => $this->input->post('text')
    );

    //return $this->db->insert('sp17_news', $data);
        
        if ($this->db->insert('sp17_news', $data))
        {//data entered successfully
            /*
            // this is the normal way to pass a newly created ID back
            return $this->db->insert_id();
            */
            //the slug is used for the view so pass it back
            return $slug;
        }else{//trouble!
            return false;
        } 
    }
    
}

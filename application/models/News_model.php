<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


        public function get_news($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('news');
                        return $query->result_array();
                }

                $query = $this->db->get_where('news', array('slug' => $slug));
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

                return $this->db->insert('news', $data);
        }
        public function get_edit_row($id)
        {
               
                $query = $this->db->get_where('news', array('id' => $id));
                return $query->row_array();
        }
      public function update($id,$data)
      {
        $this->load->helper('url');
         
        return $this->db->update('news', $data, array('id' => $id));

        
      }

      public function delete($slug)
      {

        $this->db->where('slug', $slug);
        return $this->db->delete('news');

      }

}
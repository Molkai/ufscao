<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Evento_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get all eventos count
     */
    function get_all_eventos_count()
    {
        $this->db->from('eventos');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all eventos
     */
    function get_all_eventos($params = array())
    {
        $this->db->order_by('id_evt', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('eventos')->result_array();
    }
    
    /*
     * Get evento by id_evt
     */
    function get_evento($id_evt)
    {
        return $this->db->get_where('eventos',array('id_evt'=>$id_evt))->row_array();
    }
    
    /*
     * Get evento by offset
     */
    function get_all_eventos_with_offset($offset)
    {
        return $this->db->query("SELECT * FROM eventos ORDER BY id_evt DESC LIMIT 10 OFFSET ".(intval($offset)*10).";")->result_array();
    }
        
    /*
     * Get all eventos
     */
    function get_all_eventos2()
    {
        $this->db->order_by('id_evt', 'desc');
        return $this->db->get('eventos')->result_array();
    }
        
    /*
     * function to add new evento
     */
    function add_evento($params)
    {
        $this->db->insert('eventos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update evento
     */
    function update_evento($id_evt,$params)
    {
        $this->db->where('id_evt',$id_evt);
        return $this->db->update('eventos',$params);
    }
    
    /*
     * function to delete evento
     */
    function delete_evento($id_evt)
    {
        return $this->db->delete('eventos',array('id_evt'=>$id_evt));
    }
}

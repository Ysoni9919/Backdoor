<?php 
class User_model extends CI_Model {
    
    public function add_user($formArray) {
        $query = $this->db->insert('users',$formArray);
        return $query->result();
			// if ($this->db->simple_query($query))
			// {
			// 		echo "Success!";
			// }
			// else
			// {
			// 		echo "Query failed!";
			// }
    }
    /* get all users */

    public function get_users() {
        $query = $this->db->get('users');  
        return $query->result(); 
    }
    /* get all users */

    /* get all users by id*/
    public function find_item($id) {
        return $this->db->get_where('users', array('id' => $id))->row();
    }
    /* get all users ID End*/

    /* Update Record */
    public function update_item( $update_record=null,$update_id=null ) {
        if( $update_id == 0 ) {
            return $this->db->insert('users', $update_record);
        }else{
            $this->db->where( 'id', $update_id );
            return $this->db->update('users', $update_record);
        }        
    }
     /* Update Record End */

}

?>
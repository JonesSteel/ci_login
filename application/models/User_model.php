<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 02/08/2018
 * Time: 02:35 PM
 */
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function checkDuplicate($email) {
        $this->db->select('email');
        $this->db->from('users');
        $this->db->like('email', $email);
        return $this->db->count_all_results();
    }

    function insertUser($data) {
        if ($this->db->insert('users', $data)) {

            return $this->db->insert_id();

        } else {

            return false;
        }
    }

    function userExist($email) {
        $this->db->select('*');
        $this->db->like('email', $email);
        $qry = $this->db->get('users');
        $rs = $qry->result_array();
        return $rs[0];
    }
}
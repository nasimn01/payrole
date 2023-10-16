<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryModel extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	/* for index function */
	public function retrive(){
		return $this->db->query("SELECT `salary`.*, employee.name FROM `salary` JOIN employee on employee.id=salary.employee_id;")->result();
	}

	/* for create function */
	public function create($data){
		$this->db->insert('salary',$data);
		return $this->db->insert_id();
	}

	/* for update function */
	public function single_retrive($id){
		return $this->db->where('id',$id)->get('salary')->row();
	}
	// public function single_retrive($id) {
	// 	$this->db->select('salary.*, employee.*'); // Select the columns you need
	// 	$this->db->from('salary');
	// 	$this->db->join('employee', 'salary.employee_id = employee.id', 'inner');
	// 	$this->db->where('salary.id', $id);
	// 	$result = $this->db->get()->row();
	// 	return $result;
	// }
	public function update($id,$data){
		$this->db->where('id',$id)->update('salary',$data);
		return $this->db->affected_rows();
	}

	/* for delete function */
	public function delete($condition){
		$this->db->delete('salary',$condition);
		return $this->db->affected_rows();
	}
}

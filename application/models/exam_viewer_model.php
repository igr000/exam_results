<?php
/*******************************************************************
-- Exam_viewer_model contains the method that will fetch records ---
-- from database based on semester and school year. ----------------
--------------------------------------------------------------------
-- Author: Irene Gayle Roque --------------------------------------- 
*******************************************************************/

class exam_viewer_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    
    //getExam() --> fetch records from database based on semester and school year
	public function getExam($sem, $sch_yr){

		//SELECT * FROM 'exam_results' WHERE 'sem' = '$sem' && 'sch_yr' = '$sch_yr'
		$rs = $this->db->get_where('exam_results', array('sem' => $sem, 'sch_yr'=>$sch_yr));
		return $rs->result_array();
	}

	
}
?>
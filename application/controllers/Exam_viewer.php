<?php
/******************************************************************************************
-- Exam_viewer controller class will load the exam_helper and exam_viewer_model for them --
-- to be used in exam_viewer page. --------------------------------------------------------
-------------------------------------------------------------------------------------------
-- Author: Irene Gayle Roque --------------------------------------------------------------
******************************************************************************************/
class Exam_viewer extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		//loads exam_helper
		$this->load->helper('exam_helper');

		//loads exam_viewer_model
		$this->load->model('exam_viewer_model');

		//pass all values of exam_results table to $result[]
		$data["results"] = $this->exam_viewer_model->getExam(CUR_SEM, CUR_SCH_YR);
		
		//loads exam_viewer page along with all the values passed on to $data
		$this->load->view('exam_viewer', $data);
	}
}
?>
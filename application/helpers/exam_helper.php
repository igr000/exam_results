<?php
/****************************************************************************
-- Exam_helper contains helpers that will append numbers on student number --
-- and compute the rating. --------------------------------------------------
-----------------------------------------------------------------------------
-- Author: Irene Gayle Roque ------------------------------------------------
****************************************************************************/

//appends number on student_number
function student_number($stud_no){
	return 'STUDENT'.str_pad($stud_no, 5, 0, STR_PAD_LEFT);
}

//computes rating
function rating($score, $no_of_items){

    $rating = ($score/$no_of_items)*100;
	return $rating;
}

?>
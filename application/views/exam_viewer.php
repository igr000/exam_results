<!DOCTYPE html>
<!------------------------------------------------------------------------
-- Exam_viewer page is where the exam records will be displayed. ---------
--------------------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------------------
------------------------------------------------------------------------->
<html>
<head>
	<title>Exam Viewer</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		th,td{
			border: 1px solid #000;
			padding: 5px;
		}
	</style>
</head>
<body>
	
	<h1>Exam Results</h1>
	<strong>Semester: <?php echo CUR_SEM; ?></strong><br>
	<strong>School Year: <?php echo CUR_SCH_YR; ?></strong><br>
    <br>
    <!-- Displays exam records -->
	<table>
		<thead>
			<tr>
				<th>Exam Result ID</th>
				<th>Student Number</th>
				<th>Score</th>
				<th>Rating</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($results as $result): ?>
				<tr>
					<td><?php echo $result['exam_result_id']; ?></td>
					<td><?php echo student_number($result['stud_no']); ?></td>
					<td><?php echo $result['score']; ?></td>
					<td><?php echo rating($result['score'], $result['total_items']); ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>
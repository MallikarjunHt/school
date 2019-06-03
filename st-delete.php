<?php 



?>

<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Home</a></li>
			<li class="active">
				<?php if(isset($_GET['student'])){ echo strtoupper($page=$_GET['student']); } ?>
			</li>
		</ol>
	</div>
	<!--//sub-heard-part-->
	<div class="graph-visual tables-main">
		<h2 class="inner-tittle">
			<?php echo strtoupper($_GET['student']); ?>
		</h2>

	
			<div class="tables">


				<table class="table table-bordered ">

					<thead>
						<tr>
							<th>#</th>
				              <th>F.Name</th> 
				                <th>Address</th>
                                <th>Adhar</th>
								<th>Admission no</th>
								<th>Admission year</th>
				                <th>Father</th>
								<th>Mother</th>
								<th>DOB</th>
								<th>Grade</th>
								<th>Contact</th>
								<th>Gender</th>
						</tr>
					</thead>
					<tbody>

						<?php $student_dis_admin = $ravi->student_info_display_admin();
													$st_sn = 1;
													while($student_info_admin =$student_dis_admin->fetch_assoc())					{
														
													
																		?>


						<tr>
							<th scope="row">
								<td><?php echo $s_sn; ?></td>
							
							
															<td><?php echo $student_info_admin['st_fullname']; ?></td>
															<td><?php echo $student_info_admin['st_address']; ?></td>
                                                            <td><?php echo $student_info_admin['st_adhar']; ?></td>
															<td><?php echo $student_info_admin['st_admin_no']; ?></td>
															<td><?php echo $student_info_admin['st_admin_year']; ?></td>
															<td><?php echo $student_info_admin['st_father']; ?></td>
															<td><?php echo $student_info_admin['st_mother']; ?></td>
															<td><?php echo $student_info_admin['st_dob']; ?></td>
															<td><?php echo $student_info_admin['st_grade'] ?></td>
															<td><?php echo $student_info_admin['st_parents_contact']; ?></td>
															<td><?php echo $student_info_admin['st_gender']; ?></td>
							<td>
								
				<a href="home.php?student=student-del&studentid=<?php echo $student_info_admin['t_id']; ?>" class="btn red">Delete</a>
					</td>
						</tr>
						<?php $t_sn++; } ?>
					</tbody>

				</table>

			</div>
		</div>


	</div>
	<!--//graph-visual-->


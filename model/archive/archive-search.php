<?php
$connect = mysqli_connect("localhost", "root", "", "cse482_project_db");
$output = '';
if (isset($_POST["query"])) {
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT 
		first_name, 
		last_name, 
		country, 
		university_name,
		archive_id,
		company_name,
		company_address,
		company_country,
		company_city,
		company_department,
		company_position,
		required_skills,
		start_date,
		end_date,
		work_description
		FROM student_archive 
		INNER JOIN student_reg 
		ON student_reg.id=student_archive.student_reg_id 
		WHERE LOWER(company_name) LIKE LOWER('%" . $search . "%')
		OR LOWER(company_city) LIKE LOWER('%" . $search . "%') 
		OR LOWER(company_country) LIKE LOWER('%" . $search . "%') 
		OR LOWER(required_skills) LIKE LOWER('%" . $search . "%') 
		OR LOWER(first_name) LIKE LOWER('%" . $search . "%') 
		OR LOWER(last_name) LIKE LOWER('%" . $search . "%') 
		OR LOWER(university_name) LIKE LOWER('%" . $search . "%') 
	";
} else {
	$query = "SELECT * FROM student_archive INNER JOIN student_reg ON student_reg.id=student_archive.student_reg_id";
}
$archives = mysqli_query($connect, $query);

if (mysqli_num_rows($archives) > 0) {

	while ($archive_cell = mysqli_fetch_array($archives)) {

		$output .= '
			<div class="archive-box">
        <table class="archive-box__details">
					<tr>
          	<td>
            	<i class="bi bi-journal-bookmark" 
							style="
							font-size: 1.5rem; 
							display:flex; 
							align-items:center;	
							"></i>
          	</td>
          	<td>
          		<span style=" display:flex; justify-content: center; font-size: medium">
								Archive ID #' . $archive_cell["archive_id"] . '
        			</span>
      			</td>
      		</tr>
					<tr>
      			<th>Name</th>
						<td>' . $archive_cell['first_name'] . " " . $archive_cell['last_name'] . '</td>
      		</tr>
      		<tr>
      			<th>Country</th>
						<td>' . $archive_cell['country'] . '</td>
        	</tr>
        	<tr>
        		<th>University Name</th>
						<td>' . $archive_cell['university_name'] . '</td>
        	</tr>
					<tr>
            <th>Company Name</th>   
						<td>' . $archive_cell['company_name'] . '</td>
          <tr>
            <th>Company Address</th> 
						<td>' . $archive_cell['company_address'] . '</td>
          <tr>
            <th>Company City</th>
            <td>' . $archive_cell['company_city'] . '</td>
          </tr> 
					<tr>
            <th>Company Country</th>
            <td>' . $archive_cell['company_country'] . '</td>
          </tr>
          <tr>
            <th>Department</th>
            <td>' . $archive_cell['company_department'] . '</td>
          <tr>
            <th>Position</th>
            <td>' . $archive_cell['company_position'] . '</td>
          </tr>
          <tr>
            <th>Required Skills</th>
            <td>' . $archive_cell['required_skills'] . '</td>
          </tr>
          <tr>
            <th>Start Date</th>
						<td>' . $archive_cell['start_date'] . '</td>
          </tr>
          <tr>
            <th>End Date</th>
            <td>' . $archive_cell['end_date'] . '</td>
          </tr>
          <tr>
            <th>Work Description</th>
            <td>' . $archive_cell['work_description'] . '</td>
          </tr>
			  </table>
    	</div>
		';
	}
	echo $output;
} else {
	echo '';
}

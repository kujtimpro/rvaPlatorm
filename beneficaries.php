<?php
    $tablename = 'BENEFICARY';
    include('header.php');
    $sql = "SELECT *, PROJECT_NAME FROM $tablename JOIN PROJECT ON $tablename.PROJECT_ID = PROJECT.PROJECT_ID;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>
 <div class="container">
    <div class="row">
       <div class="col-sm-8">
        <?php echo $deleteMsg??''; ?>
        <div class="table-responsive">
            <div class="formContainer">
             <form method="POST" action="addbeneficiary.php">
    			<input type="text" name="firstname" placeholder="First Name">
    			<input type="text" name="lastname" placeholder="Last Name">
    			<input type="date" name="dob" placeholder="Date of birth">
    			<input type="text" name="fos" placeholder="Field of Study">
    			<select name="projectname">
    			    <option disabled selected value> -- Select Project -- </option>
                    <?php 
                    $sql = mysqli_query($conn, "SELECT PROJECT_NAME, PROJECT_ID FROM PROJECT");
                    while ($roww = $sql->fetch_assoc()){
                    echo "<option value=\" " . $roww['PROJECT_ID'] . " \">" . $roww['PROJECT_NAME'] . "</option>";
                    }
                    ?>
                </select>
    			<input type="text" name="phone" placeholder="Phone">
    			<input type="email" name="email" placeholder="Email">
    			<input type="submit" name="add" value="ADD">
    			<input type="hidden" name="tablename" value="<?php echo $tablename ?>">
    	    </form>
	    </div>
          <table class="styled-table" id="myTable">
           <thead><tr>
             <th onclick="sortTable(0)">ID</th>
             <th onclick="sortTable(1)">Full Name</th>
             <th onclick="sortTable(2)">Date of birth</th>
             <th onclick="sortTable(3)">Field of Study</th>
             <th onclick="sortTable(4)">Project Name</th>
             <th onclick="sortTable(5)">Phone</th>
             <th onclick="sortTable(6)">Email</th>
             <th>Edit</th>
             <th>Delete</th>
            </thead>
            <tbody>
      <?php
       $n;
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
          <tr>
          <td><?php echo $row['BFC_ID']; ?></td>
          <td><?php echo $row['BFC_FNAME'] . " " . $row['BFC_LNAME']; ?></td>
          <td><?php echo $row['BFC_DOB']; ?></td>
          <td><?php echo $row['BFC_FOS']; ?></td>
          <td><?php echo $row['PROJECT_NAME']; ?></td>
          <td><?php echo $row['BFC_PHONE']; ?></td>
          <td><?php echo $row['BFC_EMAIL']; ?></td>
          <td onclick="editbeneficiary(<?php echo $row['BFC_ID']; ?>);" class="pointer">Edit</td>
          <td onclick="deletebeneficiary(<?php echo $row['BFC_ID']; ?>);" class="pointer">Delete</td>
         </tr>
         <?php
          }} ?>
        </tbody>
         </table>
       </div>
    </div>
    </div>
</div>
<div id="editPopup" style="display:none"></div>
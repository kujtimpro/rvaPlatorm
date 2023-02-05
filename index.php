<html>
    <head>
        <title>RVA DB</title>
        <link rel="icon" type="image/x-icon" href="https://romaversitasalbania.org/wp-content/uploads/2017/06/RVA_logo.png">
        <link rel="stylesheet" href="style.css">
        <script>
            var rowIdGlobal;
        </script>
        <script src="jquery-3.6.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="script.js"></script>
        
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="https://romaversitasalbania.org/wp-content/uploads/2017/06/RVA_logo.png" alt="logo" width="200px">
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Beneficaries</a></li>
                        <li><a href="#">Applicants</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Employees</a></li>
                        <li><a href="#">Staff Member</a></li>
                        <li><a href="#">Alumnis</a></li>
                        <li><a href="#">Course Lectures</a></li>
                    </ul>
                </nav>
            </div>
        </header>
            <?php
                include('conn.php');
                $tablename = 'ADMINISTRATION';
                $sql = "SELECT * FROM $tablename;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
            ?>
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                    <div class="formContainer">
                     <form method="POST" action="add.php">
            			<input type="text" name="firstname" placeholder="First Name">
            			<input type="text" name="lastname" placeholder="Last Name">
            			<input type="date" name="dob" placeholder="Date of birth">
            			<input type="text" name="position" placeholder="Position">
            			<input type="number" name="salary" placeholder="Salary">
            			<input type="phone" name="phone" placeholder="Phone">
            			<input type="email" name="email" placeholder="Email">
            			<input type="submit" name="add" value="ADD">
            			<input type="hidden" name="tablename" value="ADMINISTRATION">
            	    </form>
        	    </div>
                  <table class="styled-table" id="myTable">
                   <thead><tr>
                     <th onclick="sortTable(0)">ID</th>
                     <th onclick="sortTable(1)">Full Name</th>
                     <th onclick="sortTable(2)">Date of birth</th>
                     <th onclick="sortTable(3)">Position</th>
                     <th onclick="sortTable(4)">Salary</th>
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
                  <td><?php echo $row['ADM_ID']; ?></td>
                  <td><?php echo $row['ADM_FNAME'] . " " . $row['ADM_LNAME']; ?></td>
                  <td><?php echo $row['ADM_DOB']; ?></td>
                  <td><?php echo $row['ADM_POSITION']; ?></td>
                  <td><?php echo $row['ADM_SALARY']; ?></td>
                  <td><?php echo $row['ADM_PHONE']; ?></td>
                  <td><?php echo $row['ADM_EMAIL']; ?></td>
                  <td onclick="editRow(<?php echo $row['ADM_ID']; ?>);" class="editBut">Edit</td>
                  <td>Delete</td>
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
    </body>
</html>
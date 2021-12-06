<?php
$db = mysqli_connect('localhost', 'Leo', 'leomugambi23', 'medicing');

?>
<link rel="stylesheet" href="<?php echo base_url("/css/tableStyle.css");?>">
<?php
$results_per_page = 2;

// find out the number of results stored in database
$sql='SELECT * FROM leaves';
$result = mysqli_query($db, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

$result = mysqli_query($db, $sql);

// retrieve selected results from database and display them on page
 $sql = "SELECT * FROM `leaves` LIMIT ". $this_page_first_result. ",". $results_per_page;

 	$result = mysqli_query($db, $sql);
    // display the links to the pages

    for ($page=1; $page<=$number_of_pages ; $page++) {
        echo "<a href='viewTable.php?page=" . $page ."'>" . $page . " </a> ";
        echo "&nbsp";
        }
    echo "<br>";
    echo "<br>";
     ?>
        <a href="">APPROVAL</a>
        <?php
    echo "<br>";
 	echo "<table>";
    ?>
    <style>
    /*body {
        background: linear-gradient(135deg, #7d2ae8, #71b7e6, #9b59b6);
        background: #7d2ae8;
    }
       */ table {
                margin-right: 150px;
                margin-top: 50px;
            }
    </style>

            <?php
            echo "<tr>";
                echo "<th>Leave ID</th>";
                echo "<th>Staff Number</th>";
                echo "<th>Leave type</th>";
                echo "<th>Start date</th>";
                echo "<th>End date</th>";
                echo "<th>Leave status</th>";
                echo "<th> </th>";
            echo "</tr>";
              while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['leave_id'] . "</td>";
                echo "<td>" . $row['staff_number'] . "</td>";
                echo "<td>" . $row['leave_type'] . "</td>";
                echo "<td>" . $row['start_date'] . "</td>";
                echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['leave_status'] . "</td>";
                echo"<td>";
                ?>
         <!-- <a href="editDetails.php?id=<?php echo $row['staff_number']; ?>"name="edit" class="edit">APPROVE</a>
          <a href="delete.php?id=<?php echo $row['leave_id']; ?>"name="deletion" class="delete">REJECT</a> --->
         <?php
               echo "</td>";
            echo "</tr>";
          }
  echo "</table>";
         mysqli_free_result($result);
          ?>

<?php
$limit=2;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM logger ORDER BY email ASC LIMIT $start_from, $limit";  
$result = $conn->query($sql); 


?> 

<?php 

$sql="SELECT COUNT(u_id) FROM logger";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
echo"hiii";
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='admin.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?> 

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php
  $conn = mysqli_connect('localhost','root','123456','opentutorials',3307);
  header( "Content-type: application/vnd.ms-excel; charset=utf-8");
  header( "Content-Disposition: attachment; filename = Excel_Opentutorials.xls" );     //filename = 저장되는 파일명을 설정합니다.
  header( "Content-Description: PHP4 Generated Data" );

  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn,$sql);

  $EXCEL_FILE = "
  <table border='1'>
      <tr>
         <td>ID</td>
         <td>title</td>
         <td>description</td>
         <td>creadted</td>
         <td>author</td>
         <td>profile</td>
      </tr>
  ";

  while($row = mysqli_fetch_array($result)){
  $EXCEL_FILE .= "
      <tr>
         <td>".$row['id']."</td>
         <td>".$row['title']."</td>
         <td>".$row['description']."</td>
         <td>".$row['created']."</td>
         <td>".$row['author']."</td>
         <td>".$row['profile']."</td>
      </tr>
  ";
  }
  $EXCEL_FILE .= "</table>";
  echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
  echo $EXCEL_FILE;
  ?>

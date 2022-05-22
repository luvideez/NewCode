<?php
$servername = "localhost";
$username = "privatew_privatew";
$password = "quan@luvi";
$dbname = "privatew_bangluong";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'UTF8');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$search = $_POST['txtUserName'];
$sql = "SELECT * FROM `excel_table` WHERE `stk`=$search";
$result = $conn->query($sql);

if ($result->num_rows > -999) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 echo "Họ và Tên : " . $row["hoten"]. "<br> Chức Vụ : " . $row["chucvu"]. "<br> Nơi công tác :  " . $row["noi_cong_tac"]. "<br> Lương cơ bản : " . $row["luongcoban"]."<br> Lương Kpi - Thưởng : " . $row["luong_kpi"]."<br> Sinh nhật : " . $row["ngay_sinh"]."<br> Phụ cấp điện thoại : " . $row["pcdienthoai"]."<br> Phụ cấp xăng xe : " . $row["pcxangxe"]."<br> Phụ cấp quầy : " . $row["pcquay"]."<br> Nơi công tác : " . $row["noi_cong_tac"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
<?php
// Khai bao ket noi
$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");

// Lua chon co so du lieu
mysqli_select_db($link, "dulieu");

// Lay du lieu trong bang
$sql = "select * from employee";

// Ket qua truy van tra ve bien result, result chứa số bảng ghi
$result = mysqli_query($link, $sql);

echo '<table border="1">';
echo '<caption>Nhân viên</caption>';

// In tieu de cho bang
echo '<tr><th>Mã</th><th>Họ và tên</th><th>Mã phòng ban</th><th>Địa chỉ</th></tr>';

// Doc tung dong
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["department_id"] . "</td>
        <td>" . $row["address"] . "</td>
    </tr>";
}

echo "</table>";

// Giai phong toan bo cac ban ghi trong $result
mysqli_free_result($result);

// Dong ket noi
mysqli_close($link);

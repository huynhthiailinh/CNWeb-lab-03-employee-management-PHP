<?php
// Khai bao ket noi
$link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MySQL");

// Lua chon co so du lieu
mysqli_select_db($link, "dulieu");

// Lay du lieu trong bang
$sql = "select * from Table1";

// Ket qua truy van tra ve bien result, result chứa số bảng ghi
$result = mysqli_query($link, $sql);

echo '<table border="1" width="100%">';
echo '<caption>Sinh vien</caption>';

// In tieu de cho bang
echo '<tr><th>Ma So</th><th>Ho Ten</th><th>Ngay Sinh</th><th>Nghe nghiep</th></tr>';

// Doc tung dong
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td>" . $row["maso"] . "</td>
        <td>" . $row["hoten"] . "</td>
        <td>" . $row["ngaysinh"] . "</td>
        <td>" . $row["nghenghiep"] . "</td>
    </tr>";
}

echo "</table>";

// Giai phong toan bo cac ban ghi trong $result
mysqli_free_result($result);

// Dong ket noi
mysqli_close($link);

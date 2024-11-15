<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استعلام للحصول على الشهادات
$sql = "SELECT title, description, image FROM certificates";
$result = $conn->query($sql);

$certificates = [];

if ($result->num_rows > 0) {
    // إخراج البيانات
    while($row = $result->fetch_assoc()) {
        $certificates[] = [
            'title' => $row['title'],
            'description' => $row['description'],
            'image' => $row['image']
        ];
    }
} else {
    echo "0 results";
}

$conn->close();

// إرجاع البيانات كـ JSON
echo json_encode($certificates);
?>
<?php
// الاستعلام لاستخراج الشهادات
$sql = "SELECT * FROM certificates";
$result = $conn->query($sql);

// التحقق إذا كان هناك بيانات
if ($result->num_rows > 0) {
    // عرض كل صف من البيانات
    while($row = $result->fetch_assoc()) {
        echo "<div class='certificate'>";
        echo "<img src='" . $row['image'] . "' alt='Certificate Image'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
} else {
    echo "لا توجد شهادات لعرضها.";
}

// إغلاق الاتصال
$conn->close();
?>

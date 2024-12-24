<?php
if (isset($_FILES['ImageFile'])) { // ตรวจสอบว่าไฟล์ถูกอัพโหลดมา
    // กำหนดตัวแปรจากข้อมูลใน $_FILES
    $ImageFile_name = $_FILES['ImageFile']['name'];
    $ImageFile_type = $_FILES['ImageFile']['type'];
    $ImageFile_size = $_FILES['ImageFile']['size'];

    // แสดงชื่อไฟล์, ประเภทไฟล์, ขนาดไฟล์
    echo "File name : " . $ImageFile_name . "<br>";
    echo "File type : " . $ImageFile_type . "<br>";
    echo "File size : " . $ImageFile_size . " bytes<br>";

    // กำหนดขนาดสูงสุดที่อนุญาต (500 KB)
    $MAX_FILE_SIZE = 500 * 1024; // 500 KB in bytes

    // ตรวจสอบประเภทไฟล์
    if ($ImageFile_type == "image/gif" || $ImageFile_type == "image/jpeg" || $ImageFile_type == "image/pjpeg") {
        // ตรวจสอบขนาดไฟล์
        if ($ImageFile_size <= $MAX_FILE_SIZE) {
            // ตรวจสอบการอัพโหลดไฟล์
            $upload_path = "pictures/" . basename($ImageFile_name);

            // ตรวจสอบว่ามีไฟล์ที่ตำแหน่งนั้นแล้วหรือยัง
            if (move_uploaded_file($_FILES['ImageFile']['tmp_name'], $upload_path)) {
                // หลังจากที่อัพโหลดไฟล์เสร็จแล้ว
                echo "<li>บันทึกข้อมูลเรียบร้อย<br>";
                echo "<a href='lab10_7.php'>กลับไป upload </a><br>";
                echo "<img src='$upload_path' width='320' height='240'>";
            } else {
                echo "<li>ไม่สามารถอัพโหลดไฟล์ได้!<br>";
            }
        } else {
            echo "<li>รูปภาพมีขนาดใหญ่กว่า 500 KB.<br>";
            echo "<input type=\"button\" value=\"กลับไปแก้ไข\" onclick=\"history.back();\" style=\"cursor:hand\">";
        }
    } else {
        echo "<li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG.<br>";
        echo "<input type=\"button\" value=\"กลับไปแก้ไข\" onclick=\"history.back();\" style=\"cursor:hand\">";
    }
} else {
    echo "<li>ไม่พบไฟล์ที่อัพโหลด.<br>";
}
?>

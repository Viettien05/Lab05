<?php

namespace App\Models;

use PDO;

class Student extends BaseModel
{
    public function getAllStudents()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getInfo()
{
    return "Sinh viên Nguyễn Văn A";
}
}

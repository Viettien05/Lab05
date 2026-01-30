<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController
{
    public function index()
    {

        $studentModel = new Student();
        $students = $studentModel->getAllStudents();
 
        include 'views/student_list.php';
    }
}

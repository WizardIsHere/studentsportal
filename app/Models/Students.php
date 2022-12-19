<?php 
    namespace App\Models;

    class Students {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'name'=> 'Abhishek',
                    'Registration Number' => '123456',
                ],
                [
                    'id' => 2,
                    'name'=> 'Akash',
                    'Registration Number' => '12345679',
                ],
                [
                    'id' => 3,
                    'name'=> 'Akshay',
                    'Registration Number' => '12345678',
                ],
            ];
        }
        public static function find ($id){
            $students = self::all();
        
            foreach ($students as $student) {
                if($student['id'] == $id){
                    return $student;
                }
            }
        }
 

    }

?>
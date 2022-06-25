<html>
    <head>
        <title>Associative Array</title>
    </head>
    <body>
    <?php
        $student_info=array(
                "John"=>100,
                "Peter"=> 95,
                "Smith"=>90,
                "James"=>89
        );
        echo "Student Information<br/>";
        print_r($student_info);

        echo "<br/><br/>";

        $student_name=array_keys($student_info);
        echo "Student Name<br/>";
        foreach ($student_name as $name){
            echo $name."<br/>";
        };
        echo "<br/>";

        $student_mark=array_values($student_info);
        echo "Student Mark<br/>";
        foreach ($student_mark as $mark) {
        echo $mark."<br/>";
        }

    ?>
    </body>
</html>
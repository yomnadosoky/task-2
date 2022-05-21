<?php

    $users = [
        (object)[
            'id' => 1,
            'name' => 'ahmed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'football', 'swimming', 'running'
            ],
            'activities' => [
                "school" => 'drawing',
                'home' => 'painting'
            ], 
            'email'=>'ahmed@gmail.com',
            'phones'=>[
                '123456789',987654321
            ]
        ],
        (object)[
            'id' => 2,
            'name' => 'mohamed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'swimming', 'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ], 
            'email'=>'mohamed@gmail.com',
            'phones'=>[
                '123456789'
            ]
        ],
        (object)[
            'id' => 0,
            'name' => 'menna',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ], 
            'email'=>'',
            'phones'=>[]
        ],  
        (object)[
            'id' => 4,
            'name' => 'reem',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'm',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
            'email'=>'reem@gmail.com',
            'phones'=>[12356465312132123132,2321563215321,561321532132]
        ],
    ];

    
    $table = "<table class='table'>
                <thead>
                    <tr>";
                        foreach($users[0] AS $property=>$value){
                            $table.= "<th>{$property}</th>";
                        }
    $table.=        "</tr>
                </thead>
                <tbody>";
                   foreach($users AS $index=>$user){
                        $table .=   "<tr>";
                            foreach($user AS $property => $value) {
                                $table .=   "<td>";
                                if(gettype($value) == 'array' || gettype($value) == 'object'){
                                    foreach($value AS $key => $objectOrArrayValue){
                                        if($property == 'gender' && $key == 'gender'){
                                            if($objectOrArrayValue == 'm')
                                                $objectOrArrayValue = 'male';
                                            else 
                                                $objectOrArrayValue = 'female';
                                        }
                                        $table .=   $objectOrArrayValue . ', ';
                                    }
                                }else{
                                    $table .=   $value;
                                }
                            } 
                            $table .=    "</td>";
                        $table .=    "</tr>";
                   }
    $table.=   "</tbody>
            </table>";
    

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <?= $table ?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
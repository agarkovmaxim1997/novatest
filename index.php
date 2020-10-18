<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Массив</title>
</head>
<body>
    <?php
        $chelovek = array(array("name"=>"Максим","surname"=>"Агарков","patronymic"=>"Николаевич","dob"=>"08.04.1997"),
            array("name"=>"Петр","surname"=>"Петров","patronymic"=>"Петрович","dob"=>"08.05.1992"),
            array("name"=>"Василий","surname"=>"Васильев","patronymic"=>"Васильевич","dob"=>"08.05.1987"),
            array("name"=>"Федор","surname"=>"Федоров","patronymic"=>"Федорович","dob"=>"10.07.1982"),
            array("name"=>"Станислав","surname"=>"Стасов","patronymic"=>"Станиславович","dob"=>"15.03.1977"),
            array("name"=>"Андрей","surname"=>"Андреев","patronymic"=>"Андреевич","dob"=>"19.07.1972"),
            array("name"=>"Канстантин","surname"=>"Костин","patronymic"=>"Константинович","dob"=>"21.06.1967"),
            array("name"=>"Николай","surname"=>"Николаев","patronymic"=>"Николаевич","dob"=>"25.12.1965"));
        $noname = array("Моксим","Оликсей", "Ондрей","Канстантин");
        $date = time();
        echo "<b>Весь массив: </b><br>";
        $war = true;
        for($i = 0; $i < count($chelovek); $i++) {
            foreach($chelovek[$i] as $key => $value) {
                echo $chelovek[$i][$key]. " ";
            }
            echo "<br>";
        }
        echo "<br><b>Сегодня: ".date("d.m.Y",$date)."</b><br><br>";
        echo "<b>Люди моложе 40: </b><br>";
        $war = true;
        for($i = 0; $i < count($chelovek); $i++) {
            foreach($chelovek[$i] as $key => $value) {
                $birthday_timestamp = strtotime($chelovek[$i]["dob"]);
                $age[$i] = date('Y') - date('Y', $birthday_timestamp);
                if (date('md', $birthday_timestamp) > date('md')) {
                    $age[$i]--;
                }
                if (($age[$i]<40)) {
                    for ($j = 0; $j < count($noname); $j++) {
                        if($chelovek[$i]["name"] == $noname[$j]) {
                            $war = false;
                        }
                    }
                }
                else {
                    $war = false;
                }
                if ($war) {
                    echo $chelovek[$i][$key]. " ";
                }
            }
            if ($war) {
                echo "<br>";
            }
            $war = true;
        }
        echo "<br><b>Люди старше 40: </b><br>";
        for($i = 0; $i < count($chelovek); $i++) {
            foreach($chelovek[$i] as $key => $value) {
                $birthday_timestamp = strtotime($chelovek[$i]["dob"]);
                $age[$i] = date('Y') - date('Y', $birthday_timestamp);
                if (date('md', $birthday_timestamp) > date('md')) {
                    $age[$i]--;
                }
                if (($age[$i]>=40)) {
                    for ($j = 0; $j < count($noname); $j++) {
                        if($chelovek[$i]["name"] == $noname[$j]) {
                            $war = false;
                        }
                    }
                }
                else {
                    $war = false;
                }
                if ($war) {
                    echo $chelovek[$i][$key]. " ";
                }
            }
            if ($war) {
                echo "<br>";
            }
            $war = true;
        }
    ?>
</body>
</html>
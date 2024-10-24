<?php
//require_once __DIR__ . "/vendor/autoload.php";
//use \Leonied7\Yandex\Disk;
//$yandexDisk = new Disk('y0_AgAAAAB5LzR1AAyiygAAAAEVDlQeAACLgQBwOIJBD5b4ZLoxA-lwhlXHgg');
//
//$file = $yandexDisk->file('file.xlsx');
//$file->download(); //bool
//// получение последнего результата запроса
//$result = Disk\Collection\ResultList::getInstance()->getLast();
//file_put_contents(  'file.xlsx', $result->getActualResult());
require_once __DIR__ . "/vendor/autoload.php";

use Shuchkin\SimpleXLSX;
$arr = [];
if ( $xlsx = SimpleXLSX::parse('file.xlsx') ) {
    $table = $xlsx->rows();


    //кнт1
    {
    $a = 4;
    $group = 1;
    for ($i = 11; $i < 17; $i++) {

        $ceil = $table[$i][$a];
        $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
    }

    for ($i = 22; $i < 30; $i++) {
        $ceil = $table[$i][$a];
        $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
    }

    for ($i = 33; $i < 41; $i++) {
        $ceil = $table[$i][$a];
        $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
    }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

    for ($i = 55; $i < 62; $i++) {
        $ceil = $table[$i][$a];
        $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
    }

    for ($i = 66; $i < 73; $i++) {
        $ceil = $table[$i][$a];
        $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
    }


}



    //кнт2
    {
        $a = 7;
        $group = 2;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }



        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];







        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }


    //кнт3
    {
        $a = 10;
        $group = 3;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }


    //кнт4
    {
        $a = 16;
        $group = 4;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }


    //кнт5
    {
        $a = 19;
        $group = 5;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }

    //кнт6
    {
        $a = 22;
        $group = 6;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }

    //кнт7
    {
        $a = 28;
        $group = 7;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }

    //кнт8
    {
        $a = 31;
        $group = 8;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }


    //кнт9
    {
        $a = 34;
        $group = 9;
        for ($i = 11; $i < 17; $i++) {

            $ceil = $table[$i][$a];
            $arr["mon"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["mon"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 22; $i < 30; $i++) {
            $ceil = $table[$i][$a];
            $arr["tue"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["tue"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 33; $i < 41; $i++) {
            $ceil = $table[$i][$a];
            $arr["wen"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["wen"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        $ceil = $table[44][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;

        $ceil = $table[50][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[50][$a + 1];

        $ceil = $table[51][$a];
        $arr["thur"]["knt{$group}"]["lessons"][] = $ceil;
        $arr["thur"]["knt{$group}"]["audit"][] = $table[51][$a + 1];

        for ($i = 55; $i < 62; $i++) {
            $ceil = $table[$i][$a];
            $arr["fri"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["fri"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }

        for ($i = 66; $i < 73; $i++) {
            $ceil = $table[$i][$a];
            $arr["sut"]["knt{$group}"]["lessons"][] = $ceil;
            $arr["sut"]["knt{$group}"]["audit"][] = $table[$i][$a + 1];
        }


    }
    $a =  json_encode($arr);
    echo "
    <script>
    
        mas = $a;
        console.log(mas);
    </script>
    ";


} else {
    echo SimpleXLSX::parseError();
}
<?php

class tabung
{
    function Hasiltabung($jari , $tinggi)
    {
        $volume = 3.14 * $jari * $tinggi;
        echo "Volume Tabung adalah :" . $volume;
        
        $luaspermukaan = 2 * 3.14 * $jari * ($jari + $tinggi);
        echo "Luas Permukaan Tabung adalah :" . $luaspermukaan;

        $luasselimut = 2 * 3.14 * $jari * $tinggi;
        echo "Luas Selimut Tabung adalah :" . $luasselimut;
    }
}

?>

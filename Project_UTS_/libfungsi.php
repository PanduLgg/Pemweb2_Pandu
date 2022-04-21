<?php
    function kelulusan($nilai_total) {
        if ($nilai_total > 55 ){
            return 'LULUS';
        }
        else {
            return 'TIDAK LULUS';
        }
    }
?>

<?php
    // letakan di paling atas file

    require_once 'libfungsi.php';   
    // kode lainnya logik program anda
    // $_nilai = total nilai

    $hasil_ujian = kelulusan($_nilai)
    echo 'DINYATAKAN ' . $hasil_ujian;
?>

<?php  

    function kelulusan($nilai_total) {
    // isi fungsi kelulusan
        if($nilai_total > 55 ) {$lulus = "Lulus";}
        if($nilai_total <= 55 ) {$lulus = "Tidak Lulus";}

        return $lulus;
    }
    function grade($nilai_total) {
    // isi fungsi grade
        if($nilai_total <= 100 ) {$grade = "A";}
        if($nilai_total < 85 ) {$grade = "B";}
        if($nilai_total < 70 ) {$grade = "C";}
        if($nilai_total < 56 ) {$grade = "D";}
        if($nilai_total < 36 ) {$grade = "E";}
        if($nilai_total < 0 ) {$grade = "I";}
        if($nilai_total > 100 ) {$grade = "I";}

        return $grade;
    }

    function predikat($grade) // argumen nya E,D,C,B,A
    { 
    // isi fungsi predikat
        switch ($grade) {
            case "A" :
                echo "Sangat Memuaskan";
                break;
            case "B" :
                echo "Memuaskan";
                break;
            case "C" :
                echo "Cukup";
                break;
            case "D" :
                echo "Kurang";
                break;
            case "E" :
                echo "Sangat Kurang";
                break;
            default :
                echo "Tidak Ada";
        }
    }

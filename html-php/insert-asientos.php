<?php
include("conex.php");
error_reporting(0);
session_start();
$sesion = $_SESSION['$id'];
$idVuelo = $_GET['idVuelo'];
$A1N = "A1";
$A2N = "A2";
$A3N = "A3";
$A4N = "A4";
$A5N = "A5";
$A6N = "A6";
$B1N = "B1";
$B2N = "B2";
$B3N = "B3";
$B4N = "B4";
$B5N = "B5";
$B6N = "B6";
$C1N = "C1";
$C2N = "C2";
$C3N = "C3";
$C4N = "C4";
$C5N = "C5";
$C6N = "C6";
$D1N = "D1";
$D2N = "D2";
$D3N = "D3";
$D4N = "D4";
$D5N = "D5";
$D6N = "D6";
$E1N = "E1";
$E2N = "E2";
$E3N = "E3";
$E4N = "E4";
$E5N = "E5";
$E6N = "E6";
$F1N = "F1";
$F2N = "F2";
$F3N = "F3";
$F4N = "F4";
$F5N = "F5";
$F6N = "F6";
$G1N = "G1";
$G2N = "G2";
$G3N = "G3";
$G4N = "G4";
$G5N = "G5";
$G6N = "G6";
$H1N = "H1";
$H2N = "H2";
$H3N = "H3";
$H4N = "H4";
$H5N = "H5";
$H6N = "H6";
$I1N = "I1";
$I2N = "I2";
$I3N = "I3";
$I4N = "I4";
$I5N = "I5";
$I6N = "I6";
$J1N = "J1";
$J2N = "J2";
$J3N = "J3";
$J4N = "J4";
$J5N = "J5";
$J6N = "J6";
$K1N = "K1";
$K2N = "K2";
$K3N = "K3";
$K4N = "K4";
$K5N = "K5";
$K6N = "K6";

$A1 = $_POST['A1'];
$A2 = $_POST['A2'];
$A3 = $_POST['A3'];
$A4 = $_POST['A4'];
$A5 = $_POST['A5'];
$A6 = $_POST['A6'];
$B1 = $_POST['B1'];
$B2 = $_POST['B2'];
$B3 = $_POST['B3'];
$B4 = $_POST['B4'];
$B5 = $_POST['B5'];
$B6 = $_POST['B6'];
$C1 = $_POST['C1'];
$C2 = $_POST['C2'];
$C3 = $_POST['C3'];
$C4 = $_POST['C4'];
$C5 = $_POST['C5'];
$C6 = $_POST['C6'];
$D1 = $_POST['D1'];
$D2 = $_POST['D2'];
$D3 = $_POST['D3'];
$D4 = $_POST['D4'];
$D5 = $_POST['D5'];
$D6 = $_POST['D6'];
$E1 = $_POST['E1'];
$E2 = $_POST['E2'];
$E3 = $_POST['E3'];
$E4 = $_POST['E4'];
$E5 = $_POST['E5'];
$E6 = $_POST['E6'];
$F1 = $_POST['F1'];
$F2 = $_POST['F2'];
$F3 = $_POST['F3'];
$F4 = $_POST['F4'];
$F5 = $_POST['F5'];
$F6 = $_POST['F6'];
$G1 = $_POST['G1'];
$G2 = $_POST['G2'];
$G3 = $_POST['G3'];
$G4 = $_POST['G4'];
$G5 = $_POST['G5'];
$G6 = $_POST['G6'];
$H1 = $_POST['H1'];
$H2 = $_POST['H2'];
$H3 = $_POST['H3'];
$H4 = $_POST['H4'];
$H5 = $_POST['H5'];
$H6 = $_POST['H6'];
$I1 = $_POST['I1'];
$I2 = $_POST['I2'];
$I3 = $_POST['I3'];
$I4 = $_POST['I4'];
$I5 = $_POST['I5'];
$I6 = $_POST['I6'];
$J1 = $_POST['J1'];
$J2 = $_POST['J2'];
$J3 = $_POST['J3'];
$J4 = $_POST['J4'];
$J5 = $_POST['J5'];
$J6 = $_POST['J6'];
$K1 = $_POST['K1'];
$K2 = $_POST['K2'];
$K3 = $_POST['K3'];
$K4 = $_POST['K4'];
$K5 = $_POST['K5'];
$K6 = $_POST['K6'];

// insertar el valor de los asientos segun su numero de usuario asi como el estado 

// update 
include("conex.php");

function insert($asiento,$num, $sesion, $idVuelo)
{
    include("conex.php");
    if (!($asiento == null or $asiento == "")) {
        $resul = $conexion->query("UPDATE asientos set $num='ocupado', cliente$num='$sesion' where idVuelo='$idVuelo'");
        if ($resul) {
            echo "hola mundo";
        }
    }
}
// en todos los asientos 

// tomar el valor de la fila a

insert($A1,$A1N,$sesion,$idVuelo);
insert($A2,$A2N,$sesion,$idVuelo);
insert($A3,$A3N,$sesion,$idVuelo);
insert($A4,$A4N,$sesion,$idVuelo);
insert($A5,$A5N,$sesion,$idVuelo);
insert($A6,$A6N,$sesion,$idVuelo);

// tomar el valor de la fila B

insert($B1,$B1N,$sesion,$idVuelo);
insert($B2,$B2N,$sesion,$idVuelo);
insert($B3,$B3N,$sesion,$idVuelo);
insert($B4,$B4N,$sesion,$idVuelo);
insert($B5,$B5N,$sesion,$idVuelo);
insert($B6,$B6N,$sesion,$idVuelo);


// tomar el valor de la fila c 

insert($C1,$C1N,$sesion,$idVuelo);
insert($C2,$C2N,$sesion,$idVuelo);
insert($C3,$C3N,$sesion,$idVuelo);
insert($C4,$C4N,$sesion,$idVuelo);
insert($C5,$C5N,$sesion,$idVuelo);
insert($C6,$C6N,$sesion,$idVuelo);

// tomar el valor de la fila d

insert($D1,$D1N,$sesion,$idVuelo);
insert($D2,$D2N,$sesion,$idVuelo);
insert($D3,$D3N,$sesion,$idVuelo);
insert($D4,$D4N,$sesion,$idVuelo);
insert($D5,$D5N,$sesion,$idVuelo);
insert($D6,$D6N,$sesion,$idVuelo);

// tomar el valor de la fila E

insert($E1,$E1N,$sesion,$idVuelo);
insert($E2,$E2N,$sesion,$idVuelo);
insert($E3,$E3N,$sesion,$idVuelo);
insert($E4,$E4N,$sesion,$idVuelo);
insert($E5,$E5N,$sesion,$idVuelo);
insert($E6,$E6N,$sesion,$idVuelo);

// tomar el valor de la fila F

insert($F1,$F1N,$sesion,$idVuelo);
insert($F2,$F2N,$sesion,$idVuelo);
insert($F3,$F3N,$sesion,$idVuelo);
insert($F4,$F4N,$sesion,$idVuelo);
insert($F5,$F5N,$sesion,$idVuelo);
insert($F6,$F6N,$sesion,$idVuelo);

// Tomar el valor de la fila G

insert($F1,$F1N,$sesion,$idVuelo);
insert($F2,$F2N,$sesion,$idVuelo);
insert($F3,$F3N,$sesion,$idVuelo);
insert($F4,$F4N,$sesion,$idVuelo);
insert($F5,$F5N,$sesion,$idVuelo);
insert($F6,$F6N,$sesion,$idVuelo);


// tomar el valor de la Fila H

insert($H1,$F1N,$sesion,$idVuelo);
insert($H2,$F2N,$sesion,$idVuelo);
insert($H3,$F3N,$sesion,$idVuelo);
insert($H4,$F4N,$sesion,$idVuelo);
insert($H5,$F5N,$sesion,$idVuelo);
insert($H6,$F6N,$sesion,$idVuelo);

// tomar el valor de la Fila I

insert($G1,$G1N,$sesion,$idVuelo);
insert($G2,$G2N,$sesion,$idVuelo);
insert($G3,$G3N,$sesion,$idVuelo);
insert($G4,$G4N,$sesion,$idVuelo);
insert($G5,$G5N,$sesion,$idVuelo);
insert($G6,$G6N,$sesion,$idVuelo);

// tomar el valor de la Fila J

insert($J1,$J1N,$sesion,$idVuelo);
insert($J2,$J2N,$sesion,$idVuelo);
insert($J3,$J3N,$sesion,$idVuelo);
insert($J4,$J4N,$sesion,$idVuelo);
insert($J5,$J5N,$sesion,$idVuelo);
insert($J6,$J6N,$sesion,$idVuelo);

// tomar el valor de la Fila K

insert($K1,$K1N,$sesion,$idVuelo);
insert($K2,$K2N,$sesion,$idVuelo);
insert($K3,$K3N,$sesion,$idVuelo);
insert($K4,$K4N,$sesion,$idVuelo);
insert($K5,$K5N,$sesion,$idVuelo);
insert($K6,$K6N,$sesion,$idVuelo);


echo "<script>
window.location.href = 'infoAsistentes_disponibles.php?idVuelo=" . $idVuelo . "'
</script>";

// sigo mañana en modulo
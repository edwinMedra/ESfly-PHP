<?php
include("conex.php");
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
function insertar($asiento, $num, $sesion, $idVuelo)
{
    // update 
    include("conex.php");
    if (!($asiento == null)) {
        $resul = $conexion->query("UPDATE asientos set $num='ocupado', cliente$asiento=$sesion where idVuelo='$idVuelo'");
        if ($resul) {
            echo "hola mundo";
        }
    }
}
insertar($A1N, $A1N, $sesion, $idVuelo);
insertar($A2N, $A2N, $sesion, $idVuelo);
insertar($A3N, $A3N, $sesion, $idVuelo);
insertar($A4N, $A4N, $sesion, $idVuelo);
insertar($A5N, $A5N, $sesion, $idVuelo);
insertar($A6N, $A6N, $sesion, $idVuelo);

insertar($B1N, $B1N, $sesion, $idVuelo);
insertar($B2N, $B2N, $sesion, $idVuelo);
insertar($B3N, $B3N, $sesion, $idVuelo);
insertar($B4N, $B4N, $sesion, $idVuelo);
insertar($B5N, $B5N, $sesion, $idVuelo);
insertar($B6N, $B6N, $sesion, $idVuelo);

insertar($C1N, $C1N, $sesion, $idVuelo);
insertar($C2N, $C2N, $sesion, $idVuelo);
insertar($C3N, $C3N, $sesion, $idVuelo);
insertar($C4N, $C4N, $sesion, $idVuelo);
insertar($C5N, $C5N, $sesion, $idVuelo);
insertar($C6N, $C6N, $sesion, $idVuelo);

insertar($D1N, $D1N, $sesion, $idVuelo);
insertar($D2N, $D2N, $sesion, $idVuelo);
insertar($D3N, $D3N, $sesion, $idVuelo);
insertar($D4N, $D4N, $sesion, $idVuelo);
insertar($D5N, $D5N, $sesion, $idVuelo);
insertar($D6N, $D6N, $sesion, $idVuelo);

insertar($E1N, $E1N, $sesion, $idVuelo);
insertar($E2N, $E2N, $sesion, $idVuelo);
insertar($E3N, $E3N, $sesion, $idVuelo);
insertar($E4N, $E4N, $sesion, $idVuelo);
insertar($E5N, $E5N, $sesion, $idVuelo);
insertar($E6N, $E6N, $sesion, $idVuelo);

insertar($F1N, $F1N, $sesion, $idVuelo);
insertar($F2N, $F2N, $sesion, $idVuelo);
insertar($F3N, $F3N, $sesion, $idVuelo);
insertar($F4N, $F4N, $sesion, $idVuelo);
insertar($F5N, $F5N, $sesion, $idVuelo);
insertar($F6N, $F6N, $sesion, $idVuelo);

insertar($G1N, $G1N, $sesion, $idVuelo);
insertar($G2N, $G2N, $sesion, $idVuelo);
insertar($G3N, $G3N, $sesion, $idVuelo);
insertar($G4N, $G4N, $sesion, $idVuelo);
insertar($G5N, $G5N, $sesion, $idVuelo);
insertar($G6N, $G6N, $sesion, $idVuelo);

insertar($H1N, $H1N, $sesion, $idVuelo);
insertar($H2N, $H2N, $sesion, $idVuelo);
insertar($H3N, $H3N, $sesion, $idVuelo);
insertar($H4N, $H4N, $sesion, $idVuelo);
insertar($H5N, $H5N, $sesion, $idVuelo);
insertar($H6N, $H6N, $sesion, $idVuelo);

insertar($I1N, $I1N, $sesion, $idVuelo);
insertar($I2N, $I2N, $sesion, $idVuelo);
insertar($I3N, $I3N, $sesion, $idVuelo);
insertar($I4N, $I4N, $sesion, $idVuelo);
insertar($I5N, $I5N, $sesion, $idVuelo);
insertar($I6N, $I6N, $sesion, $idVuelo);

insertar($J1N, $J1N, $sesion, $idVuelo);
insertar($J2N, $J2N, $sesion, $idVuelo);
insertar($J3N, $J3N, $sesion, $idVuelo);
insertar($J4N, $J4N, $sesion, $idVuelo);
insertar($J5N, $J5N, $sesion, $idVuelo);
insertar($J6N, $J6N, $sesion, $idVuelo);

insertar($K1N, $K1N, $sesion, $idVuelo);
insertar($K2N, $K2N, $sesion, $idVuelo);
insertar($K3N, $K3N, $sesion, $idVuelo);
insertar($K4N, $K4N, $sesion, $idVuelo);
insertar($K5N, $K5N, $sesion, $idVuelo);
insertar($K6N, $K6N, $sesion, $idVuelo);

header("Location:infoAsistentes_disponibles.php?idVuelo=$idVuelo");
// sigo mañana en modulo
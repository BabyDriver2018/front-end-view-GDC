<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$contrato = $abonado = $propiedad = $sector = $estado = $pagomes = $servicio = $agencia = $deuda ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate contrato
    $input_contrato = trim($_POST["contrato"]);
    
        $contrato = $input_contrato;
    
    
    // Validate abonado
    $input_abonado = trim($_POST["abonado"]);
    
        $abonado = $input_abonado;
    
    
    // Validate propiedad
    $input_propiedad = trim($_POST["propiedad"]);
   
        $propiedad = $input_propiedad;

    // Validate sector
    $input_sector = trim($_POST["sector"]);
    
        $sector = $input_sector;
    
    
    // Validate estado
    $input_estado = trim($_POST["estado"]);
    
        $estado = $input_estado;
    
    
    // Validate pagomes
    $input_pagomes = trim($_POST["pagomes"]);
   
        $pagomes = $input_pagomes;

    // Validate servicio
    $input_servicio = trim($_POST["servicio"]);
    
        $servicio = $input_servicio;
    
    
    // Validate agencia
    $input_agencia = trim($_POST["agencia"]);
   
        $agencia = $input_agencia;
        
    $input_deuda = trim($_POST["deuda"]);
   
        $deuda = $input_deuda;
    
        // Prepare an insert statement
        
        $sql = "INSERT INTO users (contrato, abonado, propiedad, sector, estado, pagomes, servicio, agencia, deuda) VALUES (?, ?, ? , ?, ? ,?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
          
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss", $param_contrato, $param_abonado, $param_propiedad , 
                                                $param_sector , $param_estado , $param_pagomes,
                                                $param_servicio , $param_agencia , $param_deuda );
            
            // Set parameters
            $param_contrato = $contrato;
            $param_abonado = $abonado;
            $param_propiedad = $propiedad;
            $param_sector = $sector;
            $param_estado = $estado;
            $param_pagomes = $pagomes;
            $param_servicio = $servicio;
            $param_agencia = $agencia;
            $param_deuda = $deuda;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                echo "Erro";
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($link);
}
?>
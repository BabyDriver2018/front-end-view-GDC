

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php include("createController.php")?>">
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div class="form-group">
            <label>Contrato</label>
            <input type="text" name="contrato" class="form-control" value="<?php echo $contrato; ?>" require>
            
        </div>
        <br>
        <div class="form-group ">
            <label>Abonado</label>
            <input type="text" name="abonado" class="form-control" value="<?php echo $abonado; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Propiedad</label>
            <input type="text" name="propiedad" class="form-control" value="<?php echo $propiedad; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Sector</label>
            <input type="text" name="sector" class="form-control" value="<?php echo $sector; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="<?php echo $estado; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Pago Mensual</label>
            <input type="text" name="pagomes" class="form-control" value="<?php echo $pagomes; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Servicio</label>
            <input type="text" name="servicio" class="form-control" value="<?php echo $servicio; ?>" require>
            
        </div>
        <br>
        <div class="form-group  ">
            <label>Agencia</label>
            <input type="text" name="agencia" class="form-control" value="<?php echo $agencia; ?>" require>
            
        </div>
        <br>
        <div class="form-group ">
            <label>Deuda</label>
            <input type="text" name="deuda" class="form-control" value="<?php echo $deuda; ?>" require>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Agregar Usuario">

    </form>
</body>

</html>
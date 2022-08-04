<?php
    header('Location: 404.html');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Procesador de pago de SISCON®</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <section id="contacto" style="position:relative;">
        <div class="body-contact">
            <div class="header-contacto" style="margin-top: 50px;">
                <div class="contact-head">
                    <h1>Procesador de pagos</h1>
                </div>
            </div>
        </div>
        <div style="width:90%;margin: 0 auto;">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Formulario de ventas</h3>
          </div>
            <div class="box-body">
              <form role="form" method="post" id="crear-preventa-form" name="crear-preventa-form" action="../actions/modelo-ventas.php">
                  <div class="row">
                    <div class="col-md-5 with-border">
                      <!-- select cliente -->
                      <div class="form-group">
                        <label>Cliente </label>
                        <select id="buscar-cliente" name="buscar-cliente" class="form-control select2 buscar-cliente" max-value="1" style="width: 100%;">
                        <option value="0">- Seleccione -</option>              
                            <!-- // Llamado a los elementos dentro de la BD -->
                            <?php
                                try {
                                    $sql = "SELECT * FROM clientes WHERE estado_cliente = 1 ORDER BY nombre";
                                    $resultado = $conn->query($sql);
                                } catch (\Throwable $th) {
                                    echo "Error: " . $th->getMessage();
                                }
                                while($cliente = $resultado->fetch_assoc() ){ ?>
                                    <option value="<?php echo $cliente['id_cliente']; ?>"><b><?php echo $cliente['nombre']. ' ' .$cliente['apellido']. '</b>'; ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-1 with-border">
                        <label for="comprobante">Comprobante</label>
                        <select name="comprobante" id="comprobante" class="form-control select2" style="width:100%;" disabled>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="x" selected>X</option>
                        </select>
                    </div>
                    <div class="col-md-1" style="padding-top:25px;">
                      <a href="nuevo-cliente.php?mov=1" class="btn btn-default" style="width:100%;">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                    <div class="col-md-2">
                      <button type="button" id="camb-cliente" class="btn btn-block btn-warning btn-margin" disabled>Cambiar</button>
                    </div>
                    <div class="col-md-3 with-border">
                      <label for="vendedor">Vendedor</label>
                      <select name="vendedor-prev" id="vendedor-prev" class="form-control select2" style="width:100%;" <?php if($nivel < 1 && $nivel > 5){ echo 'disabled'; } ?>>
                        <?php
                          try {
                            $sql = "SELECT * FROM vendedores WHERE estado_vendedor = 1 ORDER BY nombre_vendedor";
                            $resultado = $conn->query($sql);
                          } catch (\Throwable $th) {
                            echo "Error: " . $th->getMessage();
                          }
                          while($vendedor = $resultado->fetch_assoc()){ ?>
                        <option value="<?php echo $vendedor['id_vendedor']; ?>" <?php if(intval($vendedor['usuario']) == $usuario){ echo 'selected'; } ?>><?php echo $vendedor['nombre_vendedor']; ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div> <!-- End row -->
                  <div class="row">
                    <div class="col-md-8 with-border">
                      <!-- select cliente -->
                      <div class="form-group">
                        <label>Producto </label>
                        <select id="buscar-producto" name="buscar-producto" class="form-control select2" style="width: 100%;" disabled>        
                        <option value="0">- Seleccione -</option>
                          <!-- // Llamado a los elementos dentro de la BD -->
                          <?php
                              try {
                                  $sql = "SELECT * FROM productos WHERE estado = 1 ORDER BY codigo_prod";
                                  $resultado = $conn->query($sql);
                              } catch (\Throwable $th) {
                                  echo "Error: " . $th->getMessage();
                              }
                              while($producto = $resultado->fetch_assoc() ){ ?>
                                  <option value="<?php echo $producto['id_producto']; ?>"><?php echo $producto['codigo_prod']. " - " .$producto['descripcion']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div> <!-- /.col-md-9 -->
                    <div class="col-md-2">
                      <label>Cantidad: </label>
                      <input type="number" class="form-control solo-numero-cero" name="cant-productos" id="cant-productos" min="1" size="6" value="1.00" disabled required>
                    </div>
                  <div class="col-md-2">
                    <button type="button" id="ingresar-todo" class="btn btn-block btn-primary btn-margin" disabled>Ingresar</button>
                  </div>
                </div> <!-- End row -->
                <div class="col-md-12 bg-12">
                  <div class="box-body">
                    <table id="ing-prods" class="table table-hover">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="cent-text">Cant.</th>
                          <th>Item.</th>
                          <th>Cód. prod.</th>
                          <th>Descripción</th>
                          <th>Precio Un.</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                      <tfoot>
                        <th></th>
                        <th></th>
                        <th>Crédito:<b><span id="credito" class="pull-right bg-olive" style="padding: 0 5px;"></span></b></th>
                        <th></th>
                        <th>Descuento: <b><span id="descuento-preventa" name="descuento-valor" style="padding: 0 5px;"></span></b></th>
                        <th class="text-right">Sub-total:</th>
                        <th id="subtotal-preventa" class="bg-gray-light text-right"></th>
                      </tfoot>
                    </table>
                  </div> <!-- /.box-body -->
                  <div class="col-md-12">
                    <div class="form-group cent-text" style="margin-top:10px">
                      <label style="font-size:30px"> Total: </label>
                      <input type="text" id="total-valor" name="total-valor" class="input-total text-right text-red" style="font-weight:bold" style="font-weight:bold" readonly>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <label>Items:</label>
                    <input type="number" class="form-control text-right" id="cant-items" value="0" readonly>
                  </div>
                  <div class="col-md-2">
                    <label>Sub-items:</label>
                    <input type="number" class="form-control text-right" id="cant-sub-items" value="0" readonly>
                  </div>
                  <div class="col-md-5">
                    <label>Medio de pago:</label>
                    <select name="medio-pago" class="select2 form-control" id="medio-pago" style="width:100%;" disabled>
                      <!-- <option value="1.1">1.1 - Tarjeta crédito: Visa</option>
                      <option value="1.2">1.2 - Tarjeta crédito: Mastercard</option>
                      <option value="1.3">1.3 - Tarjeta crédito: Naranja</option>
                      <option value="1.4">1.4 - Tarjeta crédito: American Express</option>
                      <option value="1.5">1.5 - Tarjeta crédito: Nativa</option>
                      <option value="1.6">1.6 - Tarjeta crédito: Cabal</option>
                      <option value="1.10">1.10 - Tarjeta débito: Visa débito</option>
                      <option value="1.11">1.11 - Tarjeta crédito: Maestro</option>
                      <option value="1.12">1.12 - Tarjeta crédito: Cabal débito</option>
                      <option value="2.1">2.1 - Efectivo U$D</option> -->
                      <option value="2.2" selected>2.2 - Efectivo $</option>
                    </select>
                  </div>
                  <div class="col-md-3 btn-margin">
                    <input type="button" id="btn-bonif" class="btn btn-block btn-default" value="Bonificación" disabled>
                  </div>
                  <div class="col-md-2 ocultar hide-all">
                    <label>Tipo bonif.:</label>
                    <select id="tipo-bonif" name="tipo-bonif" class="form-control select2 ocultar hide-all" style="width: 100%;">        
                      <option value="1">Descuento</option>
                      <option value="2">Prod. fallado</option>
                      <option value="3">Prod. no reconocido</option>
                      <option value="4">A favor cliente</option>
                    </select>
                  </div>
                  <div class="col-md-2 ocultar hide-all">
                    <label>%: </label>
                    <input type="number" class="form-control text-right solo-numero ocultar hide-all" id="monto-bonif" name="monto-bonif">
                  </div>
                  <div class="col-md-7 ocultar hide-all">
                    <label>Detalle</label>
                    <input type="text" class="form-control ocultar hide-all" id="detalle-bonif" name="detalle-bonif" readonly>
                  </div>
                  <div class="col-md-1 btn-margin">
                    <input type="button" id="btn-canc-bonif" class="btn btn-block btn-danger ocultar hide-all" value="X">
                  </div>
                  <div class="col-md-12" style="margin-bottom:15px">
                    <label for="comentarios">Comentarios:</label>
                    <textarea class="form-control" name="comentarios" id="coment_preventa" rows="3" disabled></textarea>
                  </div>
                </div> <!-- /.box-body -->
                <div class="box-footer cent-text">
                  <input type="hidden" id="registro-modelo" value="crear-venta">
                  <input type="hidden" id="usuario" value="<?php echo $_SESSION['usuario']; ?>">
                  <input type="hidden" id="ganancia-prev" name="ganancia-prev" value="0">
                  <input type="hidden" id="id-cred" value="0">
                  <input type="submit" class="btn btn-primary" id="crear-venta" value="Generar e imprimir venta" style="width:250px;" disabled>
                  <input type="reset" class="btn btn-danger" id="cancelar-preventa" value="Borrar" disabled>
                </div>
              </form>
            </div> <!-- Finaliza box body -->
        </div>
      </div>
    </section>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
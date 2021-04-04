<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';

if ($_SESSION['actas']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Registro de Actas <strong>CONGRESO</strong> <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> </h1>
                          <!-- <a href="../reportes/rptcategorias.php" target="_blank"><button class="btn btn-info"><i class="fa fa-clipboard"></i> Reporte</button></a> -->                          
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Numero Acta</th>
                            <th>Tipo Acta</th>
                            <th>Total Votantes</th>
                            <th>Observaciones</th>
                            <th>Estado</th>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Numero Acta</th>
                            <th>Tipo Acta</th>
                            <th>Total Votantes</th>
                            <th>Observaciones</th> 
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 2200px;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Numero Acta</label>
                        <input type="hidden" name="idactacongre" id="idactacongre">
                        <input type="hidden" name="tipo_acta" id="tipo_acta" value="CONGRESAL">
                        <strong><input type="text" class="form-control" name="num_acta" id="num_acta" maxlength="10" placeholder="Numero Acta o Numero de Mesa" required></strong>
                      </div>                         
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Observaciones</label>                           
                        <input type="text" class="form-control" name="observa" id="observa" maxlength="100" placeholder="Observaciones si las tiene">
                      </div> 
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                        <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                      </div>
                        <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Total</th>
                            <th scope="col" colspan="4">Votos Preferenciales - Candidatos al Congreso</th>
                          </tr>
                          <tr>
                            <th scope="col">Orden</th>
                            <th scope="col">Partido Politico</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Total</th>
                            <th scope="col">01</th>
                            <th scope="col">02</th>
                            <th scope="col">03</th>
                            <th scope="col">04</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>FREPAP</td>
                            <td><img src="../public/img/partidos/frepap.png" alt="">                            
                            <td><strong><input type="number" class="form-control" name="presi0" id="presi0" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre01" id="congre01" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre02" id="congre02" min="0"required></td>
                            <td><input type="number" class="form-control" name="congre03" id="congre03" min="0"required></td>
                            <td><input type="number" class="form-control" name="congre04" id="congre04" min="0"required></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>PARTIDO NACIONALISTA PERUANO</td>
                            <td><img src="../public/img/partidos/nacionalista.png" alt="">
                            <td><strong><input type="number" class="form-control" name="presi1" id="presi1" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre11" id="congre11" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre12" id="congre12" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre13" id="congre13" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre14" id="congre14" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>FRENTE AMPLIO POR JUSTICIA, VIDA Y LIBERTAD</td>
                            <td><img src="../public/img/partidos/frenteamplio.png" alt=""> </td>
                            <td><strong><input type="number" class="form-control" name="presi2" id="presi2" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre21" id="congre21" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre22" id="congre22" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre23" id="congre23" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre24" id="congre24" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>PARTIDO MORADO</td>
                            <td><img src="../public/img/partidos/morado.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi3" id="presi3" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre31" id="congre31" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre32" id="congre32" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre33" id="congre33" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre34" id="congre34" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>PERÚ PATRIA SEGURA</td>
                            <td><img src="../public/img/partidos/segura.png" alt=""></td> 
                            <td><strong><input type="number" class="form-control" name="presi4" id="presi4" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre41" id="congre41" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre42" id="congre42" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre43" id="congre43" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre44" id="congre44" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>VICTORIA NACIONAL</td>
                            <td><img src="../public/img/partidos/victoria.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi5" id="presi5" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre51" id="congre51" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre52" id="congre52" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre53" id="congre53" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre54" id="congre54" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>ACCIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/accionpopular.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi6" id="presi6" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre61" id="congre61" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre62" id="congre62" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre63" id="congre63" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre64" id="congre64" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>AVANZA PAÍS - PARTIDO DE INTEGRACIÓN SOCIAL</td>
                            <td><img src="../public/img/partidos/avanzapais.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi7" id="presi7" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre71" id="congre71" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre72" id="congre72" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre73" id="congre73" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre74" id="congre74" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>PODEMOS PERÚ</td>
                            <td><img src="../public/img/partidos/podemosperu.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi8" id="presi8" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre81" id="congre81" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre82" id="congre82" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre83" id="congre83" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre84" id="congre84" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>JUNTOS POR EL PERÚ</td>
                            <td><img src="../public/img/partidos/juntospp.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi9" id="presi9" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre91" id="congre91" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre92" id="congre92" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre93" id="congre93" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre94" id="congre94" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>PARTIDO POPULAR CRISTIANO - PPC</td>
                            <td><img src="../public/img/partidos/ppc.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi10" id="presi10" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre101" id="congre101" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre102" id="congre102" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre103" id="congre103" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre104" id="congre104" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>FUERZA POPULAR</td>
                            <td><img src="../public/img/partidos/fuerzapopular.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi11" id="presi11" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre111" id="congre111" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre112" id="congre112" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre113" id="congre113" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre114" id="congre114" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">13</th>
                            <td>UNIÓN POR EL PERÚ</td>
                            <td><img src="../public/img/partidos/union.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi12" id="presi12" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre121" id="congre121" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre122" id="congre122" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre123" id="congre123" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre124" id="congre124" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">14</th>
                            <td>RENOVACIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/renovacion.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi13" id="presi13" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre131" id="congre131" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre132" id="congre132" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre133" id="congre133" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre134" id="congre134" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">15</th>
                            <td>RENACIMIENTO UNIDO NACIONAL</td>
                            <td><img src="../public/img/partidos/runa.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi14" id="presi14" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre141" id="congre141" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre142" id="congre142" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre143" id="congre143" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre144" id="congre144" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">16</th>
                            <td>PARTIDO DEMOCRÁTICO SOMOS PERÚ</td>
                            <td><img src="../public/img/partidos/somos.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi15" id="presi15" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre151" id="congre151" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre152" id="congre152" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre153" id="congre153" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre154" id="congre154" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">17</th>
                            <td>PARTIDO POLÍTICO NACIONAL PERÚ LIBRE</td>
                            <td><img src="../public/img/partidos/libre.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi16" id="presi16" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre161" id="congre161" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre162" id="congre162" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre163" id="congre163" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre164" id="congre164" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">18</th>
                            <td>DEMOCRACIA DIRECTA</td>
                            <td><img src="../public/img/partidos/directa.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi17" id="presi17" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre171" id="congre171" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre172" id="congre172" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre173" id="congre173" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre174" id="congre174" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">19</th>
                            <td>ALIANZA PARA EL PROGRESO</td>
                            <td><img src="../public/img/partidos/app.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi18" id="presi18" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="congre181" id="congre181" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre182" id="congre182" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre183" id="congre183" min="0" required></td>
                            <td><input type="number" class="form-control" name="congre184" id="congre184" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td colspan="2"> Votos en Blanco</td>                            
                            <td><input type="number" class="form-control" name="blanco" id="blanco" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td colspan="2"> Votos Nulos</td>
                            <td><input type="number" class="form-control" name="nulo" id="nulo" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td colspan="2"> Votos Impugnados</td>
                            <td><input type="number" class="form-control" name="impugnado" id="impugnado" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row"> </th>
                            <td colspan="2"> <strong>TOTAL DE VOTOS EMITIDOS</strong></td>
                            <td><strong><input type="number" class="form-control" name="total_congre" id="total_congre" min="0" required></strong></td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                      </form>
                    </div>
                    
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->                                
    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}

require 'footer.php';
?>
<script type="text/javascript" src="scripts/actacongre.js"></script>
<?php 
}
ob_end_flush();
?>



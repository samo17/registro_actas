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
                          <h1 class="box-title">Registro de Actas <strong>PARLAMENTO</strong> <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> </h1>
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
                        <input type="hidden" name="idactaparla" id="idactaparla">
                        <input type="hidden" name="tipo_acta" id="tipo_acta" value="PARLAMENTAL">
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
                            <th scope="col"></th>
                            <th scope="col" colspan="4">Votos Preferenciales - Candidatos al Parlamento Andino</th>
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
                            <td>FRENTE POPULAR AGRÍCOLA FIA DEL PERÚ - FREPAP</td>
                            <td><img src="../public/img/partidos/frepap.png" alt="">                            
                            <td><strong><input type="number" class="form-control" name="presi0" id="presi0" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla01" id="parla01" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla02" id="parla02" min="0"required></td>
                            <td><input type="number" class="form-control" name="parla03" id="parla03" min="0"required></td>
                            <td><input type="number" class="form-control" name="parla04" id="parla04" min="0"required></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>PARTIDO NACIONALISTA PERUANO</td>
                            <td><img src="../public/img/partidos/nacionalista.png" alt="">
                            <td><strong><input type="number" class="form-control" name="presi1" id="presi1" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla11" id="parla11" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla12" id="parla12" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla13" id="parla13" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla14" id="parla14" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>FRENTE AMPLIO POR JUSTICIA, VIDA Y LIBERTAD</td>
                            <td><img src="../public/img/partidos/frenteamplio.png" alt=""> </td>
                            <td><strong><input type="number" class="form-control" name="presi2" id="presi2" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla21" id="parla21" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla22" id="parla22" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla23" id="parla23" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla24" id="parla24" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>PARTIDO MORADO</td>
                            <td><img src="../public/img/partidos/morado.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi3" id="presi3" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla31" id="parla31" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla32" id="parla32" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla33" id="parla33" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla34" id="parla34" min="0" required></td>
                          </tr>                          
                          <tr>
                            <th scope="row">7</th>
                            <td>ACCIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/accionpopular.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi6" id="presi6" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla61" id="parla61" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla62" id="parla62" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla63" id="parla63" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla64" id="parla64" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>AVANZA PAÍS - PARTIDO DE INTEGRACIÓN SOCIAL</td>
                            <td><img src="../public/img/partidos/avanzapais.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi7" id="presi7" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla71" id="parla71" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla72" id="parla72" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla73" id="parla73" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla74" id="parla74" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>PODEMOS PERÚ</td>
                            <td><img src="../public/img/partidos/podemosperu.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi8" id="presi8" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla81" id="parla81" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla82" id="parla82" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla83" id="parla83" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla84" id="parla84" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>JUNTOS POR EL PERÚ</td>
                            <td><img src="../public/img/partidos/juntospp.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi9" id="presi9" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla91" id="parla91" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla92" id="parla92" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla93" id="parla93" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla94" id="parla94" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>PARTIDO POPULAR CRISTIANO - PPC</td>
                            <td><img src="../public/img/partidos/ppc.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi10" id="presi10" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla101" id="parla101" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla102" id="parla102" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla103" id="parla103" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla104" id="parla104" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>FUERZA POPULAR</td>
                            <td><img src="../public/img/partidos/fuerzapopular.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi11" id="presi11" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla111" id="parla111" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla112" id="parla112" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla113" id="parla113" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla114" id="parla114" min="0" required></td>
                          </tr>                         
                          <tr>
                            <th scope="row">14</th>
                            <td>RENOVACIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/renovacion.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi13" id="presi13" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla131" id="parla131" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla132" id="parla132" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla133" id="parla133" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla134" id="parla134" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">15</th>
                            <td>RENACIMIENTO UNIDO NACIONAL</td>
                            <td><img src="../public/img/partidos/runa.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi14" id="presi14" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla141" id="parla141" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla142" id="parla142" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla143" id="parla143" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla144" id="parla144" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">16</th>
                            <td>PARTIDO DEMOCRÁTICO SOMOS PERÚ</td>
                            <td><img src="../public/img/partidos/somos.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi15" id="presi15" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla151" id="parla151" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla152" id="parla152" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla153" id="parla153" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla154" id="parla154" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">17</th>
                            <td>PARTIDO POLÍTICO NACIONAL PERÚ LIBRE</td>
                            <td><img src="../public/img/partidos/libre.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi16" id="presi16" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla161" id="parla161" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla162" id="parla162" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla163" id="parla163" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla164" id="parla164" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">18</th>
                            <td>DEMOCRACIA DIRECTA</td>
                            <td><img src="../public/img/partidos/directa.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi17" id="presi17" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla171" id="parla171" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla172" id="parla172" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla173" id="parla173" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla174" id="parla174" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">19</th>
                            <td>ALIANZA PARA EL PROGRESO</td>
                            <td><img src="../public/img/partidos/app.png" alt=""></td>
                            <td><strong><input type="number" class="form-control" name="presi18" id="presi18" min="0" required></strong></td>
                            <td><input type="number" class="form-control" name="parla181" id="parla181" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla182" id="parla182" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla183" id="parla183" min="0" required></td>
                            <td><input type="number" class="form-control" name="parla184" id="parla184" min="0" required></td>
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
                            <td><strong><input type="number" class="form-control" name="total_parla" id="total_parla" min="0" required></strong></td>
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
<script type="text/javascript" src="scripts/actaparla.js"></script>
<?php 
}
ob_end_flush();
?>



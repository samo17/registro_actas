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
                          <h1 class="box-title">Registro de Actas <strong>PRESIDENTE</strong> <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button> </h1>
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
                        <input type="hidden" name="idactapresi" id="idactapresi">
                        <input type="hidden" name="tipo_acta" id="tipo_acta" value="PRESIDENCIAL">
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
                            <th scope="col">Orden</th>
                            <th scope="col">Partido Politico</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Candidato</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Voto</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>PARTIDO NACIONALISTA PERUANO</td>
                            <td><img src="../public/img/partidos/nacionalista.png" alt="">
                            <td>Ollanta Humala</td>
                            <td><img src="../public/img/partidos/cnacionalista.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi1" id="presi1" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>FRENTE AMPLIO POR JUSTICIA, VIDA Y LIBERTAD</td>
                            <td><img src="../public/img/partidos/frenteamplio.png" alt=""> </td>
                            <td>Marco Arana</td>
                            <td><img src="../public/img/partidos/cfrenteamplio.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi2" id="presi2" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>PARTIDO MORADO</td>
                            <td><img src="../public/img/partidos/morado.png" alt=""></td>
                            <td>Julio Guzmán</td>
                            <td><img src="../public/img/partidos/cmorado.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi3" id="presi3" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>PERÚ PATRIA SEGURA</td>
                            <td><img src="../public/img/partidos/segura.png" alt=""></td> 
                            <td>Rafael Santos</td>
                            <td><img src="../public/img/partidos/csegura.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi4" id="presi4" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>VICTORIA NACIONAL</td>
                            <td><img src="../public/img/partidos/victoria.png" alt=""></td>
                            <td>George Forsyth</td>
                            <td> <img src="../public/img/partidos/cvictoria.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi5" id="presi5" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>ACCIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/accionpopular.png" alt=""></td>
                            <td>Yonhy Lescano</td>
                            <td> <img src="../public/img/partidos/caccionpopular.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi6" id="presi6" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>AVANZA PAÍS - PARTIDO DE INTEGRACIÓN SOCIAL</td>
                            <td><img src="../public/img/partidos/avanzapais.png" alt=""></td>
                            <td>Hernando de Soto</td>
                            <td> <img src="../public/img/partidos/cavanzapais.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi7" id="presi7" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>PODEMOS PERÚ</td>
                            <td><img src="../public/img/partidos/podemosperu.png" alt=""></td>
                            <td>Daniel Urresti</td>
                            <td> <img src="../public/img/partidos/cpodemosperu.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi8" id="presi8" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>JUNTOS POR EL PERÚ</td>
                            <td><img src="../public/img/partidos/juntospp.png" alt=""></td>
                            <td>Verónika Mendoza</td>
                            <td> <img src="../public/img/partidos/cjuntospp.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi9" id="presi9" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>PARTIDO POPULAR CRISTIANO - PPC</td>
                            <td><img src="../public/img/partidos/ppc.png" alt=""></td>
                            <td>Alberto Beingolea</td>
                            <td> <img src="../public/img/partidos/cppc.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi10" id="presi10" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>FUERZA POPULAR</td>
                            <td><img src="../public/img/partidos/fuerzapopular.png" alt=""></td>
                            <td>Keiko Fujimori</td>
                            <td> <img src="../public/img/partidos/cfuerzapopular.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi11" id="presi11" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>UNIÓN POR EL PERÚ</td>
                            <td><img src="../public/img/partidos/union.png" alt=""></td>
                            <td>José Vega</td>
                            <td> <img src="../public/img/partidos/cunion.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi12" id="presi12" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">13</th>
                            <td>RENOVACIÓN POPULAR</td>
                            <td><img src="../public/img/partidos/renovacion.png" alt=""></td>
                            <td>Rafael López Aliaga</td>
                            <td> <img src="../public/img/partidos/crenovacion.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi13" id="presi13" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">14</th>
                            <td>RENACIMIENTO UNIDO NACIONAL</td>
                            <td><img src="../public/img/partidos/runa.png" alt=""></td>
                            <td>Ciro Gálvez</td>
                            <td> <img src="../public/img/partidos/cruna.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi14" id="presi14" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">15</th>
                            <td>PARTIDO DEMOCRÁTICO SOMOS PERÚ</td>
                            <td><img src="../public/img/partidos/somos.png" alt=""></td>
                            <td>Daniel Salaverry</td>
                            <td> <img src="../public/img/partidos/csomos.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi15" id="presi15" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">16</th>
                            <td>PARTIDO POLÍTICO NACIONAL PERÚ LIBRE</td>
                            <td><img src="../public/img/partidos/libre.png" alt=""></td>
                            <td>Pedro Castillo</td>
                            <td> <img src="../public/img/partidos/clibre.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi16" id="presi16" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">17</th>
                            <td>DEMOCRACIA DIRECTA</td>
                            <td><img src="../public/img/partidos/directa.png" alt=""></td>
                            <td>Andrés Alcantara</td>
                            <td> <img src="../public/img/partidos/cdirecta.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi17" id="presi17" min="0" required></td>
                          </tr>
                          <tr>
                            <th scope="row">18</th>
                            <td>ALIANZA PARA EL PROGRESO</td>
                            <td><img src="../public/img/partidos/app.png" alt=""></td>
                            <td>César Acuña</td>
                            <td> <img src="../public/img/partidos/capp.png" alt=""></td>
                            <td><input type="number" class="form-control" name="presi18" id="presi18" min="0" required></td>
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
                            <td><strong><input type="number" class="form-control" name="total_presi" id="total_presi" min="0" required></strong></td>
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
<script type="text/javascript" src="scripts/actapresi.js"></script>
<?php 
}
ob_end_flush();
?>



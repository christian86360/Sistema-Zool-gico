<?php

require_once('../lib/pdf/mpdf.php');

$conn =new mysqli('localhost','root','','zologico');
$query="select zoo.nombre,especie.nombrecientifico,animal.sexo,animal.pais,animal.continente from zoo ,especie ,animal  where animal.continente='Africa'";
$prepare =$conn -> prepare($query);
$prepare->execute();
$resultSet=$prepare->get_result();
while($datos[]=$resultSet->fetch_array());
$resultSet->close();
$prepare->close();
$conn->close();





$html = '<header class="clearfix">
  <div id="logo">
    <img src="img/sloganZooleon.jpg">
  </div>
  <h1>Sistema de Zoologicos</h1>

</header>
<main>

  <table>
    <thead>
      <tr>
        <th class="service">Nombre Zoologicos</th>
        <th class="service">Nombre cientifico del animal</th>
        <th class="service">Sexo</th>
        <th class="service">Pais</th>
        <th class="service">Continente</th>

      </tr>
    </thead>
    <tbody>';
     //para recorer los datos
     foreach ($datos as $dato) {
    $html.= '<tr>
        <td class="service">'.$dato['nombre'].'</td>
        <td class="service">'.$dato['nombrecientifico'].'</td>
        <td class="service">'.$dato['sexo'].'</td>
        <td class="service">'.$dato['pais'].'</td>
        <td class="service">'.$dato['continente'].'</td>

      </tr>';
     }
    $html.='

    </tbody>
  </table>

  <div id="notices">
    <div>© 2017 Christian Lugo Marroquin</div>
    <div class="notice"></div>
  </div>
</main>';

                //para el tamaño de la hoja
$mpdf = new mPDF('c','A4');
$css= file_get_contents('css/style.css');
$mpdf->writeHTML($css,1);
$mpdf->writeHTML($html);

$mpdf->Output('reporte.pdf','I');





 ?>

<?php

    // Recuperando datos para el calculo
    $dimLargo     = str_replace(".",".",$_POST["inbox4"]);
    $dimAncho     = str_replace(".",".",$_POST["inbox5"]);
    $dimAlto      = str_replace(".",".",$_POST["inbox6"]);
    $indiceCiudad = $_POST["ciudad"];
    $tipo         = $_POST["tipo"];
    
    $potenciaTB = $dimLargo * $dimAncho * $dimAlto * $indiceCiudad;
    $potenciaMX = $potenciaTB * 0.84;
    $potenciaTN = $potenciaTB * 1.1;
       

    // **var_dump($potenciaTB,$potenciaMX,$potenciaTN);
    // exit; 


    $calefactoresTB = "";
    $calTB2 = "no";
    $calTB3 = "no";
    $calTB5 = "no";

    $sqlTB2 = "(id = 1 OR id = 4 OR id = 7 OR id = 10 OR id = 13 OR id = 16)";
    $sqlTB3 = "(id = 2 OR id = 5 OR id = 8 OR id = 11 OR id = 14 OR id = 17)";
    $sqlTB5 = "(id = 3 OR id = 6 OR id = 9 OR id = 12 OR id = 15 OR id = 18)";

    
    $calefactoresMX = "";
    $calMX3 = "no";
    $calMX5 = "no";
    $calMX8 = "no";

    $sqlMX3 = "(id = 21 OR id = 23 OR id = 26 OR id = 28 OR id = 30 OR id = 63)";
    $sqlMX5 = "(id = 20 OR id = 22 OR id = 24 OR id = 29 OR id = 31 OR id = 64)";
    $sqlMX8 = "(id = 25 OR id = 27)";

    
    $calefactoresTN = "";
    $calTN5 = "no";

    $sqlTN5 = "(id = 19)";


    // var_dump($potenciaTB);


    // Calefactores Tiro Balanceado

    if($potenciaTB >= 1 and $potenciaTB < 2000){
        
        $calefactoresTB = "1 Calefactor de 2000 kcal/h";
        $calTB2 = "si";

    }elseif($potenciaTB >= 2000 and $potenciaTB < 3000){

        $calefactoresTB = "1 Calefactor de 3000 kcal/h";
        $calTB3 = "si";
        
    }elseif($potenciaTB >= 3000 and $potenciaTB < 5000){

        $calefactoresTB = "1 Calefactor de 5000 kcal/h";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 5000 and $potenciaTB < 7000){

        $calefactoresTB = "1 Calefactor de 5000 kcal/h + 1 Calefactor de 2000 kcal/h";
        $calTB2 = "si";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 7000 and $potenciaTB < 8000){

        $calefactoresTB = "1 Calefactor de 5000 kcal/h + 1 Calefactor de 3000 kcal/h";
        $calTB3 = "si";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 8000 and $potenciaTB < 10000){

        $calefactoresTB = "2 Calefactores de 5000 kcal/h";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 10000 and $potenciaTB < 12000){

        $calefactoresTB = "2 Calefactores de 5000 kcal/h + 1 Calefactor de 2000 kcal/h";
        $calTB2 = "si";        
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 12000 and $potenciaTB < 13000){

        $calefactoresTB = "2 Calefactores de 5000 kcal/h + 1 Calefactor de 3000 kcal/h";
        $calTB3 = "si";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 13000 and $potenciaTB < 15000){

        $calefactoresTB = "3 Calefactores de 5000 kcal/h";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 15000 and $potenciaTB < 17000){

        $calefactoresTB = "3 Calefactores de 5000 kcal/h + 1 Calefactor de 2000 kcal/h";
        $calTB2 = "si";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 17000 and $potenciaTB < 18000){

        $calefactoresTB = "3 Calefactores de 5000 kcal/h + 1 Calefactor de 3000 kcal/h";
        $calTB3 = "si";
        $calTB5 = "si";        
        
    }elseif($potenciaTB >= 18000 and $potenciaTB < 20000){

        $calefactoresTB = "4 Calefactores de 5000 kcal/h";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 20000 and $potenciaTB < 22000){

        $calefactoresTB = "4 Calefactores de 5000 kcal/h + 1 Calefactor de 2000 kcal/h";
        $calTB2 = "si";
        $calTB5 = "si";
        
    }elseif($potenciaTB >= 22000 and $potenciaTB < 23000){

        $calefactoresTB = "4 Calefactores de 5000 kcal/h + 1 Calefactor de 3000 kcal/h";
        $calTB3 = "si";
        $calTB5 = "si";

    }elseif($potenciaTB >= 23000 and $potenciaTB < 25000){

        $calefactoresTB = "5 Calefactores de 5000 kcal/h";
        $calTB5 = "si";        
        
    }elseif($potenciaTB >= 25000){

        $calefactoresTB = "para este caso en particular, consulte a un Profesional";
        
    }    
    

    // 'Calefactores Miniconvex
    if($indiceCiudad < 60 AND $tipo == 2){

        if($potenciaMX >= 1 and $potenciaMX < 3300){

            $calefactoresMX = "1 Calefactor de 3000 kcal/h";
            $calMX3 = "si";
            
        }elseif($potenciaMX >= 3300 and $potenciaMX < 5000){

            $calefactoresMX = "1 Calefactor de 5000 kcal/h";
            $calMX5 = "si";
            
        }elseif($potenciaMX >= 5000 and $potenciaMX < 8000){

            $calefactoresMX = "1 Calefactor de 8000 kcal/h";
            $calMX8 = "si";
            
        }elseif($potenciaMX >= 8000 and $potenciaMX < 11000){

            $calefactoresMX = "1 Calefactor de 8000 kcal/h + 1 Calefactor de 3000 kcal/h";
            $calMX3 = "si";
            $calMX8 = "si";
                    
        }elseif($potenciaMX >= 11000 and $potenciaMX < 13000){

            $calefactoresMX = "1 Calefactor de 8000 kcal/h + 1 Calefactor de 5000 kcal/h";
            $calMX5 = "si";
            $calMX8 = "si";
            
        }elseif($potenciaMX >= 13000 and $potenciaMX < 16000){

            $calefactoresMX = "2 Calefactores de 8000 kcal/h";
            $calMX8 = "si";
            
        }elseif($potenciaMX >= 16000 and $potenciaMX < 19000){

            $calefactoresMX = "2 Calefactores de 8000 kcal/h + 1 Calefactor de 3000 kcal/h";
            $calMX3 = "si";
            $calMX8 = "si";
            
        }elseif($potenciaMX >= 19000 and $potenciaMX < 20000){

            $calefactoresMX = "4 Calefactores de 5000 kcal/h";
            $calMX5 = "si";
            
        }elseif($potenciaMX >= 20000){

            $calefactoresMX = "para este caso en particular, consulte a un Profesional";
            
          }
        }


    // Calefactores Tiro Natural
    if($tipo == 2) {
        
        if($potenciaTN >= 3000 and $potenciaTN < 5500){

            $calefactoresTN = "1 Calefactor de 5000 kcal/h";
            $calTN5 = "si";
        
        }elseif($potenciaTN >= 5500 and $potenciaTN < 11000){

            $calefactoresTN = "2 Calefactores de 5000 kcal/h";
            $calTN5 = "si";
        
        }elseif($potenciaTN >= 11000 and $potenciaTN < 16500){

            $calefactoresTN = "3 Calefactores de 5000 kcal/h";
            $calTN5 = "si";
        
        }elseif($potenciaTN >= 16500 and $potenciaTN < 20000){

            $calefactoresTN = "4 Calefactores de 5000 kcal/h";
            $calTN5 = "si";
        
        }elseif($potenciaTN >= 20000){

            $calefactoresTN = "para este caso en particular, consulte a un Profesional";
        
            }
        } 

  include("top.php");   
?>
<!--#include file ="top.inc"-->

<!--Make sure page contains valid doctype at the very top!-->
  
  <tr>
   <td>&nbsp;</td>   
   <td width="996" align="center" valign="top" style="padding:3px;" >

    <table align="center" width="990" cellpadding="0" cellspacing="0" >
    <tr>

     <td align="left" valign="top" style="padding-left:7px;padding-top:3px;padding-bottom:3px;" width="210" >

<!--#include file ="menu.inc"-->

	 </td>
     <td valign="top" width="780" align="left" height="360" style="padding:8px;" >
	 
<div align="left" >
<span class="tit2" >
RESULTADO DEL C&Aacute;LCULO DE BALANCE T&Eacute;RMICO
</span>
</div> 
    <br />
    <table align="center" width="760" cellpadding="0" cellspacing="0">
        <tr>
            <td width="8" height="46" style="background-color: #DF193A;" valign="top"></td>
            <td width="754" height="46" style="background-color: #EDEDED;">
                <p>
                    &nbsp;&nbsp;&nbsp;Dimensiones:
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Largo <b><?php echo $dimLargo; ?> Metros</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ancho <b><?php echo $dimAncho; ?> Metros</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alto <b><?php echo $dimAlto; ?> Metros</b>
                </p>
            </td>
            <td width="8" height="46" style="background-color: #DF193A;" valign="top"></td>
        </tr>
    </table>
    <br />
    <p style="font-size: 14px;"><img src="images/icon1.png" align="absmiddle" />Opci&oacute;n con Calefactores de Tiro Balanceado: <span style="color: #ff0000;"><?php echo $calefactoresTB?></span></a></p>
     <table align="center" width="760" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td valign="top" style="background-color: #EDEDED;" width="100%">
                <br />
                <ul class="productos">
                <?php

                    if($calTB5 == "si") {
                    
                        $strSQL = "select * from productos where ".$sqlTB5; 
        
                        $con = ConexionMySql();

                        $rq  = $con->query($strSQL);  

                        if ($rq) {
                            foreach ($rq as $key => $value) {
                            ?>
                             <li align="center">
                               <a href='balancetermico3.php?id=<?php echo $value["id"]?>&id_cat=<?php echo $value["id_cat"]?>&id_subcat=<?php echo $value["id_subcat"]?>&id_subcat3=<?php echo $value["id_subcat3"]?>'><img src='images/productos/<?php echo $value["imagen1"]?>.jpg' width="90" border="0" class="photo1"/></a>
                               <br/><b><?php echo $value["modelo2"]?></b>
                               <br/><img src="images/hline2.png"/>
                               <br/><span style="color: #ff0000"><b><?php echo $value["modelo"]?></b></span>
                               <?php /*  DebugMsg("Producto ID = " & value["id") & "<br/>" &_ "<a href='admin.qry.select.asp?title=ProdCatById&id=" & value["id") & "' >ver...</a><br/>" ) */ ?>
                             </li>
                            <?php    
                          }
                       }     
                    }
?>
                </ul>
                <ul class="productos">
<?php

                    if($calTB3 == "si") {
                    
                        $strSQL = "select * from productos where ".$sqlTB3; 
        
                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key6 => $value6) {
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value6["id"]; ?>&id_cat=<?php echo $value6["id_cat"]; ?>&id_subcat=<?php echo $value6["id_subcat"]; ?>&id_subcat3=<?php echo $value6["id_subcat3"]; ?>'><img src='images/productos/<?php echo $value6["imagen1"]; ?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value6["modelo2"]; ?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value6["modelo"]; ?></b></span>
                         </li>
                        <?php
                        }
                    }
                }
?>
                </ul>
                <ul class="productos">
<?php  
                    if($calTB2 == "si"){
                    
                        $strSQL = "select * from productos where ".$sqlTB2; 
        
                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key8 => $value8) {
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value8["id"];?>&id_cat=<?php echo $value8["id_cat"];?>&id_subcat=<?php echo $value8["id_subcat"];?>&id_subcat3=<?php echo $value8["id_subcat3"];?>'><img src='images/productos/<?php echo $value8["imagen1"];?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value8["modelo2"];?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value8["modelo"];?></b></span>
                         </li>
                        <?php
                        }
                    }
                }
?>
                </ul>
            </td>
            <td style="background-color: #EC2C45;"><?php espacio(8,1); ?></td>
            <td valign="bottom"><br /><br /><br /><img src="images/caption2.png" /></td>
        </tr>
     </table>
     <br />
     <table align="center" width="760" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td><img src="images/icon2.png" align="absmiddle"></td>
            <td>
                <p>Los modelos identificados como TB/TBU est&aacute;n disponibles en 2 opciones:<br />TB, para ventilaci&oacute;n horizontal a trav&eacute;s de una pared exterior o TBU, para ventilaci&oacute;n vertical a trav&eacute;s del techo.</p>
            </td>
        </tr>
     </table>
     <br />
     <div><img src="images/hline1.png" /></div>
<?php
    if($calMX3 == "si" OR $calMX5 == "si" OR $calMX8 == "si") {
?>
     <br />
     <p style="font-size: 14px;"><img src="images/icon1.png" align="absmiddle" />Opci&oacute;n con Calefactores Miniconvex (sin salida): <span style="color: #ff0000;"><?php echo $calefactoresMX?></span></a></p>
     <table align="center" width="760" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td valign="top" style="background-color: #EDEDED;" width="100%">
                <br />
                <ul class="productos">
<?php
                    if($calMX8 == "si") { 

                        $strSQL = "select * from productos where ".$sqlMX8; 

                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key5 => $value5) {  
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value5["id"];?>&id_cat=<?php echo $value5["id_cat"];?>&id_subcat=<?php echo $value5["id_subcat"];?>&id_subcat3=<?php echo $value5["id_subcat3"];?>'><img src='images/productos/<?php echo $value5["imagen1"];?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value5["modelo2"];?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value5["modelo"];?></b></span>
                         </li>
                        <?php
                        }
                    }
                }   
?>
                </ul>
                <ul class="productos">
<?php
                    if($calMX5 == "si") {
                    
                        $strSQL = "select * from productos where ".$sqlMX5; 

                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key4 => $value4) {  
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value4["id"];?>&id_cat=<?php echo $value4["id_cat"];?>&id_subcat=<?php echo $value4["id_subcat"];?>&id_subcat3=<?php echo $value4["id_subcat3"];?>'><img src='images/productos/<?php echo $value4["imagen1"];?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value4["modelo2"];?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value4["modelo"];?></b></span>
                         </li>
                        <?php
                        }
                    }
                }
?>
                </ul>
                <ul class="productos">
<?php
                     if($calMX3 == "si") {
                    
                        $strSQL = "select * from productos where ".$sqlMX3; 
        
                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key3 => $value3) {  
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value3["id"];?>&id_cat=<?php echo $value3["id_cat"];?>&id_subcat=<?php echo $value3["id_subcat"];?>&id_subcat3=<?php echo $value3["id_subcat3"];?>'><img src='images/productos/<?php echo $value3["imagen1"];?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value3["modelo2"];?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value3["modelo"];?></b></span>
                         </li>
                        <?php
                        }
                    }
                }    
?>
                </ul>
            </td>
            <td style="background-color: #EC2C45;"><?php echo espacio(8,1);?></td>
            <td valign="bottom"><br /><br /><br /><img src="images/caption3.png" /></td>
        </tr>
     </table>
<?php
    }
    
    if($calTN5 == "si") {
?>
     <br />
     <p style="font-size: 14px;"><img src="images/icon1.png" align="absmiddle" />Opci&oacute;n con Calefactores de Tiro Natural: <span style="color: #ff0000;"><?php echo $calefactoresTN?></span></a></p>
     <table align="center" width="760" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td valign="top" style="background-color: #EDEDED;" width="100%">
                <br />
                <ul class="productos">
                <?php
                
                    if($calTN5 == "si") {
                    
                        $strSQL = "select * from productos where ".$sqlTN5; 

                        $con = ConexionMySql();
                        $rq  = $con->query($strSQL);             
                        
                        if ($rq) {
                            foreach ($rq as $key2 => $value2) {  
                        ?>
                         <li align="center">
                           <a href='balancetermico3.php?id=<?php echo $value2["id"]; ?>&id_cat=<?php echo $value2["id_cat"]; ?>&id_subcat=<?php echo $value2["id_subcat"]; ?>&id_subcat3=<?php echo $value2["id_subcat3"]; ?>'><img src='images/productos/<?php echo $value2["imagen1"]; ?>.jpg' width=90 border=0 class="photo1"></a>
                           <br><b><?php echo $value2["modelo2"]; ?></b>
                           <br /><img src="images/hline2.png">
                           <br><span style="color: #ff0000"><b><?php echo $value2["modelo"]; ?></b></span>
                         </li>
                        <?php  
                        }
                    }
                }    
                ?>
                </ul>
            </td>
            <td style="background-color: #EC2C45;"><?php echo espacio(8,1);?></td>
            <td valign="bottom"><br /><br /><br /><img src="images/caption4.png" /></td>
        </tr>
     </table>
     <br />
<?php
    }
    
?>	 

<?php /*?>
    <p>El resultado de este Balance T&eacute;rmico le da una idea aproximada de cu&aacute;les pueden ser las opciones que Eskabe tiene disponible para satisfacer sus necesidades de calefacci&oacute;n. Para lograr un Balance T&eacute;rmico m&aacute;s preciso, sugerimos consultar a un profesional.</p>
    <br />
    <div><a href="index.php"><img src="images/button3.png"></a></div>
       <br />
        <hr style="height:1px;border:1px dotted #ED1C24;">  <?php  */ ?>
     </td> 
    </tr>
    </table>
   </td>
   <td height="100%" >&nbsp;</td>
  </tr>
    
<!--#include file ="footer.inc"-->  

<?php 
 include("footer.php");   

function ConexionMySql(){

    try{
        $con = new PDO('mysql:host=sql209.eshost.com.ar;dbname=eshos_20359598_formulario','eshos_20359598','123456');    
        // $con = new PDO('mysql:host=sql203.eshost.com.ar;dbname=eshos_20286963_eskabe','eshos_20286963', 'cocom1ke');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
        exit;
    }

    return $con;
}



function espacio($w,$h) {

    return '<img src="images/spacker.gif" width="'.$w.'" height="'.$h.'">';

}


?>
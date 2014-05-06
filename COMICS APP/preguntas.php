<?php
//EN EL ID DE CADA dl COLOCAMOS q- SEGUIDO POR EL NUMERO DE LA PREGUNTA, ESTO ES PARA SABER EN QUE PREGUNTA VAMOS
//CADA RESPUESTA SERA ALGO PARECIDO, TENDRA UN ID r- SEGUIDO POR EL NUMERO DE LA RESPUESTA
//LA CLASE QUE TIENE EL dl, SERA PARA INDICAR CUANTAS PREGUNTAS DEBEN SER SELECCIONADAS ANTES DE CONTINUAR
echo 'aqui '.$_REQUEST['q'];
 
if ($_GET['q']==1){?>
<dl id="q-1" class="n[3]">
    <dt>Pregunta 1: <b>Selecciona 3 colores:</b></dt> 
    <dd id="r-1">Rojo</dd>
    <dd id="r-2">Verde</dd> 
    <dd id="r-3">Azul</dd> 
    <dd id="r-4">Amarillo</dd> 
    <dd id="r-5">Negro</dd>
    <dd id="r-6">Naranja</dd> 
</dl>
<?php }elseif($_GET['q']==2) {?>
<dl id="q-2" class="n[1]">
    <dt>Pregunta 2: <b>Que lenguaje de programacion te gusta mas?</b></dt> 
    <dd id="r-1">JAVA</dd>
    <dd id="r-2">PHP</dd> 
    <dd id="r-3">ASP</dd> 
    <dd id="r-4">C</dd> 
</dl>
<?php }?>
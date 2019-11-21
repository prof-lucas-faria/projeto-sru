<h1>Quantidade de Refeição Por Curso</h1>
<br>

<?php 
$dataHoraI = $_POST['dataHoraI'];
$dataHoraI = date("d/m/y H:i:s", strtotime($dataHoraI));
$dataHoraF = $_POST['dataHoraF'];
$dataHoraF = date("d/m/y H:i:s", strtotime($dataHoraF));
?>

<h3>Período: <?php echo ($dataHoraI);?> à <?php echo ($dataHoraF);?></h3>
<br><br>


<?php
foreach($listagem as $lista){

        
    echo "{$lista->curso}";?>
    
    <div align="rigth">  
    
        <?php echo "{$lista->qtde}";?> 

        <br>
    </div>
    
    <?php
}
?>
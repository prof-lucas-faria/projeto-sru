<h1>Quantidade Total de Refeição do Período</h1>
<br>

<?php 
$dataHoraI = $_POST['dataHoraI'];
$dataHoraI = date("d/m/y H:i:s", strtotime($dataHoraI));
$dataHoraF = $_POST['dataHoraF'];
$dataHoraF = date("d/m/y H:i:s", strtotime($dataHoraF));
?>

<h3>Período: <?php echo ($dataHoraI);?> à <?php echo ($dataHoraF);?></h3>
<br>

<?php 
foreach($listagem as $lista){  
    echo "Quantidade Total de Refeição do Período  {$lista->qtde}";                   
                
    }
?>
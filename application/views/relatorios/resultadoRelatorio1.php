<h1>Quantidade de Alunos Por Gênero</h1>
<br>

<?php 
$dataHoraI = $_POST['dataHoraI'];
$dataHoraI = date("d/m/y H:i:s", strtotime($dataHoraI));
$dataHoraF = $_POST['dataHoraF'];
$dataHoraF = date("d/m/y H:i:s", strtotime($dataHoraF));
?>

<h2>Período: <?php echo ($dataHoraI);?> à <?php echo ($dataHoraF);?></h2>
<br>

<?php
foreach($listagem as $lista){
    if($lista->genero =='F')
            echo "Feminino {$lista->qtde}";
            ?> <br /> <?php
            
    if($lista->genero =='M')            
            echo "Masculino {$lista->qtde}";
}
?>
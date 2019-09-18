<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> Listagem de Colaboradores</title>
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">        
    </head>
    
    <body>
        <div class="container">            
            <div class="row">
                 <h1>Lista de Colaboradores</h1>
                
                 <table class="table table-bordered">
                     
                     <thead>
                         <tr>
                             <th class="text-center">Colaboradores</th>
                             <th class="text-right">Perfil</th>
                         </tr>
                     </thead>
                     
                     <?php
                     $contador = 0;
                     
                     foreach ($AcessoRestrito as $colaboradores) {
                     echo '<tr>';
                     echo '<td>'.$AcessoRestrito->nomeColaborador.'</td>';
                     echo '</td>';
                     echo '</tr>';
                     $contador++;
                     }
                     ?>                   
                     
                 </table>
                 
                 <div class="row">
                     <div class="col-md-12">
                         Total de registros: <?php echo $contador ?>
                     </div>
                 </div>
                
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
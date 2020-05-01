<?php

include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Table -->
     <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Imóveis</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">CEP</th>
                   

                    <th scope="col">Ação</th>
                    
                  </tr>
                </thead>
                <tbody>
               
                    <?php 
                        include 'conexao/conexao.php';
                        $sql = 'SELECT * FROM imovel';
                        $busca = $conexao->query($sql);
                        
                        while($dados = mysqli_fetch_array($busca)){
                            $codigo = $dados['codigo_imovel'];
                            $valor = $dados['valor_imovel'];
                            $bairro = $dados['bairro_imovel'];
                            $cep = $dados['cep_imovel'];
                            $idimovel = $dados['id_imovel'];
                           
                           
                           
                                        
                    ?>
                     <tr>
                            <td><?php echo $codigo    ?></td> 
                            <td><?php echo $valor     ?></td> 
                            <td><?php echo $bairro    ?></td> 
                            <td><?php echo $cep       ?></td>  
                            <td>
                                <a href="editar_status.php?id=<?php echo $idimovel ?>" role="button" class="btn btn-primary">Editar
                                <a href="ver_status.php?id=<?php echo $idimovel ?>" role="button" class="btn btn-info">Ver
                                <a href="remover_status.php?id=<?php echo $idimovel ?>" role="button" class="btn btn-danger">Remover</td> 
                          
                    </tr>   
                                
                     <?php } ?>
                    

                </tbody>
              </table>
            </div>
            
</body>
</html>
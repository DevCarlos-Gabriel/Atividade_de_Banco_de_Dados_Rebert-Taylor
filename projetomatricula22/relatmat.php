<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Listagem Matrículas</title>
<link rel="stylesheet" href="estilo.css" type="text/css">	
</head>
<body>





                                    <table width="100%"><thead>
											
											<tr>
												<th colspan="100%">RELATÓRIO DE MATRÍCULAS</th>
											</tr>
											
											
											<tr >
										
										<th width="5%" scope="col">ID MAT</th>
										<th width="5%" scope="col">ID CURSO</th>
										<th width="5%" scope="col">ID ALUNO</th>
										<th width="5%" scope="col">ID USUÁRIO</th>
										<th>DATA</th>
										<th>HORA</th>
										
										
									 </tr>
									 
									 </thead>
									 <tbody>
									 <?php
									           include 'banco.php';
						 			   
																				   
											   $sql =  " select * from tbmatriculas";
											   
											   //executa o comando sql
											   $consulta = $conexao->query($sql);
											   
											   //testar se deu certo o comando
											   if($consulta){
												 //verificando se existe o usuario
												 if($consulta->num_rows > 0){
													//convertendo a consulta num array
													while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
													    echo '<tr>
																<td>'.$linha['codmat'].'</td>
																<td>'.$linha['codmat'].'</td>
																<td>'.$linha['codaluno'].'</td>
																<td>'.$linha['codusu'].'</td>
																<td>'.$linha['data'].'</td>
																<td>'.$linha['hora'].'</td>
															  </tr>';
													}
												 }
											   }
									 ?>
									 
				
									
										
										
								  
								
							</table>
					  </body>
</html>

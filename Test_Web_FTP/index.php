<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Servidor FTP</title>
	<link rel="stylesheet" href="CSS/style_sheet.css">
</head>
<body class="bg">
	<header>
		<h1>Servidor FTP SGLP</h1>	
	</header>
	


	<table >
        
        <thead class="tf">
          <tr">  
            <th scope="col" class="br-tr"><span>Files</span></th>
            <th class="br-tr"><span>Descargar</span></th>
          </tr>
        </thead>

        <tbody>
    <?php
			require 'funcionesFTP.php';

			$list = tablaFTP();
		
			do{
				$arrFile = current($list);
              	echo "	
              	<tr>
                    <td><span>" .$arrFile. "</span></td>
                    <td> <a href= 'descargar.php?file=" .$arrFile. " '><img src= Imagenes/salvar.png> </a></td>
                </tr>";

                /**/
      } while(next($list))
		?>
        </tbody>
          
      </table>

</body>
</html>
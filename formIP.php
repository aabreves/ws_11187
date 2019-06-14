<?php
   if ( isset( $_REQUEST[ "textIP" ] ) ){
      $sCurrIP = $_REQUEST[ "textIP" ];
   }
   else{
      $sCurrIP = "217.114.22.150/24";
   }

?>
<!DOCTYPE html>
<html lang="pt-br">
   <head> <!-- TODO DOCUMENTO HTML TEM UM <head> -->
      <meta charset="UTF-8"/>
      <meta name="description"
            content="Free Web tutorials"/>
      <meta name="keywords"
            content="HTML,CSS"/>
      <meta name="author"
            content="Alessandro Breves"/>
      <meta name="viewport"
            content="width=device-width, initial-scale=1.0"/>
      <title>webstandards 11187</title>

      <link rel="stylesheet" 
            type="text/css" 
            href="css/forms.css" />

      <style>
      </style>
   </head>
   <body> <!-- TODO DOCUMENTO HTML TEM UM <body> -->
      <form id="formIP"
            name="formIP"
            action="formIP.php"
            method="GET"> <!-- GET ou POST -->

         <div id="divInputs-1"
              class="divInputs">
            <label id="labelIP"
                   for="textIP">IP:</label><br />
            <input id="textIP"
                   name="textIP"
                   type="text"
                   placeholder="Digite aqui o endereço de IP"
                   value="<?=$sCurrIP;?>"
                   required
                   title="Nome do usuário"/><br />
            
            <input id="submitSend"
                   type="submit"
                   value="Calcular" />
         </div> <!-- <div id="divInputs-1"> -->

         <div id="divResults"
              class="divInputs">
            <?php               
               if ( isset( $_REQUEST[ "textIP" ] ) ){
                  $textIP = $_REQUEST[ "textIP" ];
                  list( $sIP, $sCIDR ) = explode( "/", $textIP );
                  $aiOctetos_dec = explode( ".", $sIP );
                  
                  foreach ( $aiOctetos_dec as $iOcteto_dec ){
                     $aiOctetos_bin[] = sprintf( "%08s", decbin( $iOcteto_dec ) );
                     $aiOctetos_hex[] = dechex( $iOcteto_dec );
                  }
                  
                  echo "full: $textIP<br />";
                  echo "  ip: $sIP<br />";
                  echo "cidr: $sCIDR<br />";
                  echo "<pre>".print_r( $aiOctetos_dec, true )."</pre>";
                  echo "<pre>".print_r( $aiOctetos_hex, true )."</pre>";
                  echo "<pre>".print_r( $aiOctetos_bin, true )."</pre>";
               }
            ?>
         </div>

      </form>
      <script type='text/javascript'>
         //selectComboBox.selectedIndex = -1;
      </script>
   </body>
</html>










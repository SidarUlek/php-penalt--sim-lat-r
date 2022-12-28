<?php   
    echo '<p><center><img src="https://i.hizliresim.com/87txvfi.PNG" width="600" height="275" ></center></p>';
    $kaleci = rand(1,3);
    
    if ($_POST) {
        $sol = @$_POST["sol"];
        $orta = @$_POST["orta"];
        $sag = @$_POST["sag"];
    
    if ($sol) {
        //sol
        $oyuncu = 1;
    } elseif ($orta) {
        //orta
        $oyuncu = 2;
    } elseif ($sag) {
        //sağ
        $oyuncu = 3;
    }

    if($kaleci==1 && $oyuncu==1) {
        #Kaleci Sola Top Sola
        echo '<p><b><center>Kaleci penaltıyı çıkardı, İnanılmaz bir kurtarış! Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/3gspz8g.png" width="800" height="275" ></center></p>';
    } elseif ($kaleci==1 && $oyuncu==2) {
        #Kaleci Sola Top ORtaya
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/dq36sux.png" width="800" height="275" ></center></p>';
    } elseif ($kaleci==1 && $oyuncu==3) {
        #Kaleci Sola Top Sağa
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/5xlupdl.png" width="800" height="275" ></center></p>';
    }

    if($kaleci==2 && $oyuncu==2) {
        #Kaleci Ortada Top Ortaya
        echo '<p><b><center>Kaleci penaltıyı çıkardı, İnanılmaz bir kurtarış! Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/4229r05.png" width="800" height="275" ></center></p>';
        
    } elseif ($kaleci==2 && $oyuncu==1) {
        #Kaleci Ortada Top Sola
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/e3hrs2a.png" width="800" height="275" ></center></p>';
    } elseif ($kaleci==2 && $oyuncu==3) {
        #Kaleci Ortada Top Sağa
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/si2cv5o.png" width="800" height="275" ></center></p>';
    }

    if($kaleci==3 && $oyuncu==3) {
        #Kaleci Sağda Top SAğda
        echo '<p><b><center>Kaleci penaltıyı çıkardı, İnanılmaz bir kurtarış! Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/2xumjki.png" width="800" height="275" ></center></p>';
    } elseif ($kaleci==3 && $oyuncu==1) {
        #Kaleci SAğda Top Sola
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/eomr435.png" width="800" height="275" ></center></p>';
    } elseif ($kaleci==3 && $oyuncu==2) {
        #Kaleci Sağda Top Ortada
        echo '<p><b><center>GOOOLL! Kaleciyle Top Ayrı Köşelerde... Bir sonraki atışı kullanmak için tekrardan köşe seçmelisin! </center></p>';
        echo '<p><center><img src="https://i.hizliresim.com/c6o4n7n.png" width="800" height="275" ></center></p>';
    }
}
?>
<style> 
    body {background:green;}
</style>

<form action="" method="post" style="text-align: center" >
        <input type="hidden" name="_token" value="güvenlik için">
        <input type="submit" name="sol" value="Sol">
        <input type="submit" name="orta" value="Orta">
        <input type="submit" name="sag" value="Sağ">
</form>
     

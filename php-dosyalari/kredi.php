<?php
session_start();
if(!isset($_SESSION["uye_id"])){
	header("location:/girisyapmalisin/");
}

	include ('../ayarlar/ayar.php');

	include ('../head.php');

?>
<body>
	<?php
		include('../logo.php');
	?>
    <div id="wrapper">
		<?php
			include ('../header.php');
		?>
        <div id="sol">
            <div class="icBaslik"><div class="icBaslikYazi"><i class="fa fa-try fa-3x"></i><font size="6"> <a href="../kredi/">KREDİ YÜKLE</a></font></div></div>
            <div class="ic">
				
                <center>
                <br>
                <?php if (empty($_GET['m'])) {?>
                <a href="kredi/kart/"><img src="../img/kredi-karti.png"></a>
				<br><br><br>
				<a href="kredi/mobil/"><img src="../img/mobil-odeme.png"></a>
                <?php }elseif ($_GET['m'] == "kart") {?>
                <table class="kredi-yukle-table" style="table-layout: fixed; width: 100%;">
                    <tr>
                        <th>
                            <font face="Roboto Condensed" size="5">Lütfen yüklemek istediğiniz krediyi yazınız.</font><br><br>
                            <form class="kredi-yukle-form" action="http://batigame.com/vipgateway/viprec.php" method="post">
                                <input type="hidden" name="odemeturu" value="kredikarti" />
                                    Yüklenecek Kredi:<br>
                                    <input style="margin-top: 4px; min-width: 218px;" type="text" name="amount" required class="form-control" placeholder="1 ila 100 TL arasında miktar giriniz." />
                                    <br><br>Yüklenecek Hesap:<br>
                                    <input required style="margin-top: 4px; min-width: 218px;" type="text" class="form-control" name="oyuncu" value="<?php echo $oyuncu_oku["username"] ?>">
                                    <input required type="hidden" name="odemeolduurl" value="<?php echo $site_url ?>/basarili/">
                                    <input required type="hidden" name="odemeolmadiurl" value="<?php echo $site_url ?>/basarisiz/">
                                    <input required type="hidden" name="vipname" value="kredi">
                                    <input required type="hidden" name="raporemail" value="<?php echo $batihost_email ?>">
                                    <input required type="hidden" name="onlyemail" value="<?php echo $batihost_email ?>">
                                    <input required type="hidden" name="posturl" value="<?php echo $site_url ?>/kredi/odeme/kart/">
                                    <input required type="hidden" name="batihostid" value="<?php echo $batihost_id ?>">
                                    <br><button name="kredi-yukle" style="margin-top: 12px;" type="submit" class="button-example-1 button-example-green"><font face="Roboto Condensed" size="4">Kredi Yükle</font></button>
							</form>
                        </th>
                </table>
                <?php }elseif ($_GET['m'] == "mobil") {?>
                	<table class="kredi-yukle-table" style="table-layout: fixed; width: 100%;">
                    <tr>
                        <th>
                            <font face="Roboto Condensed" size="5">Lütfen yüklemek istediğiniz krediyi yazınız.</font><br><br>
                            <form class="kredi-yukle-form" action="http://batigame.com/vipgateway/viprec.php" method="post">
                                    Yüklenecek Kredi:<br>
                                    <input style="margin-top: 4px; min-width: 218px;" type="text" name="amount" required class="form-control" placeholder="1 ila 100 TL arasında miktar giriniz." />
                                    <br><br>Yüklenecek Hesap:<br>
                                    <input required style="margin-top: 4px; min-width: 218px;" type="text" class="form-control" name="oyuncu" value="<?php echo $oyuncu_oku["username"] ?>">
                                    <input required type="hidden" name="odemeolduurl" value="<?php echo $site_url ?>/basarili/">
                                    <input required type="hidden" name="odemeolmadiurl" value="<?php echo $site_url ?>/basarisiz/">
                                    <input required type="hidden" name="vipname" value="kredi">
                                    <input required type="hidden" name="raporemail" value="<?php echo $batihost_email ?>">
                                    <input required type="hidden" name="onlyemail" value="<?php echo $batihost_email ?>">
                                    <input required type="hidden" name="posturl" value="<?php echo $site_url ?>/kredi/odeme/kart/">
                                    <input required type="hidden" name="batihostid" value="<?php echo $batihost_id ?>">
                                    <br><button name="kredi-yukle" style="margin-top: 12px;" type="submit" class="button-example-1 button-example-green"><font face="Roboto Condensed" size="4">Kredi Yükle</font></button>
							</form>
                        </th>
                </table>
               <?php } ?>
                    <br />
                <font face="Roboto Condensed" size="4" color="#FF0000">*Ödemelerde asla geri iade yapılamaz.</font>
                <br>
                <br>
                </center>
				
            </div>
        </div>
		<?php

			include ('../right.php');

		include ('../footer.php');
		
	?>
    </div>
</body>
</html>

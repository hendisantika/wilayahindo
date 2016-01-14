<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Data seluruh wilayah indonesia dari mulai provinsi, kabupaten, kecamatan dan desa. By : http://kang-cahya.com" />
	<meta name="author" content="Cahya Dyazin" />

	<title>Wilayah Indonesia</title>
	<link rel="icon" type="image/png" href="<?php echo $path; ?>/favicon.png">
	<script src="<?php echo $path; ?>/jquery.min.js"></script>
	<script>
        $(document).ready(function(){
            $("#provinsi").change(function (){
                var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
                $('#kabupaten').load(url);
                return false;
            })
			
			$("#kabupaten").change(function (){
                var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
                $('#kecamatan').load(url);
                return false;
            })
			
			$("#kecamatan").change(function (){
                var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
                $('#desa').load(url);
                return false;
            })
        });
    </script>

	</head>
	<body align="center">
		<h1>Data Seluruh wilayah di indonesia</h1>
		<form action="" method="post" id="myForm" onSubmit="show_alert();">
		<p>Provinsi :</p>
		<select name="prov" class="form-control" id="provinsi">
			<option>- Select Provinsi -</option>
			<?php foreach($provinsi as $prov){
				echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
			} ?>
		</select>
		
		<p>Kabupaten :</p>
		<select name="kab" class="form-control" id="kabupaten">
			<option value=''>Select Kabupaten</option>
		</select>
		
		<p>Kecamatan :</p>
		<select name="kec" class="form-control" id="kecamatan">
			<option>Select Kecamatan</option>
		</select>
		
		<p>Desa :</p>
		<select name="des" class="form-control" id="desa">
			<option>Select Desa</option>
		</select>
		<input type="submit" name="submit" value="Kirim">
			</form>
		<br><br><br>
		<p>Hasilnya : </p>
		<?php echo "Nama Provinsi : "; ?> <br>
		<?php echo "Nama Kabupaten : "; ?> <br>
		<?php echo "Nama Kecamatan : "; ?> <br>
		<?php echo "Nama Desa : ";?>
		<?php 
				if (isset($_POST["submit"])) {
					$id       = $prov->id;
			echo "ID :  $id";    
		}else{  
			echo "N0, mail is not set";
		} ?>
		<br><br><br>
		
		<!--
		<hr>
		<footer>2015 | Codeigniter 3 | By, <a href="http://kang-cahya.com" rel="dofollow">Cahya Dyazin</a></footer>
		-->
		<footer>2015 | Codeigniter 3.0.3</footer>
	</body>
</html>
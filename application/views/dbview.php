		<div class="content">
			<h1>Database Tipuan</h1>
			<?php
			if($dbs!=null){
				$i=0;
				foreach($dbs as $db): 
					if ($db['id']!='') {?>
					<div class="data-personal">				
						<p>Nama : <?php echo $db['fullname'];?> ( <?php echo $db['nickname'];?> )</p>
						<p>Kelas : <?php echo 'X '.$db['x']." | XI ".$db['xi']." | XII ".$db['xii'];?></p>
						<p>Alamat : <?php echo $db['alamat_asal'];?></p>
						<p>No. HP : <?php echo $db['hp1'].' | '.$db['hp2'];?></p>
						<p>Email : <?php echo $db['email1'];?></p>
					</div>
				<?php }
				$i+=1;
				endforeach;?>
				<?php 
			} else {?>
				<div class="not-found">
					<p>Maafkan kami yang gagal menemukan datanya</p>
				</div>
			<?php } ?>
			<p><a href="<?php echo site_url('database/'); ?>"><< Back</a></p>
		</div>			
	</body>
</html>

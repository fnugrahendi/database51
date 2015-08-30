		<div class="content">
			<h1 id="judul">Database Tipuan</h1>
			<?php
			if($dbs!=null){
				$i=0;
				foreach($dbs as $db): 
					if ($db['id']!='') {?>
					<div class="data-personal">				
						<table>
							<tr><td>Nama</td><td class="titikdua">:</td><td><?php echo $db['fullname'];?> ( <?php echo $db['nickname'];?> )</td></tr>
							<tr><td>Kelas</td><td class="titikdua">:</td><td><?php echo 'X '.$db['x']." | XI ".$db['xi']." | XII ".$db['xii'];?></td></tr>
							<tr><td>Alamat</td><td class="titikdua">:</td><td><?php echo $db['alamat_asal'];?></td></tr>
							<tr><td>No. HP</td><td class="titikdua">:</td><td><?php echo $db['hp1'].' | '.$db['hp2'];?></td></tr>
							<tr><td>Email</td><td class="titikdua">:</td><td><?php echo $db['email1'];?></td></tr>
						</table>
						<p>
							<a href="<?php echo site_url('database/'); ?>">
								<button type="button" class="btn btn-default">Back</button>
							</a>
							<a href="#">
								<button type="button" class="btn btn-default">Edit</button>
							</a>
						</p>
				<?php }
				$i+=1;
				endforeach;?>
				<?php 
			} else {?>
				<div class="not-found">
					<p>Maafkan kami yang gagal menemukan datanya</p>
				</div>
			<?php } ?>
			</div>
		</div>			
	</body>
</html>

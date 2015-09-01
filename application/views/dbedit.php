		<div class="content">
			<h1 id="judul">Database Tipuan</h1>
			<?php
			if($dbs!=null){
				$i=0;
				foreach($dbs as $db): 
					if ($db['id']!='') {?>
					<div class="data-personal edit">				
						<table>
							<?php echo form_open('Database/save');?>
							<?php echo form_hidden('id', $db['id']); ?>
							<tr><td>Nama</td><td class="titikdua">:</td><td><?php echo form_input(array('name'=>'nama', 'value'=>$db['fullname']));?> ( <?php echo form_input(array('name'=>'nama-pgl', 'value'=>$db['nickname'], 'id'=>'nickname'));?> )</td></tr>
							<tr><td>Kelas</td><td class="titikdua">:</td><td><?php echo 'X '.form_input(array('name'=>'x', 'value'=>$db['x'], 'id'=>'kelas'))." | XI ".form_input(array('name'=>'xi', 'value'=>$db['xi'], 'id'=>'kelas'))." | XII ".form_input(array('name'=>'xii', 'value'=>$db['xii'], 'id'=>'kelas'));?></td></tr>
							<tr><td>Alamat</td><td class="titikdua">:</td><td><?php echo form_input(array('name'=>'alamat', 'value'=>$db['alamat_asal']));?></td></tr>
							<tr><td>No. HP</td><td class="titikdua">:</td><td><?php echo form_input(array('name'=>'hp1', 'value'=>$db['hp1'])).' | '.form_input(array('name'=>'hp2', 'value'=>$db['hp2']));?></td></tr>
							<tr><td>Email</td><td class="titikdua">:</td><td><?php echo form_input(array('name'=>'email', 'value'=>$db['email1']));?></td></tr>
						</table>
						<p>
							<?php echo form_submit('savedata', 'Simpan', array('class'=>'btn btn-default'));
								  echo form_close(); ?>
							<a href="<?php echo site_url('database/'.$db['id']); ?>">
								<button type="button" class="btn btn-default">Batal</button>
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

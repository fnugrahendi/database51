		<div class="content">
			<h1>Hello Brow</h1>
			<?php
			if($dbs!=null){
				$i=0;
				foreach($dbs as $db): 
					if ($db['id']!='') {?>
					<div class="data-personal">				
						<p>Nama : <?php echo $db['fullname'];?></p>
						<p>Panggilan : <?php print_r($db['nickname']);?></p>
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

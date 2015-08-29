		<div class="content">
			<h1>Hello Brow</h1>
			<?php
			if($oke!=null){?>
					<div class="data-personal">				
						<p>NIS yang menyerupai : </p>
						<p><?php echo $oke;?></p>
					</div>
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

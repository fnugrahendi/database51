		<div class="content">
			<h1>Hello Brow</h1>
			<?php $i=0;
			foreach($dbs as $db): 
				if ($db['id']!=''):?>
				<div class="data-personal">				
					<p>Nama : <?php echo $db['fullname'];?></p>
					<p>Panggilan : <?php print_r($db['nickname']);?></p>
				</div>
			<?php 
				endif;	
			$i+=1;
			endforeach;?>
		</div>			
	</body>
</html>

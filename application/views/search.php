		<div class="content">
			<h1>Hello Brow</h1>
			<p>Masukkan NIS alumni yang dicari</p>
			<?php
				echo form_open('Database/cari');
				echo form_input(array('name'=>'nis', 'id'=>'usernis'));
				echo form_submit('submitnis', 'Cari');
			?>
		</div>			
	</body>
</html>

		<div class="content">
			<h1 id="judul">Hello Brow</h1>
			<p>Masukkan NIS alumni yang dicari</p>
			<?php
				echo form_open('Database/cari');
				echo form_input(array('name'=>'nis', 'id'=>'usernis'));
				echo form_submit('submitnis', 'Cari');
				echo form_close();
			?>
		</div>			
	</body>
</html>

		<div class="content">
			<h1 id="judul">Database Tipuan</h1>
			<p>Masukkan nama alumni yang dicari</p>
			<?php
				echo form_open('Database/cari');
				echo form_input(array('name'=>'nis', 'id'=>'usernis'));
				echo form_submit('submitnis', 'Cari');
				echo form_close();
			?>
		</div>			
	</body>
</html>

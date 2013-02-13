<div id="cnt">
	<form method="post" action="log/record">
		<div><label>Choose Category : </label>
			<select name="sCat">
				<?php foreach ( $cats as $cat ): ?>
					<option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
				<?php endforeach; ?>
			</select>
			or <label>Add new Category : </label>
			<input type="text" name="itCat" class="it" /></div>
		<div>
		</div>
		<div><textarea name="tLog"></textarea></div>
		<div><input type="submit" class="is" value="Submit"/></div>
	</form>
</div>
		
<!-- End of file show.php -->
<!-- Location: ./application/views/log/show.php -->
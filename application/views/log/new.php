<div id="cnt">
	<form method="post" action="log/create">
		<div><label>Choose Category : </label>
			<select name="cat">
				<?php foreach ( $cats as $cat ): ?>
					<option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
				<?php endforeach; ?>
			</select>
			or <label>Add new Category : </label>
			<input type="text" name="newcat" class="it" /></div>
		<div>
		</div>
		<div><textarea name="log"></textarea></div>
		<div><input type="submit" class="is" value="Submit"/></div>
	</form>
</div>

<!-- End of file new.php -->
<!-- Location: ./application/views/log/new.php -->
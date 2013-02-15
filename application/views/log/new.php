<div id="cnt">
	<?php echo form_open('log/create'); ?>
		<div class='cat'>
			<div>
				<label>Choose Category : </label>
				<select name="cat">
					<?php foreach ( $cats as $cat ): ?>
						<option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
					<?php endforeach; ?>
				</select>
				or <label>Add new Category : </label>
				<input type="text" name="newcat" class="it" />
			</div>
		</div>
		<div><textarea name="log" id="log"></textarea></div>
		<div><input type="submit" class="is" value="Add"/></div>
	</form>
	<div><a class="bttn" href="<?php echo site_url('log'); ?>">Cancel</a></div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		tinyMCE.init({
			theme : "advanced", mode : "exact", elements: "log", plugins : "codesyntax",
			theme_advanced_buttons1_add : "codeformat",
			theme_advanced_buttons3 : ""
		});
	});
</script>
<!-- End of file new.php -->
<!-- Location: ./application/views/log/new.php -->
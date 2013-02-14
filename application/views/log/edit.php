<div id="cnt">
    <?php echo form_open('log/update/' . $log['id']); ?>
        <div><label>Choose Category : </label>
            <select name="cat">
                <?php foreach ( $cats as $cat ): ?>
                    <option value="<?php echo $cat; ?>" <?php echo $log['category'] == $cat ? 'SELECTED' : ''; ?>><?php echo $cat; ?></option>
                <?php endforeach; ?>
            </select>
            or <label>Add new Category : </label>
            <input type="text" name="new_cat" class="it" /></div>
        <div>
        </div>
        <div>
            <textarea name="log"><?php echo $log['log']; ?></textarea>
        </div>
        <div><input type="submit" class="is" value="Update"/></div>
    </form>
    <?php echo form_open('log/destroy/' . $log['id']); ?>
        <div><input type="submit" class="is" value="Delete"/></div>
    </form>
    <div><a class="bttn" href="<?php echo site_url('log'); ?>">Cancel</a></div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        tinyMCE.init({theme : "simple", mode : "exact", elements: "log"});
    });
</script>

<!-- End of file edit.php -->
<!-- Location: ./application/views/log/edit.php -->
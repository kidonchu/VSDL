<div id="cnt">
    <?php echo form_open('log/update/' . $log['id']); ?>
        <div><label>Choose Category : </label>
            <select name="cat" value="<?php echo $log['category']; ?>">
                <?php foreach ( $cats as $cat ): ?>
                    <option value="<?php echo $cat; ?>"><?php echo $cat; ?></option>
                <?php endforeach; ?>
            </select>
            or <label>Add new Category : </label>
            <input type="text" name="newcat" class="it" /></div>
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
</div>

<!-- End of file edit.php -->
<!-- Location: ./application/views/log/edit.php -->
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/update'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />
    <input type="hidden" name="slug" value="<?php echo $slug; ?>">

    <input type="submit" name="submit" value="Update news item" />

</form>
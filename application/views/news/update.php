<h2><?php echo $title; ?></h2>

<h2><?php echo $title; ?></h2>

<a href="<?php echo site_url('News/delete/'.$edit_item['slug']) ?>" style="color: red;">Delete Here</a>
<?php echo validation_errors(); ?>

<?php echo form_open('News/update'); ?>

    <label for="title">Title</label>
    <input type="text" name="title" placeholder="<?php echo $edit_item['title']; ?>" value = "<?php echo $edit_item['title']; ?>" /><br />

    <label for="text">Text</label>
    <textarea name="text"><?php echo $edit_item['text']; ?></textarea><br />

    <label for="slug">Slug</label>
    <input name="slug" type="text" placeholder="<?php echo $edit_item['slug']; ?>" value = "<?php echo $edit_item['slug']; ?>" /><br />

    <input type="hidden" name="theId" value = "<?php echo $edit_item['id']; ?>">

    <input type="submit" name="submit" value="Create news item" />

</form>

<br><br>


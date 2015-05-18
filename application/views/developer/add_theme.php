<?php echo $error;?>
<?php echo form_open_multipart('developer/theme/add');?>
Theme Name : 
<input type="text" name="name" />
<br /><br />
Theme Desc : 
<textarea name="desc"> </textarea>
<br /><br />
Theme Price : 
<input type="text" name="price" />
<br /><br />
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
<form enctype='multipart/form-data' action='' method='POST'>
    <input type="file" name="file">
    <input type=submit name='submitbutton' value='Submit'>
</form>
<!-- MIME 类型的文件上传 -->
<?php 
    $files = @$_FILES['file'];
    
    if(isset($files)){
        echo "MIME type: ";
        echo print_r($files['type']);
        echo '</br>';
        
        if($files['type'] !== 'image/png')
        {
            die('ERROR TYPE');
        }
        
        $tmpfile = $files['tmp_name'];
        
        $target_file = './uploads/'.$files['name'];
        move_uploaded_file($tmpfile, $target_file);
        
        echo 'The upload file address: ', $target_file;
    }
?>
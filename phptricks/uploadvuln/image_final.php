<form enctype='multipart/form-data' action='' method='POST'>
    <input type="file" name="file">
    <input type=submit name='submitbutton' value='Submit'>
</form>

<?php
    $files = @$_FILES['file'];

    if(isset($files)){
        echo "MIME type: ";
        echo print_r($files['type']);
        echo '</br>';

        $phppos = strpos($files['name'], '.php');
        if($phppos){
            die('ERROR FILENAME');
        }

        if($files['type'] !== 'image/jpg'
            && $files['type'] !== 'image/jpeg'
            && $files['type'] !== 'image/png'
            && $files['type'] !== 'image/gif')
        {
            die('ERROR TYPE');
        }

        $tmpfile = $files['tmp_name'];

        $target_file = './uploads/'.$files['name'];

        if(imagecreatefromgif($tmpfile) || imagecreatefromjpeg($tmpfile)
            || imagecreatefrompng($tmpfile))
        {
            echo 'FILE CONTENT RIGHT';
        }
        else
        {
            die('ERROR FILE CONTENT');
        }
        move_uploaded_file($tmpfile, $target_file);

        echo 'The upload file address: ', $target_file;
    }
?>

<?php
//check to see if the form is submitted
if(isset($_POST["submit"])){
    if(!empty($_FILES['upload']['name'])){
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
        print_r($_FILES); //will display array of file dets
        //to get those dets we can add them to vars
        $file_name = $_FILES['upload']['name'];
        //get file ext
        $file_ext = explode('.', $file_name); //to seperatie the file name when find a dot
        //to get the end of it "png"
        $file_ext = end($file_ext);
        echo $file_ext; 
        //validate file extension
        if(in_array($file_ext, $allowed_ext)){
            if($file_size <= 100000000){
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style ="color: green;"> file uploaded</p>';
            }else{
                $message = '<p style ="color: red;">file is too large</p>';
            }
        }else{
            $message = '<p style ="color: red;"> Invalid file type</p>';
        }
    }else{
        $message = '<p style ="color: red;"> Please choose a file</p>';
    }
    //must create upload folder for the above to work
    
}
/*we click on choose file to choose file
from our pc then w click the submit button
if we click submit wout uploading a file it will
display "please choose a file"
if a file choosen it will display it's contents
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" 
    method="POST" enctype="multipart/form-data"></form>
    enctype used if we're uploading a file 
    Select image to upload:
    <input type="file" name="upload">
    <input type="submit" value="submit" name="submit">    
</body>
</html>
<?

$uploads_dir = '/opt/lampp/htdocs/SoukLemdina/web/uploads/images';

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    $dest = $_FILES['userfile'] ['name'];
    $dest = uniqid().".jpg";
    move_uploaded_file($_FILES['userfile'] ['tmp_name'], "$uploads_dir/$dest");
    if (isset($_GET['old']))
        unlink($uploads_dir."/".$_GET['old']);
    chmod("$uploads_dir/$dest",0777);
    echo "$dest";
} else {
    echo "Possible file upload attack: ";
    echo "filename '" . $_FILES['userfile']['tmp_name'] . "'.";
    print_r($_FILES);
}

?>
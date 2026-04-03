<?php
move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
echo "File uploaded successfully!";
echo "Uploaded file: " . $_FILES['file']['name'];
echo "<a href='uploads/" .$_FILES['file']['name'] . "' download><button>Download File</button></a>";
?>
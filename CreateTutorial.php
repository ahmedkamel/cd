<?php

    session_start();

    if(!isset($_SESSION['user_id']))
    {
        $_SESSION['error_tip'] = 'You should login to access this page';
        header("Location: SignIn.php");
    }
    else
    {
    $error_tip = "";
    $error_message = "";
    $header = "";
    if(isset($_SESSION['error_tip']) == 1)$error_tip = $_SESSION['error_tip'];
    if(isset($_SESSION['error_message']) == 1)$error_message = $_SESSION['error_message'];
    
    $title = "New Tutorial";
    $content_title = "New Tutorial";
    $content = '

        <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            toolbar2: "print preview media | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: "Test template 1", content: "Test 1"},
                {title: "Test template 2", content: "Test 2"}
            ]
        });
        </script>

        <form method="post" action="somepage">
            <textarea name="content" style="width:100%; height:400px"></textarea></br>
            <input value="Submit" type="submit" name="button" class="button" id="submit"/>
        </form>



    ';
    
    $_SESSION['error_tip'] = "";
    $_SESSION['error_message'] = "";
    }
    
    include 'Template/MainTemplate.php';

?>
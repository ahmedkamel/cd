<?php
    session_start();
    
    $error_message = '';
    $error_tip = '';
    $title = "OPC Calendar";
    $content_title = 'OPC Calendar';
    $content = '
    <iframe src="http://www.google.com/calendar/embed?src=hb26migjl0dktrssgdg5ocedoo%40group.calendar.google.com&amp;ctz=Africa/Cairo"
        mce_src="http://www.google.com/calendar/embed?src=hb26migjl0dktrssgdg5ocedoo%40group.calendar.google.com&amp;ctz=Africa/Cairo"
        style="border: 0" mce_style="border: 0" width="720" height="600" frameborder="0" scrolling="no">
            
    </iframe>
    <script>var LINK = "calendarLINK";</script>
    ';
	    
    include 'Template/MainTemplate.php';
?>
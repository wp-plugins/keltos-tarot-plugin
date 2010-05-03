<?php
/*
Plugin Name: Keltos
Plugin URI: http://mark.indigoblues.ca
Description: A Celtic Cross Reading plugin using the Rider-Waite Deck
Version: 1.0
Author: Mark W. Law
Author URI: http://mark.indigoblues.ca
License: GPL2

Copyright 2010  Mark W. Law  (email : mark.w.law@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
function keltos_widget($args) {
	
	$headimage = plugins_url( 'keltos/images/rider-waite.jpg');

extract($args);
        $title = apply_filters('widget_title', empty($instance['title']) ? 'Keltos Tarot' : $instance['title']);

        echo $before_widget;
        if ( $title )
            echo $before_title . $title . $after_title;

echo"<form action='http://spirit.indigoblues.ca/keltos/1keltoscross.php' method='post' target='_blank'><br>";	
echo"<table align=center border='0' cellpadding='4'><tr><td align=center>";
echo"<img src='".$headimage."' width=40><br>";
//echo"<b>Keltos Tarot</b><br>";
echo"Your Name:<br>";
echo"<input type='text' name='yourname' size=10><br>";
echo"Your Question:<br>";
echo"<textarea name='yourquestion' rows='2' cols='10'></textarea>";
echo"<input type='hidden' name='deck' value='riderwaite' size=15>";
echo"<br>";
echo"<div align='center'><input type='submit' value='*Click*'></div>";
echo"<small>More at <a href='http://spirit.indigoblues.ca' target='_blank'>Spirit Speaks!</a></small>";

 echo"</td></tr></table>";	
echo"</form>";	
}
 
function init_keltos(){
	register_sidebar_widget("Keltos", "keltos_widget");     
}
 
add_action("plugins_loaded", "init_keltos");
 ?>

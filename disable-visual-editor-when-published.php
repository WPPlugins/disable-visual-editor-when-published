<?php
/*
Plugin Name: Disable Visual Editor When Published
Plugin URI: https://wordpress.org/plugins/disable-visual-editor-when-published/
Description: This plugin allows the visual editor for drafts, and then reemoves the visual editor (regardless of user settings) when content is published.
Version: 1.0.2
Author: Jeremy Weathers
Author URI: http://www.codekindly.com/

    Copyright 2015 Jeremy Weathers

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

function jw_dvewp_get_post_status() {
  // strategy of finding post derived from
  // https://wordpress.org/plugins/disable-visual-editor-wysiwyg/
  global $parent_file;
  if( strpos( $parent_file, 'edit.php' ) !== 0 ){
    return false;
  }
  if( isset($_GET['post']) && !empty($_GET['post']) ){
    return get_post_status( $_GET['post'] );
  }
  return false;
}

function jw_dvewp_user_can_richedit ($current_value) {
  if ('publish' == jw_dvewp_get_post_status()) {
    return false;
  }
  return $current_value;
}

add_filter('user_can_richedit', 'jw_dvewp_user_can_richedit', 50);
// I found the concept of using this filter from
// http://wpsnipp.com/index.php/functions-php/disable-the-visual-editor-for-posts-and-pages/

?>
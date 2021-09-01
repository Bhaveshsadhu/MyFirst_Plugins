<?php
/*
Plugin Name: MyFirst_Plugins
Description: Welcome to WordPress plugin development.
Plugin URI:  https://plugin-planet.com/
Author:      Bhavesh sadhu
Version:     1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/

*/

function check_if_page() {
    $ln_video="";
    $fetchVideos = "/videos/Waterfall.mp4";
    $video_width = "100%";
    $video_hight = "100%";
    $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";


    if(isset($_POST['Hindi'])) {
        $ln_video= "This is Hindi video</br>";
        $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['English'])) {
            $ln_video= "This is English video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language1'])) {
            $ln_video = "This is Language1 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language2'])) {
            $ln_video = "This is Language2 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language3'])) {
            $ln_video = "This is Language3 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language4'])) {
            $ln_video = "This is Language4 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language5'])) {
            $ln_video = "This is Language5 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language6'])) {
            $ln_video = "This is Language6 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language7'])) {
            $ln_video = "This is Language7 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
        if(isset($_POST['Language8'])) {
            $ln_video = "This is Language8 video</br>";
            $fetchVideos = "http://localhost/brinfotech/wp-content/uploads/2021/08/Waterfall.mp4";
            $ln_video .= "<video src='".$fetchVideos."' controls width='".$video_width."' height='".$video_hight."' ></video></br> ";
        }
      
      $fullstring= '<html>
      <head>
      <style>
      input[type=submit] {
        padding:5px 15px; 
        background:#ccc; 
        border:0 none;
        
        border-radius: 5px; 
    }
      </style>
      </head>
      <body>
      <div style="max-width:100%">
      <form method="post">
      '.$ln_video.'
      <input type="submit" name="Hindi" class="button" value="Hindi"/>
      <input type="submit" name="English" class="button" value="English"/>
      <input type="submit" name="Language1" class="button" value="Language1"/>
      <input type="submit" name="Language2" class="button" value="Language2"/>
      <input type="submit" name="Language3" class="button" value="Language3"/>
      <input type="submit" name="Language4" class="button" value="Language4"/>
      <input type="submit" name="Language5" class="button" value="Language5"/>
      <input type="submit" name="Language6" class="button" value="Language6"/>
      <input type="submit" name="Language7" class="button" value="Language7"/>
      <input type="submit" name="Language8" class="button" value="Language8"/>
  </form>
  </div>
  </body>
 </html>';
 return $fullstring;
  }
  //add_filter('the_content','check_if_page');

  function myShortCode()
  {
      return add_filter('the_content','check_if_page');
      //return "hi bhavesh";
  }
  add_shortcode( 'Bhavesh', 'check_if_page' );
  ?>


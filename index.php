<?php
// *HW


// * Video thumbnail

function videoThumbnail($vidUrl){
    $api ="https://img.youtube.com/vi/%3Cinsert-youtube-video-id-here%3E/maxresdefault.jpg";

$mainUrl = explode('?si=', $vidUrl);
$videoArray = explode("/", $mainUrl[0]);
$videoId = end($videoArray);

$link = str_replace("%3Cinsert-youtube-video-id-here%3E",$videoId,$api);
 echo"<img src='$link'>";
}

videoThumbnail("https://youtu.be/NoCCIzP4y7A?si=k3f1lBHaTi99V76R");
videoThumbnail("https://youtu.be/zVwDzhLp8Bs?si=XXT9PyhCeRZuTFjd");
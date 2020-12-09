
<!--<video id="canvas" src="http://localhost:8888/e7Tnwu4d_video.mp4"></video>-->
<?php
$ffmpeg = '/usr/local/bin/ffmpeg';
$video = '../uploads/video/16054339258447_video.mp4';
$second = 1;
$cmd = "$ffmpeg -i $video 2>&1";
if (preg_match('/Duration: ((\d+):(\d+):(\d+))/s', `$cmd`, $time)) {
	$total = ($time[2] * 3600) + ($time[3] * 60) + $time[4];
	$second = rand(1, ($total - 1));
}
$cmd = shell_exec("$ffmpeg -i $video -ss 00:00:01.000 -vframes 1 abc.png");

//$cmd = shell_exec("$ffmpeg -i $videoName -vcodec h264 -acodec aac -strict -2 uploads/video/yeniformat.mp4");

//$cmd = shell_exec("$ffmpeg -i $videoName -c copy uploads/video/$newVideoName.mp4");

//$cmd = shell_exec("$ffmpeg -i $video -vcodec h264 -acodec aac -strict -2 images/aramak.mp4");

$return = `$cmd`;
echo print_r($return);
?>
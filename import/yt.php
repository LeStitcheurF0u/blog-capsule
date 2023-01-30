<?php

require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$apiKey = $_ENV['GOOGLE_API_KEY'];
$channelID = $_ENV['YOUTUBE_CHANNEL_ID'];
$maxResults = 4;

$url = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=" . $channelID . "&maxResults=" . $maxResults . "&order=date&type=video&key=" . $apiKey;

$result = file_get_contents($url);



$videoList = json_decode($result);

foreach ($videoList->items as $video) {

    $idVideo = $video->id->videoId;
    $title = $video->snippet->title;
    $description = $video->snippet->description;
    $image = $video->snippet->thumbnails->high->url;
    $date = $video->snippet->publishedAt;
?>

    <article class="video">
        <div class="imgbox">
            <div class="img">
                <img src="<?= $image; ?>" alt="<?= $title; ?>">
                <div class="playButton">
                    <a href="https://www.youtube.com/watch?v=<?= $idVideo; ?>" data-lity>
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="details">
            <h3 class="title"><?= $title ?></h3>
        </div>

    </article>

<?php
}

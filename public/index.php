<?php
require __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

$randomOffset = random_int(1, 1439);
$addOrSub     = ['add', 'sub'][random_int(0, 1)];
$time         = Carbon::now()->{$addOrSub . 'Minutes'}($randomOffset);
?>
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wrong Time Clock</title>
  <style>@font-face {
      font-family: 'Fugaz One';
      font-style: normal;
      font-weight: 400;
      src: local("Fugaz One"), local("FugazOne-Regular"), url(https://fonts.gstatic.com/s/fugazone/v6/foh--NswBHNPbRHy7yEyyJBw1xU1rKptJj_0jans920.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215
    }

    html, body {
      color: #34323c;
      font-family: 'Fugaz One', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0
    }

    .full-height {
      height: 100vh
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center
    }

    .content {
      text-align: center
    }

    .title {
      font-size: 50px
    }</style>
  <div class="flex-center full-height">
    <div class="content">
      <span>The time is not…</span>
      <div class="title">
        <span><?php echo $time->format('l jS \\of F Y<b\r>g:i:s A') ?></span>
      </div>
      <div>
        <small>…it's actually <?php echo \Carbon\Carbon::now()->diffForHumans($time) ?> that!</small>
      </div>
    </div>
  </div>
</html>

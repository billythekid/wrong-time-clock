@spaceless
        <!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wrong Time Clock</title>
<link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet" type="text/css">
<style>html,body{color:#34323c;font-family:'Fugaz One', sans-serif;font-weight:100;height:100vh;margin:0}.full-height{height:100vh}.flex-center{align-items:center;display:flex;justify-content:center}.content{text-align:center}.title{font-size:50px}</style><div class="flex-center full-height">
    <div class="content">
        <span>The time is not…</span>
        <div class="title">
            <span>{!! $time->format('l jS \\of F Y <b\r>h:i:s A') !!}</span>
        </div>
        <div>
            <small>…it's actually {{ \Carbon\Carbon::now()->diffForHumans($time) }} that!</small>
        </div>
    </div>
</div>
</html>
@endspaceless
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./jqwidgets/jqxcore.js"></script>
<script src="./jqwidgets/jqxbuttons.js"></script>
<script src="./tss_15_remote.js"></script>
<link href="./tss_15_remote.css" rel="stylesheet" type="text/css">
<title>TSS-15 リモコン</title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->
<body>

<div class="main" align="center">

	<div>
		<h1>YAMAHA</h1>
		<h2>TSS-15 WD76690</h2>
	</div>
	
	<div style="width: 400px; height: 110px;">
		<div class="button_content_buttons">
			<button id="mode">モード</button>
		</div>
		<div class="button_content_buttons">
			<button id="power" style="background: tomato;">電源</button>
		</div>
	</div>

	<div>
		<h2>CINEMA DSP</h2>
	</div>
		
	<div style="width: 800px; height: 110px;">
		<div class="button_content_buttons">
			<button id="movie" class="cinemadsp">ムービー</button>
		</div>
		<div class="button_content_buttons">
			<button id="music" class="cinemadsp">ミュージック</button>
		</div>
		<div class="button_content_buttons">
			<button id="sports" class="cinemadsp">スポーツ</button>
		</div>
		<div class="button_content_buttons">
			<button id="game" class="cinemadsp">ゲーム</button>
		</div>
	</div>

	<div>
		<h2>音量</h2>
	</div>
		
	<div style="width: 600px; height: 110px;">
		<div class="button_content_buttons">
			<button id="volume_down">-</button>
		</div>
		<div class="button_content_buttons">
			<button id="mute">消音</button>
		</div>
		<div class="button_content_buttons">
			<button id="volume_up">+</button>
		</div>
	</div>

	<div>
		<h2>スピーカーレベル</h2>
	</div>
		
	<div style="width: 600px; height: 280px;">
		<div class="button_content_buttons">
			<button id="woofer_volume_up">+</button>
		</div>
		<div class="button_content_buttons">
			<button id="center_volume_up">+</button>
		</div>
		<div class="button_content_buttons">
			<button id="surround_volume_up">+</button>
		</div>
		<div class="button_content_buttons" style="height: 50px;">
			<h3>ウーファー</h3>
		</div>
		<div class="button_content_buttons" style="height: 50px;">
			<h3>センター</h3>
		</div>
		<div class="button_content_buttons" style="height: 50px;">
			<h3>サラウンド</h3>
		</div>
		<div class="button_content_buttons">
			<button id="woofer_volume_down">-</button>
		</div>
		<div class="button_content_buttons">
			<button id="center_volume_down">-</button>
		</div>
		<div class="button_content_buttons">
			<button id="surround_volume_down">-</button>
		</div>
	</div>

	<div>
		<h2>その他</h2>
	</div>
	
	<div style="width: 600px; height: 110px;">
		<div class="button_content_buttons">
			<button id="night_listening">ナイト<br>リスニング</button>
		</div>
		<div class="button_content_buttons">
			<button id="test">テスト</button>
		</div>
		<div class="button_content_buttons">
			<button id="multiplex">多重音声</button>
		</div>
	</div>

	<div>
		<h2>入力切り替え</h2>
	</div>
	
	<div style="width: 800px; height: 110px;">
		<div class="button_content_buttons">
			<button id="input1">1</button>
		</div>
		<div class="button_content_buttons">
			<button id="input2">2</button>
		</div>
		<div class="button_content_buttons">
			<button id="input3">3</button>
		</div>
		<div class="button_content_buttons">
			<button id="input4">4</button>
		</div>
	</div>

</div>

</body>
</html>
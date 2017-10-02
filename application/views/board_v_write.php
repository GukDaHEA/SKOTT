<!DOCTYPE html>
<html>
<head>

	<title>
		리뷰 작성 페이지 
	</title>
</head>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style type="text/css">

	.background {
		padding-top: 10px;
		width: 800px;
		margin: auto;
	}
	.btn {
		position: relative;
		float: right; 
		right : 7%;
	}
	.text_subject {
		margin-left: 3%;
	}

	.text_textarea {
		margin-left: 3%;
		width : 90%;
	}

	/* 
		별점 스타일
	*/
	/*!
/*!
 * Progress with CSS variables
 * Copyright Stas "melnik909" Melnikov (https://stas-melnikov.ru)
 * Licensed under the MIT license
 */
/* declaration variables  for demo */
:root {
  --displayError: none;
  --displayDemo: block;
  --bgColor: #F8BBD0;
  --color: #C2185B;
}

/* setting a basic font size */
@media screen and (min-width: 981px) {
  html {
    font-size: 62.5%;
  }
}
@media screen and (min-width: 641px) and (max-width: 980px) {
  html {
    font-size: 9px;
  }
}
@media screen and (max-width: 640px) {
  html {
    font-size: 8px;
  }
}
body {
  font-family: -apple-system, BlinkMacSystemFont, "Roboto", "Open Sans", "Helvetica Neue", "Segoe UI", sans-serif;
  font-size: 1.6rem;
  margin: 0;
  -webkit-overflow-scrolling: touch;
  background-color: #f0f0f0;
}
   
a {
  color: #C2185B;
}

/* styles for layout */
.content {
  min-height: 100vh;
  padding-bottom: 8rem;
  box-sizing: border-box;
  position: relative;
}

.main-container {
  min-width: 100px;
  max-width: 800px;
  padding-top: 6rem;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  padding-left: 1rem;
  padding-right: 1rem;
}

.melnik909 {
  margin-left: 2rem;
}

.demo {
  display: none;
  display: var(--displayDemo);
}

/* control-panel */
.control-panel {
  display: flex;
  justify-content: center;
  margin-bottom: 8rem;
}

@media screen and (max-width: 640px) {
  .control-panel {
    flex-direction: column;
    align-items: center;
  }
}
.control-panel__item {
  display: flex;
  align-items: center;
  margin-right: 2%;
}

@media screen and (max-width: 640px) {
  .control-panel__item {
    margin-top: 5rem;
  }

  .control-panel__item:first-child {
    margin-top: 0;
  }
}
.control-panel__hint {
  font-weight: 700;
  margin-right: .5rem;
}

#green:checked ~ .demo {
  --bgColor: #C8E6C9;
  --color: #388E3C;
}

/* switch */
.switch {
  position: absolute;
  top: 0;
  left: -9999px;
}

/* range */


.range::-webkit-slider-runnable-track {
  cursor: pointer;
  background-color: var(--bgColor);
  border: none;
}

input[type="range"]::-webkit-slider-thumb {
  width: 2rem;
  height: 2rem;
  transform: translateY(-5%);
  background-color: var(--color);
  border-radius: 50%;
  appearance: none;
  border: none;
}
/*
 * progress styles
 */
/* core styles */
:root {
  --cssuiProgressHeight: 2rem;
}

.cssui-progress__bar {
  appearance: none;
  border: none;
  display: block;
  height: var(--cssuiProgressHeight);
  background-color: var(--cssuiProgressBgColor);
  color: var(--cssuiProgressColor);
}
.cssui-progress__bar[value]::-webkit-progress-bar {
  background-color: var(--cssuiProgressBgColor);
}
.cssui-progress__bar[value]::-webkit-progress-value {
  background-color: var(--cssuiProgressColor);
  transition: width .4s ease-out;
}
.cssui-progress__bar[value]::-moz-progress-bar {
  background-color: var(--cssuiProgressColor);
}

/* styles for demo */
.cssui-progress__bar {
  width: 85%;
  margin-right: auto;
  margin-left: auto;
  --cssuiProgressBgColor: var(--bgColor);
  --cssuiProgressColor: var(--color);
  --cssuiProgressHeight: 5px;
}

.cssui-progress__value {
  font-weight: 700;
  font-size: 2rem;
  margin-top: 1rem;
  display: inline-block;
}
.title {
  margin: 0 0 3rem;
  font-size: 3rem;
  font-weight: 300;
}

</style>
<body>
	


	<form method="post" enctype="multipart/form-data" action="/board_c/board_v_write/<?php echo $url ?>" class="background">
<h1> 리뷰 쓰기 </h1> <br>	
		<input type="text" name="board_subject" placeholder="제목" class = "text_subject" style="width: 500px;text-indent:5px;"> <br> <hr>
		<textarea name="board_contents" placeholder="내용" class = "text_textarea" rows="18" cols="108" style="text-indent: 10px;padding-top: 20px; background-color: #eaf1f7;" ></textarea> <br><br>
		<input type="file" name="user_upload_file" />
		<input type="submit" name="board_submit" class = "btn btn-primary" value = "작 성" style="background-color:#4d7e2b; width: 100px;"> 
		
		<div class="main-container">
      <input type="radio" id="green" class="switch" checked>
			<div class="demo">
				<h1 class="title">별점을 매겨주세요 !</h1>
				<div class="control-panel">
					<div class="control-panel__item">
						<input class="range js-value-progress" name="star" type="range" min="0" max="5" step="0" value="0">
					</div>
				</div>
				<div class="cssui-progress js-progress">
					<progress class="cssui-progress__bar js-progress__bar" max="5" value="0"></progress>
					<span class="js-progress__value cssui-progress__value">0 점</span>
				</div>
			</div>
		</div>
	</form>

	<!-- 별점 기능 -->
	<script>
		(function(){

			var progress = document.querySelector(".js-progress"),
			progressBar = progress.querySelector(".js-progress__bar"),
			progressValue = progress.querySelector(".js-progress__value");

			document.querySelector(".js-value-progress").addEventListener("change", function(){

				progressBar.value = this.value;
				progressValue.textContent = this.value + " 점";

			});

		})();
	</script>
<!-- 	<script src="/static/ckeditor/ckeditor.js"></script>
	<script>
		//textarea를 ckeditor로 대체
		CKEDITOR.replace('board_contents', {
			'filebrowserUploadUrl':'/board_c/board_v_write_ok'
		});
	</script> -->


</body>
<!-- <script type="text/javascript">
		function board_search_enter(form) {
			var keycode = window.event.keyCode;
			if(keycode == 13) $("#board_submit").click();
		}
</script> -->



</html>

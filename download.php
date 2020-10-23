<html>
    <head>
        <meta charset="utf-8">
        <title>download</title>
          <style>
  /*全局设置*/
  html, body {
    margin: 0;
    padding: 0;
  }
  body::-webkit-scrollbar { display: none}
  p {
    margin: 0;
  }
  [v-cloak] {
    display: none;
  }
  #m-app {
    height: 100%;
    width: 100%;
    text-align: center;
    padding: 10px 50px 80px;
    box-sizing: border-box;
  }
  .m-p-action {
    margin: 20px auto;
    max-width: 1100px;
    width: 100%;
    font-size: 35px;
    text-align: center;
    font-weight: bold;
  }
  .m-p-other, .m-p-github {
    position: fixed;
    right: 50px;
    bottom: 70px;
    background-color: #eff3f6;
    background-image: linear-gradient(-180deg, #fafbfc, #eff3f6 90%);
    color: #24292e;
    border: 1px solid rgba(27, 31, 35, .2);
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    line-height: 20px;
    padding: 6px 12px;
    z-index: 99;
  }
  .m-p-help {
    position: fixed;
    right: 50px;
    top: 50px;
    width: 30px;
    height: 30px;
    color: #666666;
    z-index: 2;
    line-height: 30px;
    font-weight: bolder;
    border-radius: 50%;
    border: 1px solid rgba(27, 31, 35, .2);
    cursor: pointer;
    background-color: #eff3f6;
    background-image: linear-gradient(-180deg, #fafbfc, #eff3f6 90%);
  }
  .m-p-github:hover, .m-p-other:hover, .m-p-help {
    opacity: 0.9;
  }
  .m-p-other {
    bottom: 30px;
  }
  /*顶部信息录入*/
  .m-p-temp-url {
    padding-top: 50px;
    padding-bottom: 10px;
    width: 100%;
    color: #999999;
    text-align: left;
    font-style: italic;
    word-break: break-all;
  }
  .m-p-input-container {
    display: flex;
  }
  .m-p-input-container input {
    flex: 1;
    margin-bottom: 30px;
    margin-right: 12px;
    display: block;
    width: 280px;
    padding: 16px;
    font-size: 24px;
    border-radius: 4px;
    box-shadow: none;
    color: #444444;
    border: 1px solid #cccccc;
  }
  .m-p-input-container div {
    position: relative;
    display: inline-block;
    height: 60px;
    line-height: 60px;
    font-size: 24px;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid #eeeeee;
    background-color: #3D8AC7;
    opacity: 1;
    transition: 0.3s all;
  }
  .m-p-input-container div:last-child {
    margin-left: 10px;
  }
  .m-p-input-container div:hover {
    opacity: 0.9;
  }
  .m-p-input-container div {
    width: 200px;
  }
  .m-p-input-container .disable {
    cursor: not-allowed;
    background-color: #dddddd;
  }
  /*下载状态*/
  .m-p-line {
    margin: 20px 0 50px;
    vertical-align: top;
    width: 100%;
    height: 5px;
    border-bottom: dotted;
  }
  .m-p-tips {
    width: 100%;
    color: #999999;
    text-align: left;
    font-style: italic;
    word-break: break-all;
  }
  .m-p-tips p {
    width: 100px;
    display: inline-block;
  }
  .m-p-segment {
    text-align: left;
  }
  .m-p-segment .item {
    display: inline-block;
    margin: 10px 6px;
    width: 50px;
    height: 40px;
    color: white;
    line-height: 40px;
    text-align: center;
    border-radius: 4px;
    cursor: help;
    border: solid 1px #eeeeee;
    background-color: #dddddd;
  }
  .m-p-segment .finish {
    background-color: #0ACD76;
  }
  .m-p-segment .error {
    cursor: pointer;
    background-color: #DC5350;
  }
  .m-p-cross, .m-p-final {
    display: inline-block;
    width: 100%;
    height: 50px;
    line-height: 50px;
    font-size: 20px;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid #eeeeee;
    background-color: #3D8AC7;
    opacity: 1;
    transition: 0.3s all;
  }
    .m-p-cros, .m-p-final {
    display: inline-block;
    width: 100%;
    height: 50px;
    line-height: 50px;
    font-size: 20px;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid #eeeeee;
    background-color: green;
    opacity: 1;
    transition: 0.3s all;
  }
  .m-p-final {
    margin-top: 10px;
    text-decoration: none;
  }
  .m-p-force, .m-p-retry {
    position: absolute;
    right: 50px;
    display: inline-block;
    padding: 6px 12px;
    font-size: 18px;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    border: 1px solid #eeeeee;
    background-color: #3D8AC7;
    opacity: 1;
    transition: 0.3s all;
  }
  .m-p-retry {
    right: 250px;
  }
  .m-p-force:hover, .m-p-retry:hover {
    opacity: 0.9;
  }
  .red{
      color: red;
  }
  .ttt{
      background-color: #ff7701;
      font-size: 26px;
      
  }
  div{
  	word-break: break-all; 
	word-wrap: break-word;
  }

  </style>
    
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.js"></script>
    </head>
    <body>
        <div style="width:75%;margin-right: auto;margin-left: auto;text-align:margin-left;">
        <br><br> <br><br>
        <div class="m-p-action g-box">执行完成</div> 
        <br><br>

<!-------------------------------------------------------------------------------------------------------->
        
        <?php
        $a=$_POST["url"];
        $b=$_POST["fname"];
        if($a.trim(" ")==""||$b.trim(" ")==""){
            echo('<div class="m-p-cross">链接与文件名不能为空!</div>');
        }elseif (!strstr($a,"m3u8")&&strstr($a,"http")) {
            echo("<div class='m-p-cross>未识别为有效的m3u8链接</div>");
        }elseif (!(strstr($b,'.mp4')||strstr($b,'.ts')||strstr($b,'.mov'))) {
            echo("<div class='m-p-cross'>文件名需包含后缀</div>");
        }else{
            $cmd='python fDM.py '. $a . ' ' . $b;
            system($cmd);

        }?>
        
    
        
<!------------------------------------------------------------------------------------------------        -->
        <br><br><br>
            <div class='m-p-cros'>下载任务执行完毕！</div>
            <div class='ttt'>
            输出链接 <br><?php echo $_POST["url"] ?> <br><br>
            输出文件名<?php echo '     '. $_POST["fname"] ?><br>
            </div>  
        </div>
    </body>
</html>





<!DOCTYPE html>
<html>
  <head>
    <title>자바스크립트</title>
    <meta charset="utf-8">
    <meta name="author" content="egoing">
    <style>
        h1{border-bottom:1px solid gray; padding: 20px;}
        ul{border-right:1px solid gray; width:139px; float:left; height:300px;}
        #article{padding-left:20px; float:left; width:400px;}
        .white {
          background-color: white;
        }
        .black {
          background-color: black;
        }
    </style>
  </head>
  <body id="target" class="white">
    <h1><a href="index.html">JavaScript</a></a></h1>
    <ul>
      <li><a href="index.php?id=1">html</a></li>
      <li><a href="index.php?id=2">css</a></li>
      <li><a href="index.php?id=3">자바스크립트</a></li>
    </ul>
    <div id="article">
      <input type="button" value="White" onclick="document.getElementById('target').className='white';">
      <input type="button" value="Black" onclick="document.getElementById('target').className='black';">
      <?php
        if($_GET['id'] == '1') {
          print('<h2>HTML</h2>');
          print('HTML is....');
        } else if($_GET['id'] == '2') {
          print('<h2>CSS</h2>');
          print('CSS is....');
        } if($_GET['id'] == '3') {
          print('<h2>JavaScript</h2>');
          print('JavaScript is....');
        }
       ?>
  </div>
  </body>
</html>

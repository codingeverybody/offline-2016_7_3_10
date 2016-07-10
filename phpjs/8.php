<html>
  <body>
    <h1>배열</h1>
    <h2>JavaScript</h2>
    <ul>
    <script>
      var students = ['진혁','유빈', '이람', '이은', '두루'];
      var i = 0;
      while(i<students.length){
        document.write('<li>');
        document.write(students[i]);
        document.write('</li>');
        i = i + 1;
      }
    </script>
    </ul>
    <h2>PHP</h2>
    <ul>
    <?php
    $students = ['진혁','유빈', '이람', '이은'];
    $i = 0;
    while($i<count($students)){
      print('<li>');
      print($students[$i]);
      print('</li>');
      $i = $i + 1;
    }
    ?>
    </ul>
  </body>
</html>

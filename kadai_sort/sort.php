<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      function sort_2way($array, $order) {
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        
        if ($order === 1) {
          echo '昇順にソートします。<br>';

          sort($nums);
          foreach ($nums as $array) {
            echo $array . '<br>';
          }
        }
        else {
          echo '降順にソートします。<br>';

          rsort($nums);
          foreach ($nums as $array) {
            echo $array . '<br>';
          }
        }
      }
      sort_2way(0, 1);
      sort_2way(0, 0);
      ?>
    </p>
  </body>

</html>
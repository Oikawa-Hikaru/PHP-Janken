<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <body>
  <!-- PHPの定義部分 -->
  <?php
    // じゃんけんに文字列を代入する
    $goo = 'グー';
    $choki = 'チョキ';
    $par = 'パー';

    // 相手プレイヤーの手を乱数で定義して代入する
    $player1 = mt_rand(0,2);
    $player2 = mt_rand(0,2);
    $player3 = mt_rand(0,2);

    // if文で定義した$player変数に文字列を再代入する
    // $player1
    if ($player1 === 0) {
      $player1 = 'グー';
    } elseif ($player1 === 1) {
      $player1 = 'チョキ';
    } elseif ($player1 === 2) {
      $player1 = 'パー';
    }
    // $player2
    if ($player2 === 0) {
      $player2 = 'グー';
    } elseif ($player2 === 1) {
      $player2 = 'チョキ';
    } elseif ($player2 === 2) {
      $player2 = 'パー';
    }
    // $player3
    if ($player3 === 0) {
      $player3 = 'グー';
    } elseif ($player3 === 1) {
      $player3 = 'チョキ';
    } elseif ($player3 === 2) {
      $player3 = 'パー';
    }
  ?>
  <!-- PHP定義部分終わり -->

  <div class="main">
    <div class="centerbox">
      <h1>じゃんけん</h1>
      <div class="janken">
        <div class="playertop">
          <div class="playername">COM1</div>
          <?php
          if ($player1 == $goo) {
            echo '<img src="./img/goo.png" class="jankenimg">';
          } else if ($player1 == $choki) {
            echo '<img src="./img/choki.png" class="jankenimg">';
          } else if ($player1 == $par) {
            echo '<img src="./img/par.png" class="jankenimg">';
          }
          ?>
        </div>
        <div class="playerleft">
          <div class="playername">COM2</div>
          <?php
          if ($player2 == $goo) {
          echo '<img src="./img/goo.png" class="jankenimg">';
          } else if ($player2 == $choki) {
          echo '<img src="./img/choki.png" class="jankenimg">';
          } else if ($player2 == $par) {
          echo '<img src="./img/par.png" class="jankenimg">';
          }
          ?>
        </div>
        <div class="center">
            <h1>VS</h1>
        </div>
        <div class="playerright">
          <div class="playername">COM3</div>
          <?php
          if ($player3 == $goo) {
            echo '<img src="./img/goo.png" class="jankenimg">';
          } else if ($player3 == $choki) {
            echo '<img src="./img/choki.png" class="jankenimg">';
          } else if ($player3 == $par) {
            echo '<img src="./img/par.png" class="jankenimg">';
          }
          ?>
        </div>
        <div class="myself">
          <?php
          if(isset($_POST['janken'])){
            $myself = $_POST['janken'];
            if ($myself == 'グー') {
              echo '<img src="./img/goo.png" class="jankenimg">';
            } else if ($myself == 'チョキ') {
              echo '<img src="./img/choki.png" class="jankenimg">';
            } else if ($myself == 'パー') {
              echo '<img src="./img/par.png" class="jankenimg">';
            }
          }
          ?>
          <div class="playername">PLAYER</div>
        </div>
      </div>
      <div class="result">
        <?php
        // 勝敗プロセス
        if(isset($_POST['janken'])){
        $myself = $_POST['janken'];
          // グー
          if ($myself == $goo) {
            // 一人勝ちか一人負けか全員同じ手になったときの処理
            if ($player1 == $choki && $player2 == $choki && $player3 == $choki) {
              echo 'すごい！あなたの一人勝ちです！';
            } elseif ($player1 == $par && $player2 == $par && $player3 == $par) {
              echo '残念！あなたの一人負けです...';
            } elseif ($player1 == $goo && $player2 == $goo && $player3 == $goo) {
              echo '全員同じ手です！もう一回！';
            } else {
              // それ以外の場合の処理
              if ($player1 == $choki || $player2 == $choki || $player3 == $choki) {
                if ($player1 == $par || $player2 == $par || $player3 == $par) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは勝ちました';
                }
              } elseif ($player1 == $par || $player2 == $par || $player3 == $par) {
                if ($player1 == $choki || $player2 == $choki || $player3 == $choki) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは負けました';
                }
              }
            }
          };
          // チョキ
          if ($myself == $choki) {
            // 一人勝ちか一人負けか全員同じ手になったときの処理
            if ($player1 == $par && $player2 == $par && $player3 == $par) {
              echo 'すごい！あなたの一人勝ちです！';
            } elseif ($player1 == $goo && $player2 == $goo && $player3 == $goo) {
              echo '残念！あなたの一人負けです...';
            } elseif ($player1 == $choki && $player2 == $choki && $player3 == $choki) {
              echo '全員同じ手です！もう一回！';
            } else {
              // それ以外の場合の処理
              if ($player1 == $par || $player2 == $par || $player3 == $par) {


                if ($player1 == $goo || $player2 == $goo || $player3 == $goo) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは勝ちました';
                }
              } elseif ($player1 == $goo || $player2 == $goo || $player3 == $goo) {
                if ($player1 == $par || $player2 == $par || $player3 == $par) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは負けました';
                }
              } 
            }
          };
          // パー
          if ($myself == $par) {
            // 一人勝ちか一人負けか全員同じ手になったときの処理
            if ($player1 == $goo && $player2 == $goo && $player3 == $goo) {
              echo 'すごい！あなたの一人勝ちです！';
            } elseif ($player1 == $choki && $player2 == $choki && $player3 == $choki) {
              echo '残念！あなたの一人負けです...';
            } elseif ($player1 == $par && $player2 == $par && $player3 == $par) {
              echo '全員同じ手です！もう一回！';
            } else {
              // それ以外の場合の処理
              if ($player1 == $goo || $player2 == $goo || $player3 == $goo) {
                if ($player1 == $choki || $player2 == $choki || $player3 == $choki) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは勝ちました';
                }
              } elseif ($player1 == $choki || $player2 == $choki || $player3 == $choki) {
                if ($player1 == $goo || $player2 == $goo || $player3 == $goo) {
                  echo 'あいこです！';
                } else {
                  echo 'あなたは負けました';
                }
              } 
            }
          };
        }     
        ?>
      </div>
      <p class="introduce">じゃんけんで出す手を選んでください！</p>
      <div class="choose">
        <div class="choosebox">
          <div class="choosehand">
            <form action="index.php" method="post">
              <input type="submit" name="janken" value="グー">
            </form>
          </div>
          <div class="choosehand">
            <form action="index.php" method="post">
              <input type="submit" name="janken" value="チョキ">
            </form>
          </div>
          <div class="choosehand">
            <form action="index.php" method="post">
              <input type="submit" name="janken" value="パー">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>

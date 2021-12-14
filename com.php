<html>

<head>

  <meta name="viewport" content="width=device-width, initlal-scale=1">

  <title>Your Comment</title>

  <style type="text/css" media="all">

    body {
      font-family: Sans-Serif;
      background: url(tt.jpg);
    }

    .name-of-comment-input {
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
      width: 330px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 13px;
      height: 40px;
      padding: 5px;
    }

    .comment-text {
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;
      width: 330px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 13px;
    }

    .name-of-comment-input-lable,
    .comment-text-lable,
    .comment-header {
      text-align: center;
      color: white;
      font-weight: bold;
      padding-top: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .comment-header {
      color: yellow;
    }

    .comment-post-btn {
      border: solid white 2px;
      border-radius: 15px;
      height: 35px;
      width: 100px;
      font-weight: bold;
      background: transparent;
      color: white;
      margin-top: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto
    }

    .comment-post-btn:active {
      background: black;
      color: white;
    }

    .comment-section-header {
      color: white;
      font-weight: bold;
      text-decoration: underline;
      text-align: center;
      font-size: 20px;
      margin: 20px;
    }

    .user-comment {
      color: white;
      border: solid 2px white;
      border-radius: 10px;
      text-align: center;
      font-weight: bold;
      padding: 5px;
      margin: 5px;
    }

    .user-comment .user {
      text-decoration: underline;
      margin: 5px;
      color: #e8ff62;
    }

    .user-comment .commentspost {
      margin: 8px;
    }

    a {
      text-decoration: none;
    }

    .GoBackBtn {
      border: solid white 2px;
      border-radius: 15px;
      height: 35px;
      width: 100px;
      font-weight: bold;
      background: black;
      color: white;
      margin-top: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .GoBackBtn:active {
      background: transparent;
    }

  </style>
</head>

<body>

  <div class="comment-header">
    Enter Your Comment
  </div>
  <form action="com.php" method="post">
    <div class="name-of-comment">

      <label class="name-of-comment-input-lable" for="name-of-comment-input">Your Name</label>

      <input name="name" id="name-of-comment-input" class="name-of-comment-input" type="text">

    </div>

  </div>


  <div class="comments">

    <label class="comment-text-lable" for="comment-text">Your Comments</label>

    <textarea name="comment-text" name="comment-text" id="comment-text" class="comment-text" cols="40" rows="5"></textarea>

  </div>

  <div class="comment-post">

    <form action="com.php">
      <input name="postbtn" class="comment-post-btn" value="POST" type="submit">
    </form>

    <div class="go-btn">

      <center>

        <form action="web.html">

          <input value="Go Main Page" class="GoBackBtn" type="submit">

        </form>

      </center>

    </div>

  </div>

</form>

<div class="comment-section">

  <div class="comment-section-header">
    Comments
  </div>

  <?php

  $name = $_POST["name"];
  $comment = $_POST["comment-text"];
  $post = $_POST["postbtn"];

  if ($post) {

    if (0 < strlen($name) || 0 < strlen($comment)) {
      if ($name == "තරින්ද දම්රුවන්") {

        $write = fopen("com.txt", "a+");
        fwrite($write, "<div class='user-comment'><div class='user'> $name   [Admin] </div><div class='commentspost'> $comment </div></div>\n");
        fclose($write);

        #print comments#

        $read = fopen("com.txt", "r+t");

        while (!feof($read)) {
          echo fread($read, 1024);
        }

        fclose($read);

      } elseif ($name == "Tharinda Damruwan") {

        $write = fopen("com.txt", "a+");
        fwrite($write, "<div class='user-comment'><div class='user'> $name   [Admin] </div><div class='commentspost'> $comment </div></div>\n");
        fclose($write);

        #print comments#

        $read = fopen("com.txt", "r+t");

        while (!feof($read)) {
          echo fread($read, 1024);
        }

        fclose($read);

      } else {
          $write = fopen("com.txt", "a+");
          fwrite($write, "<div class='user-comment'><div class='user'> $name   [User] </div><div class='commentspost'> $comment </div></div>\n");
          fclose($write);

          #print comments#

          $read = fopen("com.txt", "r+t");

          while (!feof($read)) {
            echo fread($read, 1024);
          }

          fclose($read);

        }
        }   else {
          $read = fopen("com.txt", "r+t");

          while (!feof($read)) {
            echo fread($read, 1024);
          }

          fclose($read);
        }
      } 
      
      else {
      $read = fopen("com.txt", "r+t");

      while (!feof($read)) {
        echo fread($read, 1024);
      }

      fclose($read);
    }

    ?>

  </div>

</body>

</html>
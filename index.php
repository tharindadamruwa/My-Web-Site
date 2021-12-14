<!DOCTYPE HTML>
<html>

<head>

  <meta name="viewport" content="width=device-width, initlal-scale=1">
  
  <link rel="shortcut icon" type="image/x-icon"  href="favicon.ico"/>

  <title>Tharinda Damruwan's Web-Site</title>

  <script src="script.js"></script>

  <style type="text/css" media="all">

    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    body {
      font-family: Sans-Serif;
      background: url(tt.jpg);
      padding: 10px;
    }

    .profile-card {
      position: fixed;
      top: 50%;
      left: 45.5%;
      transform: translate(-50%,-50%);
      width: 330px;
      text-align: center;
      margin-left: 15px;
      margin-right: 15px;
      margin-top: 30px;
      border: 2px solid white;
      border-radius: 10px;
    }

    .profile-card .avatar {
      padding: 20px 0px 10px;
    }

    .profile-card .avatar img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 2px solid white;
    }

    .profile-card .profile-type {
      position: absolute;
      top: 15px;
      left: 15px;
      background: white;
      color: black;
      padding: 5px 8px;
      border-radius: 5px;
      font-size: 13px;
      font-weight: 600;
    }

    .profile-card .details {
      padding: 10px 30px;
    }

    .profile-card .details h1 {
      color: white;
      font-weight: bold;
      font-size: 25px;
    }

    .profile-card .details h2 {
      font-size: 15px;
      margin-bottom: 12px;
      color: white;
      padding-top: 5px;
    }

    .profile-card .details p {
      font-size: 15px;
      color: black;
      text-align: justify;
      text-justify: inter-word;
      padding: 10px;
      border-radius: 4px;
      background-color: white;
      font-weight: bold;
    }

    .profile-card .numbers {
      padding: 15px 40px;
      display: flex;
      justify-content: space-around;
    }

    .profile-card .item {
      margin-left: 5px;
      margin-right: 5px;
    }

    .profile-card .numbers p {
      font-size: 14px;
      margin-bottom: 2px;
      color: white;
      font-weight: 600;
    }

    .profile-card .numbers h2 {
      font-size: 16px;
      color: white;
    }

    .profile-card .btn {
      padding: 10px 30px  25px;
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .tab {
      width: 100%;
      height: 40px;
      border: solid white;
      padding: 5px 3px 5px 3px;
      display: flex;
      justify-content: space-around;
      border-radius: 10px;
    }

    .toolItem {
      margin-left: 5px;
      margin-right: 5px;
      width: 100px;
      height: 15px;
    }

    .tab button {
      width: 100px;
      height: 25px;
      background-color: white;
      color: black;
      font-weight: bold;
      outline: none;
      border: solid 2px;
      border-radius: 4px;
      transition: 0.2s;
    }

    .tab button:hover {
      background-color: #ddd;
    }

    .tabcontent {
      animation: fadeEffect1s;
    }

    @keyframes fadeEffect {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .project-card {
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
      border: solid white;
      border-radius: 10px;
      width: 100%;
      padding: 15px;
    }

    .project-card button {
      height: 35px;
      width: 100%;
      border-radius: 10px;
      color: yellow;
      background: transparent;
      outline: none;
      border: solid yellow 2px;
      font-weight: bold;
    }

    .project-card button:active {
      color: black;
      background-color: white;
    }

    .project-card .project-item .project-name {
      color: white;
      text-align: center;
      font-size: 13px;
      font-weight: bold;
      margin-top: 20px;
    }

    a {
      text-decoration: none;
      color: yellow;
    }

    a:active {
      color: red;
    }

    .project-card .project-item {
      border: solid 2px white;
      border-radius: 10px;
      margin-top: 25px;
      height: 40px;
      text-align: center;
      justify-content: center;
    }

    .project-card .project-item:active {
      background: black;
      border: solid 2px yellow;
      border-radius: 10px;
      margin-top: 25px;
      height: 40px;
      text-align: center;
      justify-content: center;
    }

    .project-card .project-item .project-name {
      color: white;
      font-size: 15px;
      margin-top: 11px;
      margin-bottom: 15px;
    }

    #project-card-id {
      display: none;
    }

    #profile-open-btn {
      background: black;
      color: white;
    }

    .your-comment-link button {
      width: 120px;
      height: 60px;
      font-weight: bold;
      background: transparent;
      border: solid white 2px;
      color: white;
      border-radius: 30px;
      margin-top: 15px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .your-comment-link button:active {
      background: black;
    }
    
    .admin {
      position: absolute;
      top: 15px;
      left: 265px;
      background: white;
      color: black;
      padding: 5px 8px;
      border-radius: 5px;
      font-size: 13px;
      font-weight: 600;
    }

  </style>

</head>

<body>

  <div class="tab">

    <button class="tablinks" id="profile-open-btn" onclick="profileOpen()">Profile</button>

    <button id="project-open-btn" class="tablinks" onclick="projectOpen()">Project</button>

  </div>

  <div id="profile-card-id" class="tabcontent">

    <div class="profile-card">

      <div class="profile-type">
        PRO
      </div>
      <a href="login.html"><div class="admin">Admin</div></a>

      <div class="avatar">

        <img src="ss.jpg" alt="my photo" />

      </div>

      <div class="details">

        <h1>Tharinda Damruwan</h1>

        <h2>Developer</h2>

        <p>
          My Name Is Tharinda Damruwan Perera. My Age Is 15. My Hobby Is Web / Nodejs Apps / Android Apps / Python Scripts / Virus / TeleGram Bots Developing And Photos / Videos Editing. I'm From Sri Lanka
        </p>

      </div>

      <div class="numbers">

        <div class="item">

          <p>
            PROJECTS
          </p>

          <h2>
            
            <?php
            
            $readproje = fopen("proje.txt", "r+t");
            while (!feof($readproje)) {
              echo fread($readproje, 1024);
            }
            fclose($readproje);
            
            ?>
            
          </h2>

        </div>

        <div class="item">

          <p>
            PYTHON
          </p>

          <h2>
            
            <?php
            
            $readpython = fopen("python.txt", "r+t");
            while (!feof($readpython)) {
              echo fread($readpython, 1024);
            }
            fclose($readpython);
            
            ?>
            
          </h2>

        </div>

        <div class="item">

          <p>
            HTML
          </p>

          <h2>
            
            <?php
            
            $readhtml = fopen("html.txt", "r+t");
            while (!feof($readhtml)) {
              echo fread($readhtml, 1024);
            }
            fclose($readhtml);
            
            ?>
            
          </h2>

        </div>

        <div class="item">

          <p>
            NODEJS
          </p>

          <h2>
            
            <?php
            
            $readnodejs = fopen("nodejs.txt", "r+t");
            while (!feof($readnodejs)) {
              echo fread($readnodejs, 1024);
            }
            fclose($readnodejs);
            
            ?>
            
          </h2>

        </div>

        <div class="item">

          <p>
            PHP
          </p>

          <h2>
            
            <?php
            $readphp = fopen("php.txt", "r+t");
            while (!feof($readphp)) {
              echo fread($readphp, 1024);
            }
            fclose($readphp);
            ?>
            
          </h2>

        </div>

      </div>

    </div>

  </div>

  <div id="project-card-id" class="tabcontent">

    <div class="project-card">

      <a href="https://github.com/tharindadamruwan" target="_blank" rel="noopener noreferrer">

        <button class="github-btn">Go To My GitHub</button>

      </a>
      
      <?php
        $read = fopen("project.txt", "r+t");

        while (!feof($read)) {
          echo fread($read, 1024);
        }

        fclose($read);

      ?>

    </div>

    <a href="com.php">

      <div class="your-comment-link">

        <button class="go-to-comment-btn" id="go-to-comment-btn">Go To Comments </button>

      </div>

    </a>

  </div>

</body>

</html>
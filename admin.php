<html>

<head>
  
  <meta name="viewport" content="width=device-width, initlal-scale=1">

  <title>Admin</title>
  
  <style type="text/css" media="all">
    
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600;700;800&display=swap');
    
    body {
      background: url(tt.jpg);
      font-family: Sans-Serif;
    }
    
    .adminheder {
      color: white;
      text-align: center;
      font-family: 'Roboto Slab', serif;
      font-size: 20px;
    }
    
    .project-info-get {
      width: 300px;
      margin-top: 20px;
      border: solid 2px white;
      border-radius: 10px;
      padding: 10px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    
    .project-info-get label {
      color: white;
      font-family: Sans-Serif;
      font-weight: bold;
    }
    
    .project-info-get input {
      width: 290px;
      height: 30px;
      border: 1px solid white;
      outline: none;
      border-radius: 5px;
      padding: 2px;
      font-size: 15px;
      text-align: center;
      font-weight: bold;
      margin: 3px;
    }
    
    .project-info-get input[type = radio] {
      width: 14px;
      height: 14px;
    }
    
    #submit-btn:active {
      background: black;
      color: white;
    }
    
    .error {
      color: red;
      font-weight: bold;
      text-align: center;
    }
    
    .success {
      color: #1eef1e;
      font-weight: bold;
      text-align: center;
    }

  </style>
  
</head>

<body>
  
  <form method="post" accept-charset="utf-8">
    
    <div class="adminheder">
      Administrator Only
    </div>
    
    <div class="project-info-get">
      
      <center>
        <label for="project-name">Project-Name</label><br>
      <input placeholder="
      Name" class="project-name" id="project-name" name="project-name" type="text"><br><br>
      </center>
      
      <center>
        <label for="github-llink">GitHub Link</label><br>
      <input placeholder="GitHub Link" class="github-link" id="github-link" name="github-link" type="text"><br><br>
      </center>
        
        <center><div class="input-radio-alin">
          <input value="python" name="language" type="radio" id="python-radio-input">
        <label for="html-radio-input">PYTHON</label><br>
        </div></center>
        
        <center><div class="input-radio-alin">
          <input value="html" name="language" type="radio" id="html-radio-input">
          <label for="html-radio-input">HTML     </label><br>
        </div></center>
        
        <center><div class="input-radio-alin">
          <input name="language" id="nodejs-radio-input" value="nodejs" type="radio">
          <label for="nodejs-radio-input">NODEJS</label><br>
        </div></center>
        
        <center><div class="input-radio-alin">
          <input id="php-radio-input" value="php" name="language" type="radio">
        <label for="php-radio-input">PHP       </label><br>
        </div></center>
        
        <center><div class="input-radio-alin">
          <input id="other-radio-input" value="other" name="language" type="radio">
        <label for="other-radio-input">OTHER  </label><br>
        </div></center>
        
        <input name="submit-btn" id="submit-btn" value="Submit" type="submit">
        
      </div>
    
  </form>
  
  <?php
  
  $projectName = $_POST["project-name"];
  $githubLink = $_POST["github-link"];
  $language = $_POST["language"];
  $submit = $_POST["submit-btn"];
  
  if ($submit) {
    
    if (0<strlen($projectName)) {
      
      if (0<strlen($githubLink)) {
        
        if (0<strlen($language)) {
          
          $write = fopen("project.txt", "a+");
          fwrite($write, "<div class='project-item'><a href=' $githubLink ' target='_blank' rel='noopener noreferrer'><p class='project-name'> $projectName </p></a></div>\n");
          fclose($write);
          
          if ($language == "python") {
            
            //change proje.txt
            $filename = "./proje.txt";
            
            //Get content in txt
            
            $content = file_get_contents($filename);
            
            //conveter string to intiger
            
            $converter = (int)$content;
            
            //conveting + 1
            
            $puls = $converter + 1;
            
            file_put_contents($filename, $puls);
            
            //change python.txt
            $pythontxt = "./python.txt";
            
            $pycontent = file_get_contents($pythontxt);
            
            $pyconverter = (int)$pycontent;
            
            $pyplus = $pyconverter + 1;
            
            file_put_contents($pythontxt, $pyplus);
            
          } elseif ($language == "html") {
            //change proje.txt
            $filename = "./proje.txt";
            
            //Get content in txt
            
            $content = file_get_contents($filename);
            
            //conveter string to intiger
            
            $converter = (int)$content;
            
            //conveting + 1
            
            $puls = $converter + 1;
            
            file_put_contents($filename, $puls);
            
            //change html.txt
            $htmltxt = "./html.txt";
            
            $htmlcontent = file_get_contents($htmltxt);
            
            $htmlconverter = (int)$htmlcontent;
            
            $htmlplus = $htmlconverter + 1;
            
            file_put_contents($htmltxt, $htmlplus);
          } elseif ($language == "nodejs") {
            //change proje.txt
            $filename = "./proje.txt";
            
            //Get content in txt
            
            $content = file_get_contents($filename);
            
            //conveter string to intiger
            
            $converter = (int)$content;
            
            //conveting + 1
            
            $puls = $converter + 1;
            
            file_put_contents($filename, $puls);
            
            //change nodejs.txt
            $nodejstxt = "./nodejs.txt";
            
            $nodejscontent = file_get_contents($nodejstxt);
            
            $nodejsconverter = (int)$nodejscontent;
            
            $nodejsplus = $nodejsconverter + 1;
            
            file_put_contents($nodejstxt, $nodejsplus);
            
          } elseif ($language == "php") {
            
            //change proje.txt
            $filename = "./proje.txt";
            
            //Get content in txt
            
            $content = file_get_contents($filename);
            
            //conveter string to intiger
            
            $converter = (int)$content;
            
            //conveting + 1
            
            $puls = $converter + 1;
            
            file_put_contents($filename, $puls);
            
            //change nodejs.txt
            $phptxt = "./php.txt";
            
            $phpcontent = file_get_contents($phptxt);
            
            $phpconverter = (int)$phpcontent;
            
            $phpplus = $phpconverter + 1;
            
            file_put_contents($phptxt, $phpplus);
            
          } elseif ($language == "other") {
            
            //change proje.txt
            $filename = "./proje.txt";
            
            //Get content in txt
            
            $content = file_get_contents($filename);
            
            //conveter string to intiger
            
            $converter = (int)$content;
            
            //conveting + 1
            
            $puls = $converter + 1;
            
            file_put_contents($filename, $puls);
          
          }
          
          echo "<p class='success'>Success</p>";
          
        } else {
          
          echo "<p class='error'>Fill All Informations</p>";
          
        }
        
      } else {
        
        echo "<p class='error'>Fill All Informations</p>";
        
      }
      
    } else {
      echo "<p class='error'>Fill All Informations</p>";
    }
  }
  
  ?>
  
</body>

</html>
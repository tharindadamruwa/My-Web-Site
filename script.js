//main tbs

//profile-card-tab
function profileOpen() {

  document.getElementById("profile-card-id").style.display = "block";

  document.getElementById("project-card-id").style.display = "none";

  document.getElementById("profile-open-btn").style.color = "white";

  document.getElementById("profile-open-btn").style.backgroundColor = "black";

  document.getElementById("project-open-btn").style.color = "black";
  
  document.getElementById("project-open-btn").style.backgroundColor = "white";

}

//project-card-tab
function projectOpen() {

  document.getElementById("profile-card-id").style.display = "none";

  document.getElementById("project-card-id").style.display = "block";

  document.getElementById("project-open-btn").style.color = "white";

  document.getElementById("project-open-btn").style.backgroundColor = "black";

  document.getElementById("profile-open-btn").style.color = "black";

  document.getElementById("profile-open-btn").style.backgroundColor = "white";

}
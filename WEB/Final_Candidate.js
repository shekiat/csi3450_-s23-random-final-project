function myFunction() {
  // Candidates Table Radio Button
  var Candidites = document.getElementById("CANDIDATES");
  // Candidates Job History Search
  var can_can = document.getElementById("can_can");
  
  //Job History Table Radio Button
  var Jobhist = document.getElementById("JOB_HISTORY");
  //Job History Table Attribute Checkboxes
  var jh_jh = document.getElementById("can_jh");

  //Qualifications Table Radio Button
  var Qualifications = document.getElementById("QUALIFICATIONS");
  //Qualifications Table Attribute Checkboxes
  var q_q = document.getElementById("Q_Q_CODE");
  
  //COURSE Table Radio Button
  var course = document.getElementById("COURSE");
  //COURSE Table Attribute Checkboxes
  var crs_crs = document.getElementById("can_crs");

  //training sessions Table Radio Button
  var training_sessions = document.getElementById("TRAINING_SESSIONS");
  //training sessions Table Attribute Checkboxes
  var ts_ts = document.getElementById("can_ts");
  
  //placement Table Radio Button
  var placement = document.getElementById("PLACEMENT");
  //placement Table Attribute Checkboxes
  var pl_pl = document.getElementById("TS_TS_CODE");  

  // code that alters visibility of checkboxes
  if (Candidites.checked == true){
    can_can.style.display = "block";
    
  } 
  else if (Candidites.checked == false){
    can_can.style.display = "none";  
  }
       
  if (Jobhist.checked == true){
    jh_jh.style.display = "block";
    
  } 
  else if (Jobhist.checked == false){
    jh_jh.style.display = "none";  
  } 
  
  if (Qualifications.checked == true){
    q_q.style.display = "block";
    
  } 
  else if (Qualifications.checked == false){
    q_q.style.display = "none";  
  }
    
  if (course.checked == true){
    crs_crs.style.display = "block";
    
  } 
  else if (course.checked == false){
    crs_crs.style.display = "none";  
  }
  
    if (training_sessions.checked == true){
    ts_ts.style.display = "block";
    
  } 
  else if (training_sessions.checked == false){
    ts_ts.style.display = "none";  
  }
  
  if (course.checked == true){
    pl_pl.style.display = "block";
    
  } 
  else if (Candidites.checked == false){
    pl_pl.style.display = "none";  
  } 
    
    
}

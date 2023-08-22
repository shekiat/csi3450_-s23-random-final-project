  function myFunction() {
  // Candidates Table Radio Button
  var Candidites = document.getElementById("CANDIDATES");
  // Candidates Table Attribute Checkboxes
  var can_text_1 = document.getElementById("CAN_CAN_NUM");
  var can_text_2 = document.getElementById("CAN_CAN_FNAME");
  var can_text_3 = document.getElementById("CAN_CAN_MNAME");
  var can_text_4 = document.getElementById("CAN_CAN_LNAME");
  var can_text_5 = document.getElementById("CAN_Q_CODE");
  var can_text_6 = document.getElementById("CAN_JH_CODE");
  var can_text_7 = document.getElementById("CAN_OPEN_CODE");
  var can_text_8 = document.getElementById("text1");
  var can_text_9 = document.getElementById("text2");
  var can_text_10 = document.getElementById("text3");
  var can_text_11 = document.getElementById("text4");
  var can_text_12 = document.getElementById("text5");
  var can_text_13 = document.getElementById("text6");
  var can_text_14 = document.getElementById("text7");
  
  //Job History Table Radio Button
  var Jobhist = document.getElementById("JOB_HISTORY");
  //Job History Table Attribute Checkboxes
  var jh_text_1 = document.getElementById("JH_JH_CODE");
  var jh_text_2 = document.getElementById("JH_CAN_NUM");
  var jh_text_3 = document.getElementById("JH_CAN_FNAME");
  var jh_text_4 = document.getElementById("JH_CAN_MNAME");
  var jh_text_5 = document.getElementById("JH_CAN_LNAME");
  var jh_text_6 = document.getElementById("JH_JH_START_DATE");
  var jh_text_7 = document.getElementById("JH_JH_END_DATE");
  var jh_text_8 = document.getElementById("JH_JH_HOURLY_PAY");
  var jh_text_9 = document.getElementById("JH_OPEN_CODE");
  var jh_text_10 = document.getElementById("texta1");
  var jh_text_11 = document.getElementById("texta2");
  var jh_text_12 = document.getElementById("texta3");
  var jh_text_13 = document.getElementById("texta4");
  var jh_text_14 = document.getElementById("texta5");
  var jh_text_15 = document.getElementById("texta6");
  var jh_text_16 = document.getElementById("texta7");
  var jh_text_17 = document.getElementById("texta8");
  var jh_text_18 = document.getElementById("texta9");

  //Qualifications Table Radio Button
  var Qualifications = document.getElementById("QUALIFICATIONS");
  //Qualifications Table Attribute Checkboxes
  var q_text_1 = document.getElementById("Q_Q_CODE");
  var q_text_2 = document.getElementById("Q_Q_DESC");
  var q_text_3 = document.getElementById("textb1");
  var q_text_4 = document.getElementById("textb2");
  
  
  //COURSE Table Radio Button
  var course = document.getElementById("COURSE");
  //COURSE Table Attribute Checkboxes
  var crs_text_1 = document.getElementById("CRS_CRS_CODE");
  var crs_text_2 = document.getElementById("CRS_Q_CODE");
  var crs_text_3 = document.getElementById("CRS_CAN_NUM");
  var crs_text_4 = document.getElementById("CRS_CRS_FEE");
  var crs_text_5 = document.getElementById("textc1");
  var crs_text_6 = document.getElementById("textc2");
  var crs_text_7 = document.getElementById("textc3");
  var crs_text_8 = document.getElementById("textc4");

  //training sessions Table Radio Button
  var training_sessions = document.getElementById("TRAINING_SESSIONS");
  //training sessions Table Attribute Checkboxes
  var ts_text_1 = document.getElementById("TS_TS_CODE");
  var ts_text_2 = document.getElementById("TS_CAN_NUM");
  var ts_text_3 = document.getElementById("textd1");
  var ts_text_4 = document.getElementById("textd2");

  //OPENINGS Table Radio Button
  var openings = document.getElementById("OPENINGS");
  //OPENINGS Table Attribute Checkboxes
  var open_text_1 = document.getElementById("OPEN_OPEN_CODE");
  var open_text_2 = document.getElementById("OPEN_CMP_CODE");
  var open_text_3 = document.getElementById("texte1");
  var open_text_4 = document.getElementById("texte2");

  // PLACEMENT Table Radio Button
  var placement = document.getElementById("PLACEMENT");
  // PLACEMENT Table Attribute Checkboxes
  var pl_text_1 = document.getElementById("PL_OPEN_CODE");
  var pl_text_2 = document.getElementById("PL_CAN_NUM");
  var pl_text_3 = document.getElementById("PL_JH_CODE");
  var pl_text_4 = document.getElementById("PL_PL_TOTAL_HOURS");
  var pl_text_5 = document.getElementById("PL_CMP_NAME");
  var pl_text_6 = document.getElementById("textf1");
  var pl_text_7 = document.getElementById("textf2");
  var pl_text_8 = document.getElementById("textf3");
  var pl_text_9 = document.getElementById("textf4");
  var pl_text_10 = document.getElementById("textf5");

  //COMPANIES Table Radio Button
  var companies = document.getElementById("COMPANIES");
  //COMPANIES Table Attribute Checkboxes
  var cmp_text_1 = document.getElementById("CMP_CMP_CODE");
  var cmp_text_2 = document.getElementById("CMP_CMP_NAME");
  var cmp_text_3 = document.getElementById("textg1");
  var cmp_text_4 = document.getElementById("textg2");
  
  //QUALIFIED_CANDIDATES Table Radio Button
  var Qualified_candidates = document.getElementById("QUALIFIED_CANIDATES");
  //QUALIFIED_CANDIDATES Table Attribute Checkboxes
  var qc_text_1 = document.getElementById("QC_CAN_NUM");
  var qc_text_2 = document.getElementById("QC_Q_CODE");
  var qc_text_3 = document.getElementById("texth1");
  var qc_text_4 = document.getElementById("texth2");
  
  //COURSE_ENROLEMENT Table Radio Button
  var Course_enrolement = document.getElementById("COURSE_ENROLEMENT");
  //COURSE_ENROLEMENT Table Attribute Checkboxes
  var ce_text_1 = document.getElementById("CE_CAN_NUM");
  var ce_text_2 = document.getElementById("CE_CRS_CODE");
  var ce_text_3 = document.getElementById("texti1");
  var ce_text_4 = document.getElementById("texti2");

  //SESSION_ENROLEMENT Table Radio Button
  var session_enrolement = document.getElementById("SESSION_ENROLEMENT");
  //SESSION_ENROLEMENT Table Attribute Checkboxes
  var se_text_1 = document.getElementById("SE_CAN_NUM");
  var se_text_2 = document.getElementById("SE_TS_CODE");
  var se_text_3 = document.getElementById("textj1");
  var se_text_4 = document.getElementById("textj2");

  //COMPANY_OPENINGS Table Radio Button
  var company_openings = document.getElementById("COMPANY_OPENINGS");
  //COMPANY_OPENINGS Table Attribute Checkboxes
  var co_text_1 = document.getElementById("CO_OPEN_CODE");
  var co_text_2 = document.getElementById("CO_CMP_CODE");
  var co_text_3 = document.getElementById("textk1");
  var co_text_4 = document.getElementById("textk2");
  
    //FILLED_OPENINGS Table Radio Button
  var filled_openings = document.getElementById("FILLED_OPENINGS");
  //FILLED_OPENINGS Table Attribute Checkboxes
  var fo_text_1 = document.getElementById("FO_CAN_NUM");
  var fo_text_2 = document.getElementById("FO_OPEN_CODE");
  var fo_text_3 = document.getElementById("textl1");
  var fo_text_4 = document.getElementById("textl2");

  // code that alters visibility of checkboxes
  if (Candidites.checked == true){
    can_text_1.style.display = "block";
    can_text_2.style.display = "block";
    can_text_3.style.display = "block";
    can_text_4.style.display = "block";
    can_text_5.style.display = "block";
    can_text_6.style.display = "block";
    can_text_7.style.display = "block";
    can_text_8.style.display = "block";
    can_text_9.style.display = "block";
    can_text_10.style.display = "block";
    can_text_11.style.display = "block";
    can_text_12.style.display = "block";
    can_text_13.style.display = "block";
    can_text_14.style.display = "block";
    
  } else if (Candidites.checked == false){
    can_text_1.style.display = "none";
    can_text_2.style.display = "none";
    can_text_3.style.display = "none";
    can_text_4.style.display = "none";
    can_text_5.style.display = "none";
    can_text_6.style.display = "none";
    can_text_7.style.display = "none";
    can_text_8.style.display = "none";
    can_text_9.style.display = "none";
    can_text_10.style.display = "none";
    can_text_11.style.display = "none";
    can_text_12.style.display = "none";
    can_text_13.style.display = "none";
    can_text_14.style.display = "none";
    
  }
       
    if (Jobhist.checked == true) {
    jh_text_1.style.display = "block";
    jh_text_2.style.display = "block";
    jh_text_3.style.display = "block";
    jh_text_4.style.display = "block";
    jh_text_5.style.display = "block";
    jh_text_6.style.display = "block";
    jh_text_7.style.display = "block";
    jh_text_8.style.display = "block";
    jh_text_9.style.display = "block";
    jh_text_10.style.display = "block";
    jh_text_11.style.display = "block";
    jh_text_12.style.display = "block";
    jh_text_13.style.display = "block";
    jh_text_14.style.display = "block";
    jh_text_15.style.display = "block";
    jh_text_16.style.display = "block";
    jh_text_17.style.display = "block";
    jh_text_18.style.display = "block";
  
  } 

    else if (Jobhist.checked == false) {
    jh_text_1.style.display = "none";
    jh_text_2.style.display = "none";
    jh_text_3.style.display = "none";
    jh_text_4.style.display = "none";
    jh_text_5.style.display = "none";
    jh_text_6.style.display = "none";
    jh_text_7.style.display = "none";
    jh_text_8.style.display = "none";
    jh_text_9.style.display = "none";
    jh_text_10.style.display = "none";
    jh_text_11.style.display = "none";
    jh_text_12.style.display = "none";
    jh_text_13.style.display = "none";
    jh_text_14.style.display = "none";
    jh_text_15.style.display = "none";
    jh_text_16.style.display = "none";
    jh_text_17.style.display = "none";
    jh_text_18.style.display = "none";
  
}   
    if (Qualifications.checked == true){
    q_text_1.style.display = "block";
    q_text_2.style.display = "block";
    q_text_3.style.display = "block";
    q_text_4.style.display = "block";   
   }    
        
    else if (Qualifications.checked == false){
    q_text_1.style.display = "none";
    q_text_2.style.display = "none";
    q_text_3.style.display = "none";
    q_text_4.style.display = "none";   
   }       
        
   if (course.checked == true){
    crs_text_1.style.display = "block";
    crs_text_2.style.display = "block";
    crs_text_3.style.display = "block";
    crs_text_4.style.display = "block";
    crs_text_5.style.display = "block";
    crs_text_6.style.display = "block";
    crs_text_7.style.display = "block";
    crs_text_8.style.display = "block";
    
  } else if (course.checked == false){
    crs_text_1.style.display = "none";
    crs_text_2.style.display = "none";
    crs_text_3.style.display = "none";
    crs_text_4.style.display = "none";
    crs_text_5.style.display = "none";
    crs_text_6.style.display = "none";
    crs_text_7.style.display = "none";
    crs_text_8.style.display = "none";
    
  }     
      
    if (training_sessions.checked == true){
    ts_text_1.style.display = "block";
    ts_text_2.style.display = "block";
    ts_text_3.style.display = "block";
    ts_text_4.style.display = "block";   
   }    
        
    else if (training_sessions.checked == false){
    ts_text_1.style.display = "none";
    ts_text_2.style.display = "none";
    ts_text_3.style.display = "none";
    ts_text_4.style.display = "none";   
   }    
    
    if (openings.checked == true){
    open_text_1.style.display = "block";
    open_text_2.style.display = "block";
    open_text_3.style.display = "block";
    open_text_4.style.display = "block";   
   }    
        
    else if (openings.checked == false){
    open_text_1.style.display = "none";
    open_text_2.style.display = "none";
    open_text_3.style.display = "none";
    open_text_4.style.display = "none";   
   }      
      
   if (placement.checked == true){
    pl_text_1.style.display = "block";
    pl_text_2.style.display = "block";
    pl_text_3.style.display = "block";
    pl_text_4.style.display = "block";
    pl_text_5.style.display = "block";
    pl_text_6.style.display = "block";
    pl_text_7.style.display = "block";
    pl_text_8.style.display = "block";
    pl_text_9.style.display = "block";
    pl_text_10.style.display = "block";
    
  } else if (placement.checked == false){
    pl_text_1.style.display = "none";
    pl_text_2.style.display = "none";
    pl_text_3.style.display = "none";
    pl_text_4.style.display = "none";
    pl_text_5.style.display = "none";
    pl_text_6.style.display = "none";
    pl_text_7.style.display = "none";
    pl_text_8.style.display = "none";
    pl_text_9.style.display = "none";
    pl_text_10.style.display = "none";
    
  }   
  
    if (companies.checked == true){
    cmp_text_1.style.display = "block";
    cmp_text_2.style.display = "block";
    cmp_text_3.style.display = "block";
    cmp_text_4.style.display = "block";   
   }    
        
    else if (companies.checked == false){
    cmp_text_1.style.display = "none";
    cmp_text_2.style.display = "none";
    cmp_text_3.style.display = "none";
    cmp_text_4.style.display = "none";   
   } 
  
   if (Qualified_candidates.checked == true){
    qc_text_1.style.display = "block";
    qc_text_2.style.display = "block";
    qc_text_3.style.display = "block";
    qc_text_4.style.display = "block";   
   }    
        
    else if (Qualified_candidates.checked == false){
    qc_text_1.style.display = "none";
    qc_text_2.style.display = "none";
    qc_text_3.style.display = "none";
    qc_text_4.style.display = "none";   
   }
   
   if (Course_enrolement.checked == true){
    ce_text_1.style.display = "block";
    ce_text_2.style.display = "block";
    ce_text_3.style.display = "block";
    ce_text_4.style.display = "block";   
   }    
        
    else if (Course_enrolement.checked == false){
    ce_text_1.style.display = "none";
    ce_text_2.style.display = "none";
    ce_text_3.style.display = "none";
    ce_text_4.style.display = "none";   
   }
   
   if (session_enrolement.checked == true){
    se_text_1.style.display = "block";
    se_text_2.style.display = "block";
    se_text_3.style.display = "block";
    se_text_4.style.display = "block";   
   }    
        
    else if (session_enrolement.checked == false){
    se_text_1.style.display = "none";
    se_text_2.style.display = "none";
    se_text_3.style.display = "none";
    se_text_4.style.display = "none";   
   }
   
   if (company_openings.checked == true){
    co_text_1.style.display = "block";
    co_text_2.style.display = "block";
    co_text_3.style.display = "block";
    co_text_4.style.display = "block";   
   }    
        
    else if (company_openings.checked == false){
    co_text_1.style.display = "none";
    co_text_2.style.display = "none";
    co_text_3.style.display = "none";
    co_text_4.style.display = "none";   
   }
   
   if (filled_openings.checked == true){
    fo_text_1.style.display = "block";
    fo_text_2.style.display = "block";
    fo_text_3.style.display = "block";
    fo_text_4.style.display = "block";   
   }    
        
    else if (filled_openings.checked == false){
    fo_text_1.style.display = "none";
    fo_text_2.style.display = "none";
    fo_text_3.style.display = "none";
    fo_text_4.style.display = "none";   
   }
        
}
  


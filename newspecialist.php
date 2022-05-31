<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newspecialist.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #f4f1fa;">

    <!--nav area start-->
    <div class="topnav">
        <a class="active" href="index2.php">Home</a>
        <form >

        <input onkeyup="showResult(this.value)" type="text" placeholder="Search.." > 
        <ul class="result_Box" id="result"></ul>

        </form>
        <!-- <input type="text" placeholder="Search.."> -->
      </div>
    <!--nav area ends-->
    
<div class="container profile-page">
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://img.freepik.com/free-vector/doctor-icon-avatar-white_136162-58.jpg"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">General Physician</h2>
                            <p>Cold,flu,fever,vomiting,infections,<br>headaches or any other general health issues.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Medicine/General Physician">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://www.iconpacks.net/icons/2/free-medicine-icon-3260-thumb.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Internal Medicine</h2>
                            <p>Prevention, diagnosis, and treatment <br>of adults across the complex illness..</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Internal Medicine">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://static.thenounproject.com/png/2007377-200.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Child Care/Pediatrics</h2>
                            <p>Any children's health related issues including<br> physical, behavior and mental health.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Child Care/Pediatrics">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>                
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://cdn-icons-png.flaticon.com/512/1466/1466976.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Dental Care/Dentistry</h2>
                            <p> Diagnosis,management,and treatment of defects and injuries related to the teeth and gums.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Dental Care/Dentistry">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>               
                    </div>
                </div>                    
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://primehospitalpatiala.com/wp-content/uploads/2021/07/gynecology-icon-6.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Gynecology</h2>
                            <p>Any women's health related issues including pregnancy, <br>menstruction,fertility issues,hormone disorders.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Gynecology">
		  <button type="submit" class="btn btn-primary btn-primary  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>             
                    </div>
                </div>                    
            </div>
        </div>
        
        
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://www.freeiconspng.com/thumbs/cardiology-icon-png/heart-cardiology-icon-png-30.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Heart/Cardiology</h2>
                            <p> Diagnosis,treatment of congential heart defects,coronary artery disease,<br>heart failure,and valvular heart disease.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Heart/Cardiology">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>               
                    </div>
                </div>                    
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://cdn0.iconfinder.com/data/icons/cosmo-medicine/40/lungs-512.png"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Lungs/Pulmonology</h2>
                            <p>Diagnosis,treatment and preventation of diseases affecting the <br> and respiratory tract.</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Lungs/Pulmonology">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>               
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="card profile-header">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="profile-image float-md-right">            
                               <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7O48GzWdiGld8EicFKA8pDRdsJlZYJQih2Q&usqp=CAU"
                                alt="Healthcare"
                                loading="lazy"
                                class="project-pic"
                              /> 
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="m-t-0 m-b-0">Cancer/Oncology</h2>
                            <p> Oncology is branch of medicines that deals with the preventation,diagonis,and <br>treatment of cancer</p>
                            <div>
                            <form action="list_doctors.php" method="post">
          <input type="hidden" name="doctor_specialist" value="Cancer/Oncology">
		  <button type="submit" class="btn btn-primary btn-round  " role="button">See Doctors</button>
		  </form>
                                <!-- <button class="btn btn-primary btn-round">See Doctors</button> -->
                            </div>
 
                        </div>               
                    </div>
                </div>                    
            </div>
        </div>

	</div>
</div>
</body>

<script type="text/javascript" src="searchscript.js"></script>
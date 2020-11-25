<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Registration</title>
    <link href="register.css" type="text/css" rel="stylesheet">
  </head>
 
 
 
  <body>
    <div class="header">
      <h1> Online Exam Portal</h1>

    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-6">

          </div>
            <div class="col-md-6">
              <h3>Registration Form</h3>
                       
             
              <form>
                <!--email-->
                <div class="form-group row">
                  <label for="email" class="col-md-2 col-form-label">Email</label>
                  <div class="col-md-10">
                  <input type="email" class="form-control" >
                  </div>
                  
                </div>
                <!--password-->
                <div class="form-group row">
                  <label for="password" class="col-md-2 col-form-label">Password</label>
                  <div class="col-md-10">
                  <input type="password" class="form-control" >
                  </div>
                  
                </div>
                 <!--confirm password-->
                 <div class="form-group row">
                  <label for="confirmpassword" class="col-md-2 col-form-label">Confirm Password</label>
                  <div class="col-md-10">
                  <input type="password" class="form-control" >
                  </div>
                  
                </div>
                <!--usertype-->
                <div class="form-group row">
                
                  <label for="usertype" class="col-md-2 col-form-label">User Type</label>
                  <div class="form-group col-md-10">
                  <select id="usertypes" class="form-control">
                    <option selected>Choose...</option>
                    <option>Student</option>
                    <option>Instructor</option>
                    <option>Administrator</option>

                  </select>
                </div>
                </div>
            
                 <!--name-->
                 <div class="form-group row">
                  <label for="name" class="col-md-2 col-form-label">Name</label>
                  <div class="col-md-10">
                  <input type="text" class="form-control" >
                  </div>
                  
                </div>
                 
                <!--Branch-->
                <div class="form-group row">
                
                  <label for="branch" class="col-md-2 col-form-label">Branch</label>
                  <div class="form-group col-md-10">
                  <select id="branch" class="form-control">
                    <option selected>Choose...</option>
                    <option>GATE</option>
                    <option>NET</option>
                    

                  </select>
                </div>
                </div>

                <!--Gender-->
                <div class="form-group row">
                  <label for="gender" class="col-md-2 col-form-label">Gender</label>
                 <div class="col-md-3">
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender"  value="male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender"  value="female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                </div>
                <div class="col-md-4"></div>

                


                <button type="submit" class="btn btn-primary">Submit</button>
                
               
               
              </form>

              
        </div>
    </div>
    </body>
    </html>
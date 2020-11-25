<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
    <link href="{{asset('css/login.css')}}" type="text/css" rel="stylesheet">
  </head>
 
 
 
  <body>
    <img src="{{asset('images/1.png')}}">
    <div class="header">
      <h1> Online Exam Portal</h1>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          

        </div>
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label> 
              <span class="psw"><a href="forgot.html">Forgot Password</a></span> 
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">User Type</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Student</option>
                <option>Administrator</option>
                <option>Instructor</option>
              
              </select>
            </div>

         <button type="submit" class="btn btn-primary">Login</button>
          </form>
          <br>
          <p>New User?  <a href="register.html">Register Here</a></p>


        </div>
       
      </div>
    </div>
  
      
  

  </body>
</html>
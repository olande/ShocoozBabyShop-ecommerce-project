
<!DOCTYPE html>
<html>
<head>
    <title>ShacozBabyShop</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <style>
        body{
          background-color: #ADD8E6; 
                  }

                  form{
                    margin-left: 33%;
                    margin-top: 30px;
                  }
                  input[type=email],input[type=password] {

                         width:35%;
                          padding: 12px 20px;
                          margin: 8px 0;
                          box-sizing: border-box;
                          border: 3px solid #ccc;
                          -webkit-transition: 0.5s;
                          transition: 0.5s;
                          outline: none;
                          margin-left: 30px;
                    }
                    input[type=submit]{
                          width:35%;
                          padding: 12px 20px;
                          margin: 8px 0;
                          box-sizing: border-box;
                          border: 3px solid #ccc;
                          -webkit-transition: 1s;
                          transition: 0.5s;
                          outline: none;
                          margin-left: 30px;
                          border-radius: 15%;
                          background-color: #4CAF50;

                    }
                    h2{
                        text-align: center;
                    }
    </style>
</head>
<body>
    <h2>CUSTOMER LOGIN FORM</h2>
            <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form method="post" action="login.php">
                       <label style=" margin-left: 3%" ><b>Email</b></label>
                       <br>
                        <input type="email" name="email" placeholder="Email">
                        <br>
                            <label  style=" margin-left: 3%" ><b>Password</b></label>
                              <br>
                        <input type="password" name="password" placeholder="Password">
                         <br>
                         <input class="btn btn-primary" type="submit" name="login" value="Login">
                        </form>
       

</body>
</html>

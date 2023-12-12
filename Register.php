<html>
    <head>
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title></title>
        <style>
            img{
                width: 100%;
                height: 100%;
            }
            table{
                position:absolute;
                top:100px;
                left: 480px;
                
            }
            td{
                text-align: center;
                font-size: 30px;
            }
            a{
                text-decoration: none;
                color: blue;
            }
            #a{
                border-radius: 12px;
                font-size: 25px;
            }
            .c{
                height: 7%;
                width: 8%;
                position: absolute;
                top: 10px;
                left: 800px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
                
            }
            .d{
                position: absolute;
                top: 20px;
                left: 930px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            }
            .e{
                position: absolute;
                top: 20px;
                left: 1030px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            
            }
            .f{
                position: absolute;
                top: 20px;
                left: 1120px;
                background: transparent;
                opacity:1;
                font-size: 25px;
                border:none;
            }
            .g{
                position:absolute;
                top: 20px;
                left:25px;
                background: transparent;
                opacity:1;
                font-size: 30px;
                font-size: 25px;
                border:none;

            }
            h3{
                position: absolute;
                bottom: 640px;
                left: 30px;
                font-size: 30px;
                color: navy;
            }
            .i{
                position: absolute;
                bottom: 615px;
                left: 70px;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <img src="C:\Users\mdres\OneDrive\Desktop\PROJECT1\2396722-1536x864-[DesktopNexus.com].jpg"> 
        <center>
            <form name="myform1" action="#" method="POST" onsubmit="validate()">
             <table>
               <tr>
                   <td colspan="2"><h1>Student Register Form</h1></td>
               </tr>
               <tr>
                   <td>
                       Name:
                   </td>
                   <td><input name="name" type="text" ></td>
               </tr>
               <tr>
                   <td><br>Email:</td>
                   <td><br><input name="email" type="email"></td>
               </tr>
               <tr>
                   <td><br>Phone No:</td>
                   <td><br><input type="number" name="phone_no"></td>
               </tr>
               <tr>
                   <td><br>
                       Username:
                   </td>
                   <td><br><input name="username" type="text"></td>
               </tr>
               <tr>
                   <td><br>Password:</td>
                   <td><br><input name="password" type="password"></td>
               </tr>
               <tr>
                   <td>
                       <br><input id="a" type="Submit" name="submit" value="Register">
                   </td>
                   <td><br><input id="a" type="Reset" value="Cancel"></td>
               </tr>
               <tr>
                   <br><td colspan="2">Already have an Account?</td>
               </tr>
               <tr>
                   <br><td colspan="2"><a href="C:\Users\mdres\OneDrive\Desktop\PROJECT1\Login.html">Login</a></td>
               </tr>
             </table>
            </form>
           </center>
           <button class="c"><a href="C:\Users\mdres\OneDrive\Desktop\PROJECT1\Interface.html" style="color:black"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg>Home</a></button>
          <button class="d">About</button>
          <button class="e">Help</button>
          <button class="f">Contact Us</button>
          <h3>Academic</h3>
          <p class="i">Portal</p>
           <script>
            function validate(){
                var a=document.myform1.name1.value;
                var b=document.myform1.email.value;
                var c=document.myform1.phone_no.value;
                var d=document.myform1.username.value;
                var e=document.myform1.password.value;
                if(a==""||a==null){
                    alert("Name should not be empty");
                }
                else if(b==""||b==null){
                    alert("Email should not be empty ");
                
                }
                else if(c==""|c==null){
                    alert("Number should not be empty ");
                }
                else if(d==""||d==null){
                    alert("Username should not be empty");
                }
                
                else if(e==""||e==null){
                    alert("Password should not be empty");
                }
                else if(e.length<5){
                    alert("Password must be greater than 5 digits");


                }
            }
           </script>
        </body>
    </html>


    <?php
    error_reporting(0);
    include("Connect.php");
    if ($_POST['submit']) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO student_registration values('$name','$email','$phone_no','$username','$password')";
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo "Data is inserted into database";
        } else {
            echo "Data is not inserted";
        }
    }
    ?>

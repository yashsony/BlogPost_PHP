
<style>
    *
    {
        font-family:calibri;
    }

    h2
    {
        letter-spacing:3px;
    }

    span
    {
        font-weight:bold;
        line-height:30px;
    }
    body
    {
        background:rgba(240,240,240,1);
    }

    .flex-container
    {
        display:flex;
        justify-content:center;
        align-items:center;
        height:100%;
    }

    .box
    {
        background:rgba(240,240,240,1);
        padding:30px;
        text-align:center;
        height:450px;
        width:350px;
        display:flex;
        align-items:center;
        justify-content:center;
        border-radius:5px;
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
    }

    input[name*="n"]
    {
        background:rgba(240,240,240,1);
        height :45px;
        width:300px;
        border:0px solid;
        border-radius:30px;
        font-size:18px;
        text-indent:20px;
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
        outline:0px;
        color:royalblue;
        font-weight:600;
    }

    input[type="submit"]
    {
        background:rgba(240,240,240,1);
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
        border:0px solid;
        border-radius:30px;
        font-weight:600;
        height :45px;
        width:150px;
        font-size:18px;
        letter-spacing:2px;
        color:royalblue;
        outline:0px;
    }

    input[name="n1"]:focus, input[name="n2"]:focus, input[name="b1"]:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
    }


    a
    {
        background:rgba(240,240,240,1);
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
        border:0px solid;
        border-radius:30px;
        font-weight:600;
        height :45px;
        width:150px;
        padding:12px;
        padding-left:37px;
        padding-right:37px;
        font-size:18px;
        letter-spacing:2px;
        color:red;
        outline:0px;
        text-decoration:none;
    }

    a:active
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(255,0,0,0.05);
    }

    .animate
	{
		animation: a1 0.2s ease-in-out;
	}
	
	
	
	@keyframes a1
	{
		0%
		{
            transform:translate(0px,-5px);
            opacity:0.3;
        }
		
		100%
		{
            transform:translate(0px,0px);
            opacity:1;
		}
	}
</style>

<?php
     session_start();

    if(isset($_SESSION["username"]))
    {
        header("Location:p5.php");
    }

     $x = "";
     $y = "";

     $username = "param";
     $password = "123";

    $conn = mysqli_connect("localhost","root","","laravel1");
    if(!$conn)
    {
        die ("Error to connect : ".mysqli_connect_error());
    }

     if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $a = $_POST["n1"];
            $b = $_POST["n2"];

            $s = "select * from users where Username = '$a' ";
            $result = mysqli_query($conn,$s);
            
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                     if(($row["Username"]==$a)&&($row["Password"]==$b))
                     {
                        $_SESSION["username"] = $a;
                        $_SESSION["password"] = $b;
                        $_SESSION["name"] = $row["Name"];
                        header("Location: p5.php");
                        exit;
                     }
                }
            }


            if(empty($a))
            {
                $x = "Required";
            }

            if(!empty($a))
            {
                $x = "Invalid Username";
            }

            if(!empty($b))
            {
                $y = "Invalid Password";
            }

            if(empty($b))
            {
                $y = "Required";
            }


            
        mysqli_close($conn);    
        }
?>
<body>
   <div class="flex-container">

    <div class="box animate">
        
        <form method = "post" spellcheck="false" action = "<?php echo $_SERVER['PHP_SELF'] ?>" autocomplete="off">

        <h2> LOG IN </h2><br>

        <span style="color:red"> <?php echo $x ?> </span> <br>
        <input type = "text" name = "n1" placeholder="Username" maxlength="10">
        <br><br>

        <span style="color:red"> <?php echo $y ?> </span> <br>
        <input type = "password" name = "n2" placeholder="Password" maxlength="10">
        <br><br><br>

                 <input type = "submit" name = "b1">  <br><br>
                 
                 <p style="line-height:30px">Dont Have an Account ?</p>           
                 
                 <a href="p3.php"> Sign Up </a>
        </form>
    </div>
   </div>
</body>


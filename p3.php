<style>
    *
    {
        font-family:calibri;
    }
    
    .flex-container
    {
        display:flex;
        justify-content:space-around;
        align-items:center;
        height:100%;
        flex-wrap:wrap;
    }

    body
    {
        background:rgba(240,240,240,1);
    }

    .box1
    {
        height:500px;
        width:400px;
        margin:30px;
        display:flex;
        justify-content:center;
        align-items:center;
        
        flex-direction:column;
        background:rgba(240,240,240,1);
        border-radius:5px;
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
    }

    .alignment
    {
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:row;
        flex-wrap:wrap;
    }



    input[name*="n"],select
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

    input[type="date"]
    {
        text-indent:10px;
        font-family:calibri;
    }

    
    input[type="date"]::-webkit-inner-spin-button,
    input[type="date"]::-webkit-calendar-picker-indicator
    {
    -webkit-appearance: none;
    }

    span
    {
        color:red;
        font-weight:bold;
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
        text-align:center;
        font-size:18px;
        letter-spacing:2px;
        color:red;
        outline:0px;
        text-decoration:none;
        display:flex;
        justify-content:center;
        align-items:center;

    }

    a:active
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(255,0,0,0.05);
    }

    input[name*="n"]:focus, input[type="submit"]:focus, select:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
    }


</style>



<?php
    $x="";
    $y="";
    $z="";
    $mobile="";
    $username="";
    $password="";

    $conn = mysqli_connect("localhost","root","","laravel1");
    if(!$conn)
    {
        die ("Error : ".mysqli_connect_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = (int)substr($b,0,4);
        $d = $_POST["n4"];
        $e = $_POST["n5"];
        $f = $_POST["n6"];
        $g = $_POST["n7"];
        $h = $_POST["n8"];
        $i = $_POST["n9"];

        /*echo $a."<br>";
        echo $b."<br>";
        echo $d."<br>";
        echo $e."<br>";
        echo $f."<br>";
        echo $g."<br>";
        echo $h."<br>";
        echo $i."<br>";*/
        


        if(empty($a))
        {
            $x = "Required";
        }
        else if(!preg_match("/^[A-Za-z]{3}[A-Za-z ]+$/",$a))
        {
            $x = "Invalid Name";
        }
        else
        {
            $x = "Correct";
        }

        if(empty($b))
        {
            $y = "Required";
        }
        else if($c>2003)
        {
            $y = "Above 18 Required";
        }
        else
        {
            $y = "Correct";
        }

        if(empty($d))
        {
            $z = "Required";
        }
        else if(!preg_match("/^[0-9]{4}[0-9]+$/",$d))
        {
            $z = "Invalid Pin";
        }
        else
        {
            $z = "Correct";
        }

        if(empty($e))
        {
            $mobile = "Required";
        }
        else if(!preg_match("/^[0-9]{10}$/",$e))
        {
            $mobile = "Invalid Number";
        }
        else
        {
            $mobile = "Correct";
        }

        if(empty($f))
        {
            $username = "Required";
        }
        else if(!preg_match("/^[A-Za-z0-9]+$/",$f))
        {
            $username = "Invalid Username";
        }
        else
        {
            $username = "Correct";
        }

        if(empty($g))
        {
            $password = "Required";
        }
        else if(!preg_match("/^[A-Za-z0-9@]{7}[A-Za-z0-9@]+$/",$g))
        {
            $password = "Invalid Password";
        }
        else
        {
            $password = "Correct";
        }

        if(($x==$y)&&($y==$z)&&($z==$mobile)&&($mobile==$username)&&($username==$password)&&($password=="Correct"))
        {
            $k = "select * from users where Username = '$f'";
           
                        $s = "insert into users(Name,Username,Password,DOB,State,City,Pin,Mobile) values ('$a','$f','$g','$b','$h','$i','$d','$e')";
                        $request = mysqli_query($conn,$s);
                        if($request)
                        {
                            header("Location: p4.php");
                        }
                        else
                        {
                            $username = "Already Taken";
                        }
        }        
            
            
        }
        
        
    
    
?>

<body>

    <div class="flex-container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" autocomplete="off" spellcheck="false">

        <div class="alignment">

            <div class="box1">
                <h2> Personal Details</h2><br>
                <span style="transform:translate(0px,-5px)"><?php echo $x ?></span>
                <input type = "text" name = "n1" placeholder="Full Name" maxlength=15 value="<?php if(!empty($a)) echo $a ?>"><br>

                <span style="transform:translate(0px,-5px)"><?php echo $y ?></span>
                <input type = "text" name = "n2" placeholder="DOB" min="1980-01-01" value="<?php if(!empty($b)) echo $b ?>" onfocus="this.type='date'" onblur="this.type='text'" max="2010-31-12"> <br>   

                
                <select name="n8">
                    <option>Punjab</option>
                </select><br>

                <select name="n9">
                    <option>Jalandhar</option>
                    <option>Phagwara</option>
                    <option>Ludhiana</option>
                    <option>Hoshiarpur</option>
                    <option>Kapurthala</option>
                    <option>Amritsar</option>
                </select><br>

                <span style="transform:translate(0px,-5px)"><?php echo $z ?></span>
                <input type = "text" name = "n4" placeholder="Pin Code" maxlength=8 value="<?php if(!empty($d)) echo $d ?>"><br>             
            </div>

            <div class="box1">
            <h2> Account Details</h2><br>

                <span style="transform:translate(0px,-5px)"><?php echo $mobile ?></span>
                <input type = "text" name = "n5" placeholder="Mobile Number" maxlength=10 value="<?php if(!empty($e)) echo $e ?>"><br>

                <span style="transform:translate(0px,-5px)"><?php echo $username ?></span>
                <input type = "text" name = "n6" placeholder="Username" maxlength=10 value="<?php if(!empty($f)) echo $f ?>"><br>
                
                <span style="transform:translate(0px,-5px)"><?php echo $password ?></span>
                <input type = "password" name = "n7" placeholder="Password" maxlength=10 value="<?php if(!empty($g)) echo $g ?>"><br>
                
                <input type="submit"><br>
                <a href="p2.php"> Go Back </a>
            </div>

        </div>
        </form>

    </div>
    
</body>
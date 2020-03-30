<style>

*
{
    font-family:calibri;
}

.flex-container
    {
        display:flex;
        justify-content:center;
        align-items:center;
        height:85%;
        flex-wrap:wrap;
    }

    .box
    {
        display:flex;
        justify-content:center;
        align-items:center;
        height:350px;
        width:300px;
        background:red;
        flex-direction:column;
        background:rgba(240,240,240,1);
        border-radius:5px;
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
        margin:20px;
    }

    body
    {
        background:rgba(240,240,240,1);
    }

    .sellbuy
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

    .sellbuy:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
    }

    .content
    {
        padding-left:40px;
        padding-right:40px;
        font-size:17px;
        text-align:center;
        transform:translate(0px,-10px);
    }

    .nav
    {
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
    }

    .logout:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(255,0,0,0.05); 
    }

    .logout
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
        color:red;
        outline:0px;
    }
</style>

<?php
    // session_start();
    // if(!isset($_SESSION["username"]))
    // {
    //     header("Location:p2.php");
    // }
    // $conn = mysqli_connect("localhost","root","","laravel1");

    // $e=" <h1 style='color:royalblue'> ".$_SESSION["name"]."</h1>";

    // if($_SERVER["REQUEST_METHOD"]=="POST")
    // {
    //     $a = $_POST["b1"];
        
    //     if($a == "Log Out")
    //     {
    //         session_destroy();
    //         header("Location:p2.php");
    //     }

        if($a == "SELL")
        {
            header("Location:p6.php");
        }

        if($a == "BUY")
        {
            header("Location:p8.php");
        }

        if($a == "VIEW")
        {
            header("Location:p9.php");
        }
    

?>


<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <div class="nav">
        
    <h1>Welcome</h1> &nbsp;  &nbsp;
    <?php echo $e ?> 
    <input style="margin-left:20px; margin-right:20px;" class="logout" type="submit" value="Log Out" name="b1">
        
    </div>
    
    <div class="flex-container">        

        <div class="box">
            <img src="sell.png" style="height:100px; width:100px">
            <h1> SELL </h1>
            <p class="content"> Now you can Sell your books at your own rate. </p>
            <input type="submit" value="SELL" name="b1" class="sellbuy">
        </div>

        <div class="box">
            <img src="buy.png" style="height:100px; width:100px">
            <h1> BUY </h1>
            <p class="content"> Now you can Buy books at cheaper rates than market. </p>
            <input type="submit" value="BUY" name="b1" class="sellbuy">
        </div>

        <div class="box">
            <img src="books2.png" style="height:100px; width:100px">
            <h1> RECORDS </h1>
            <p class="content"> Check status of your Books that you have uploaded </p>
            <input type="submit" value="VIEW" name="b1" class="sellbuy">
        </div>

    </div>

    </form>
</body>
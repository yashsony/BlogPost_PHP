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
        min-height:85%;
        flex-wrap:wrap;
    }

    .box
    {
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:400px;
        width:300px;
        background:red;
        flex-wrap:wrap;
        margin:20px;
        flex-direction:column;
        background:rgba(240,240,240,1);
        border-radius:5px;
        box-shadow: -5px -5px 10px rgba(255,255,255,1),
                    5px 5px 15px rgba(05,05,05,0.1);
    }

    body
    {
        background:rgba(240,240,240,1);
    }

    input[type="button"]
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

   input[type="button"]:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
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
        color:red;
        outline:0px;
    }

   input[type="submit"]:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(255,0,0,0.05); 
    }

    p
    {
        line-height:0px;
        
    }

    h2
    {
        color:royalblue;
    }

    .nav
    {
        display:flex;
        justify-content:center;
        align-items:center;
        flex-wrap:wrap;
    }


</style>



<body>
    <div class="nav">
        
        <h1>Books for Sale</h1> &nbsp;  &nbsp;
        
        <a href="p5.php"><input style="margin-left:20px; margin-right:20px;" class="logout" type="submit" value="Back" name="b1"></a>
            
        </div>
    <div class="flex-container">
        

            <?php
                $conn = mysqli_connect("localhost","root","","laravel1");
                $s = "select * from posts";
                $request = mysqli_query($conn,$s);
                //$n = mysqli_num_rows($request);       for counting rows


                

                if(mysqli_num_rows($request)>0)
                {
                    while($row = mysqli_fetch_assoc($request))
                    {
                        $h1 = $row["Post_Name"];
                        $h2 = $row["Publisher_Name"];
                        $h3 = $row["Year"];
                        $h4 = $row["Username"];
                        $h5 = $row["Price"];

                        $q = "select * from users where Username = '$h4'";
                        $result = mysqli_query($conn,$q);
                        
                        
                        $answer = mysqli_fetch_assoc($result);
                        
                        $m1 = $answer["Name"];
                        $m2 = $answer["Mobile"];
                        $m3 = $answer["City"];

                            echo "<div class='box'>
                                <img src='book.png' style='height:100px; width:100px'>
                                <h2>".$h1." </h2>
                                <p><b>Seller : </b> ".$m1." </p>
                                <p><b>Publisher : </b> ".$h2." </p>
                                <p><b>Year : </b> ".$h3." </p>
                                <p><b>Price : </b> Rs. ".$h5." </p>
                                <p><b>Location : </b> ".$m3." </p>
                                <p><b>Contact : </b> ".$m2." </p>
                            </div>";
                        
                    }
                }

            ?>
            
        </div>
    </div>
</body>


<!--<div class="box">
            <img src="book.png" style="height:100px; width:100px">
            <h2> Book Name  </h2>
            <p><b>Publisher : </b> Pradeep </p>
            <p><b>Year : </b> 2008 </p>
            <p><b>Price : </b> Rs. 250 </p>
            <p><b>Contact : </b> paramvir800@gmail.com </p> -->
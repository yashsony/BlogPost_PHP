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
        height:100%;
        flex-wrap:wrap;
    }

    .box
    {
        display:flex;
        justify-content:center;
        align-items:center;
        height:600px;
        width:500px;
        background:red;
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
        color:red;
        outline:0px;
    }

   input[type="button"]:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(255,0,0,0.05); 
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

    span
    {
        color:red;
        font-weight:bold;
    }

    input[name*="n"]:focus, input[type="submit"]:focus, select:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
    }

</style>


<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" spellcheck="false" autocomplete="off">

    <div class="flex-container">
        <div class="box">
            <h2 style="letter-spacing:3px"> BOOK DETAILS  </h2><br>
           
            <span style="transform:translate(0px,-5px)"><?php echo $x ?></span>
            <input type = "text" name = "n1" placeholder="Book Name" maxlength=20 value="<?php if(!empty($a)) echo $a ?>"><br>
            
            <span style="transform:translate(0px,-5px)"><?php echo $y ?></span>
            <input type = "text" name = "n2" placeholder="Publisher Name" maxlength=20 value="<?php if(!empty($b)) echo $b ?>"><br>
            
            <span style="transform:translate(0px,-5px)"><?php echo $z ?></span>
            <input type = "text" name = "n3" placeholder="Year of Publish" maxlength=4 value="<?php if(!empty($c)) echo $c ?>"><br>
           
            <span style="transform:translate(0px,-5px)"><?php echo $price ?></span>
            <input type = "text" name = "n4" placeholder="Price for Sale" maxlength=5 value="<?php if(!empty($d)) echo $d ?>"><br>
            <br>

            <input type="submit"><br>
            <a href="p5.php"><input type="button" value="Back"></a><br>

        </div>
    </div>

    </form>
</body>
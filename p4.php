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
        height:300px;
        width:600px;
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
        color:royalblue;
        outline:0px;
    }

   input[type="button"]:focus
    {
        box-shadow: inset -5px -5px 15px rgba(255,255,255,1),
                    inset 5px 5px 10px rgba(05,05,05,0.1);
        background:rgba(00,100,205,0.05); 
    }


</style>

<body>
    <div class="flex-container">
        <div class="box">
            <h2> Your Account has been Successfully Created </h2><br>
            <a href="p2.php"><input type="button" value="Login"></a>
        </div>
    </div>
</body>
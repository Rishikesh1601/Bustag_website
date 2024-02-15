<?php
// include('navbar.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6234171f45.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <style>

.biling_invoice{
margin-left: 18rem;
font-weight: 600;
font-size: 1.7rem;
margin-top: 2rem;
position: relative;
top: 171px;

}
.biling_invoice_wrapper1{
font-size: 1.2rem;
margin-left: 3rem;
margin-top: 1rem;  
font-family: poppins;  
}
.biling_invoice_wrapper2{
display: flex;
flex-direction: column;
gap: 1rem;
position:relative;
bottom:91px;
}

#text1{
margin-left: 3rem;
margin-top: 8rem;
font-size: 1.2rem;
font-family: poppins; 
}
.part1{
margin-left: 2.5rem;
width: 480px;
height: 162px;
background-color: #FAFAFA;
border-radius: 1.5rem;
}
.part2{
width: 466px;
height: 98px;
border-radius: 0.8rem;
background-color: white;
box-shadow: 0.6px 0.6px 2px 1px #ccc;
display: flex;
}
#text2{
font-size: 1rem;
padding: 0.5rem;
margin-left: 1rem;
display: inline-block;
width: 100%;
color:black;
}
#text3{
margin-top: 9%;
font-size: 1rem;
margin-left: 1.5rem;
color: #787878;
display: inline-block;
width: 100%;
}
#text6{
    font-size: 15px;
    position: relative;
    top: 17px;
    left: -10px;
    color:black;
}
.part3{
padding: 1.5rem;
margin-left: 6rem;
display: flex;
}
#text4{
font-size: medium;
padding-left: 1.5rem;
color: black;
}
#btn{
color: white;
background-color: #98D353;
border-radius:8px;
font-size: medium;
border: none; 
padding: 0.25rem;
padding-left: 2rem;
padding-right: 2rem;
margin-left: 250px; 
margin-top:2%;
}
.biling_invoice_container1{
display: flex;
}

.downloadicon{
    /* width: 14%; */
    height: 27px;
    position: relative;
    top: 13px;
    cursor: pointer;
}

.downloadicon1{
    border: none;
    background: transparent;
    position: relative;
    top: -13px;
}
@media screen and (max-width: 720px) {

.biling_invoice{
margin-left: 2rem;
}
.text2{
padding: 1rem;
}
.part3{
margin-left: 0.1rem;
padding: 0.1rem;
margin-top: 1.3rem;
}
#btn{
margin-left: 5rem;
}
.part1{
width: 22rem;
}
.part2{
width: 22rem;
}
.biling_invoice_container1{
display: flex;
flex-direction: column;
gap: 1rem;
}
} 



#exicon{
    color: red;
    font-size: medium;
    position: relative;
    left: 194px;
    bottom: 26px;
}


.pending{
    font-size: medium;
    color: red;
    position: relative;
    /* top: 20px; */
    left: 220px;
    bottom: 51px;
}



#dbtn{
    position: relative;
    left: 150px;
    bottom: 23px;
    font-weight: bold;
}


@media only screen and (max-width: 767px) {
    .biling_invoice_wrapper2{
        display: flex;
        flex-direction: column;
        gap: 2rem;
        left: 0px;
        position: relative;
        left: -36px;
    }
    #dbtn{
        position: relative;
        left: 7px;
        bottom: 0px;
        font-weight: bold;
    }
    #btn{
        position: relative;
        left: 49px;
        margin-top: 10px;
    }
    .pending{
        font-size: medium;
        color: red;
        position: relative;
        left: 160px;
        bottom: 30px;
    }
    #exicon{
        color: red;
        font-size: medium;
        position: absolute;
        left: 180px;
        top: 320px;
    }
    .biling_invoice_wrapper1{
        font-size: 1.2rem;
        /* margin-left: 3rem; */
        margin-top: 1rem;
        font-family: poppins;
    }
    .latestbill{
        left: 32px;
        position: absolute;
    }
    .nobills{
        width: 100%;
        text-align: left;
        position: absolute;
        top: 310px;
        left: 40px;
    }
    .previousbills1{
        top: 80px;
        position: relative;
        left: -40px;
    }
    #text6{
        left:20px;
    }
    .downloadicon{
        left:28px;
    }
    
}



    </style>
</head>
<body>
<div class="biling_invoice">
        <p style="font-family:Poppins">Billing And Invoice</p>
    <div class="biling_invoice_wrapper1">
        <p class="latestbill">Latest Bills</p>
    </div>
    <div class="previousbills1">
            <div class="part1">
                <div class="part2">
                            <div>
                            <span id="text2">February 2023</span><br>
                            <span id="text3">16 Trips done</span>
                            </div>
                            <div class="part3">
                            <p id="text6">Download Invoice</p>
                            
                            <img class="downloadicon" src="images/download1.png" alt="download_icon">
                            
                            
                            </div>
                            
                </div>
                        <div>
                            <a id="text4" href="#" style="text-decoration:none;">View Invoice </span>
                            <button id="btn" style="background: #9E5EF4;">Pay</button>
                        </div>
            </div>
                    
     </div>

    <div class="biling_invoice_wrapper2">
        <p id=text1>Previous Bills</p>
        <div class="biling_invoice_container1">
            <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">January 2023</span><br>
                            <span id="text3">16 Trips done</span>
                            </div>
                            <div class="part3">
                            <p id="text6">Download Invoice </p>
                            <img class="downloadicon" src="images/download1.png" alt="download_icon">
                            </div>
                            
                        </div>
                        <div>
                            <!-- <span id="textv">View Invoice </span>

                            <button id="btn1">Pay</button> -->
                            <span id="text4">View Invoice </span>
                            <button id="btn" style="background: #9E5EF4;">Pay</button>
                            <i id="exicon" class="fa-solid fa-triangle-exclamation"></i>
                            <p class="pending">Pending</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">December 2022</span><br>
                            <span id="text3">16 Trips done</span>
                            </div>
                            <div class="part3">
                            <p id="text6">Download Invoice</p>
                            <img class="downloadicon" src="images/download1.png" alt="download_icon">
                            </div>
                            
                        </div>
                        <span id="text4">View Invoice </span>
                        <button id="btn">Paid</button>
                    </div>
                    
                </div>
                
            </div>

            
        </div>


        <div class="biling_invoice_container2">
        <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">November 2022</span><br>
                            <span id="text3">16 Trips done</span>
                            </div>
                            <div class="part3">
                            <p id="text6">Download Invoice</p>
                            <img class="downloadicon" src="images/download1.png" alt="download_icon">
                            </div>
                            
                        </div>
                        <span id="text4">View Invoice </span>
                        <button id="btn">Paid</button>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>

</div> 

</body>
</html>
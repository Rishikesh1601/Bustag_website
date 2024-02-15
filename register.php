<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6234171f45.js" crossorigin="anonymous"></script>
    <title>Signup</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="GOOGLE_SIGNIN_CLIENT_ID">

</head>
<style>
@import url('https://fonts.googleapis.com/earlyaccess/nats.css');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');
@font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
body{
    font-family: 'NATS', sans-serif;
    x-overflow:none;
}

.top_bar {
    display: flex;
    justify-content: space-between;
    /* align-items:; */

}

.top_bar img {
    /* margin-left:10px; */
    margin-top: -20px;
    width: 210px;
    height: auto;
}

.bg {
    position: absolute;
    margin-top: -10px;
    z-index: -1;

}
#home {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
   
    color:  #8081F9;
    background-color: #FFFFFF;
    border: none;
    margin-bottom: 10px;
}


.sign {
    background: #F8F8FF;
    box-shadow: 0px 0px 10px #C0C0FF;
    border-radius: 12px;
    width: 117px;
    height: 50px;
    border: none;
    margin-top:0.7rem;
    margin-right:0.7rem;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
    font-size: 25px;
    color: #8081F9;
    align-item;
    centre;
    margin-left:0.7rem;
}

.mobile img {
    width: 400px;
    height: 400px;
}

.col-sm-6 {
    display: flex;
    justify-content: center;
    align-items: center;

}

.col-sm-8 {
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
}

.col-sm-4 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.left_links {
    display: flex;
    justify-content: space-between;
    align-items: left;
    margin-right: 15%;
    flex-direction: column;
    padding: 20px;
}

.left_links span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 40px;
    /* or 133% */

    letter-spacing: 0.02em;

    color: #4F1963;

}

.right_links {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: -30px;
    flex-direction: column;
    z-index: -1;
    margin-bottom: -110px;
}

.right_links img {
    margin-bottom: -110px;
}

.play_store {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    padding: 20px;
}

.content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 20px;
}

.apple {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    background: #FFFFFF;
    border: 2px solid #817FF8;
    border-radius: 50px;
    width: 176px;
    height: 64px;
    margin-right: 10px;

    /* padding: 10px; */
}

.content p {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 90.84%;
    /* or 11px */

    color: #000000;
}

.content span {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 90.84%;
    /* or 11px */


    color: #000000;
}

.apple img {
    margin-top: -110px;
}

.play {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    background: #FFFFFF;
    border: 2px solid #817FF8;
    border-radius: 50px;
    width: 176px;
    height: 64px;
    margin-left: 10px;
}

.play p {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 12px;
    line-height: 90.84%;
    /* or 11px */

    color: #000000;
}

.play span {
    font-family: 'Calibri';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 90.84%;
    /* or 11px */


    color: #000000;
}

.play img {
    margin-top: -110px;
    margin-left: 10px;
}

.sform {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}

.bottom_logo {
    /* margin-left: 80px; */
    display: flex;
    justify-content: center;
    /* align-items: center; */
    flex-direction: column;
}

.bottom_logo img {
    margin-bottom: -110px;
}


.makeitflex{
    display:flex;
    gap:2rem;
    position:relative;
    left:70px;
}

.copy {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    /* line-height: 124.84%; */
    /* identical to box height, or 25px */
    color: #A6A6A6;
    margin-top: 60px;

}

.bottom_patch {
    margin-left: -500px;
    /* margin-right: -100px; */
    z-index: -1;
}

.social_links {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    padding: 10px;
}

.header_sigin {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
}

.header_sigin img {
    margin-bottom: -80px;
    width: 100px;
    height: 100px;
}

.header_sigin span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
    line-height: 89.84%;
    /* identical to box height, or 90px */


    color: #4F1963;

}

.gf_btns {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: row;
    padding: 10px;
}

.google {

    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;
    
}

.facebook {
    border: 1px solid #EAEAEA;
    border-radius: 15px;
    background: #FFFFFF;


}

.form_inputs {
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    flex-direction: column;
    padding: 5px;
    margin-left:30px;
}

#email {
    background: #F9F9FF;
    border: 1px solid #F9F9FF;
    border-radius: 15px;
    padding-left: 40px;
    width: 300px;
    height: 50px;
    margin: 10px;
}

.input_bar {
    background: #F9F9FF;
border: 1px solid #EAEAEA;
border-radius: 15px;
    padding-left: 40px;
    width: 300px;
    height: 50px;
    margin: 10px;
    color: #CDCDCD;
}

.left_column {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 10px;
}

.refferal_code {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 10px;
}

.blue_button {
    display: flex;
    justify-content: center;
    align-items: center;
    color: #FFFFFF;
    background: #4B99FB;
    width: 60px;
    height: 60px;
    border: 1px solid #EAEAEA;
    border-radius: 15px;
}

.ip_box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;


}

.ip_box img {
    z-index: 2;
    margin-right: -45px;

}

.ip_box i{
    z-index: 2;
    margin-right: -45px;
    color: #0968eddb;
}

.referral_text {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 121.34%;
    /* or 36px */

    text-align: right;

    color: #4F1963;
}

#name {
    border: 1px solid #EAEAEA;
}

#mobile {
    border: 1px solid #EAEAEA;
}

#email {
    border: 1px solid #EAEAEA;
}

#password {
    background: #F9F9FF;
    border: 1px solid #EAEAEA;
    border-radius: 15px;

    width: 300px;
    height: 50px;
    margin: 10px;
}

#retype_password {
    border: 1px solid #EAEAEA;
}

.check {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    padding: 10px;

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 121.34%;
    /* or 24px */


    color: #4B99FB;
}

.input_container {
    position: relative;
    padding: 0;
    margin: 0;
}

.input {
    height: 20px;
    margin: 0;
    padding-left: 30px;
}

.input_img {
    position: absolute;
    bottom: 8px;
    left: 10px;
    width: 10px;
    height: 10px;
}

.sign_up {
    background: #4B99FB;
border-radius: 15px;
    width: 130px;
    height: 50px;
    border: none;
    color: #FFFFFF;
    font-size: 22px;
}

.sign_btn_section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;

}

.sign_in_sec {
    margin-left: 30px;
}

.sign_in_sec span {

    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 15px;
    line-height: 121.34%;
    /* or 30px */

    text-align: right;

    color: #4B99FB;
}

.signwith {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    margin-top: 5px;
}

.blue_line {
    width: 46px;
    height: 5px;
    background: #4B99FB;
    border-radius: 1em;
}
@media screen and (max-width: 720px) {
    #home{
        background: #F8F8FF;
        display:none;
    }
    .sign{
        display:none;
    }
    #hr{
        display:none;
    }
    .makeitflex{    
        display: flex;
        flex-direction: column;
        position: relative;
        left: -9px;
        gap: 0px;
    }
    .sign_btn_section {
        position: relative;
        top: 20px;
    }
}

</style>

<body>
    <div class="top_bar">
        <div class="left">
            <div class="bg">
            <img src="images/Vector3.png" style="width:25rem">
            </div>
            <img src="images/logo1.png" style="margin-left:0.8rem;position:relative;top:-18px;">
        </div>
        <div class="right">
            <button id="home">Home</button>
            <button class="sign" onclick="window.location.href = 'login.php';">SignIn</button>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-6">

            <div class="sform">
                <div class="header_sigin">
                    <img src="images/Vectorsignup.png" alt="">
                    <span style="font-size: 100px;">Sign Up</span>

                </div>

                
                
                <div class="form_inputs">
                    <form method="post" action="register.php">
                      <?php include "errors.php";  ?>

                      <div class="makeitflex">
                        <div>
                            <div class="ip_box">
                                <img src="images/account_name.svg" >
                                <input class="input_bar" name="username" id="name" type="text" placeholder="       Username">
                            </div>
                            <div class="ip_box">
                                <img src="images/account_name.svg" alt="">
                                <input class="input_bar" name="name" id="name" type="text" placeholder="       Full Name">
                            </div>
                            <div class="ip_box">
                                <img src="images/mobile_form.svg" alt="">
                                <input class="input_bar" name="mobile" id="mobile" type="text" placeholder="       Mobile">
                            </div>
                            <div class="ip_box">
                                <img src="images/letter.svg" alt="">
                                <input class="input_bar" name="email" id="email" type="text" placeholder="       Email">
                            </div>
                            <div class="ip_box">
                                <i class="fa-solid fa-venus-mars"></i>
                                <input class="input_bar" name="gender" id="gender" type="text"
                                    placeholder="Gender" style="padding-left:56px;">
                            </div>
                            
                        </div>
                        <div>
                            <div class="ip_box">
                                <img src="images/shield.svg" alt="">
                                <input class="input_bar" name="password" id="password" type="text"
                                    placeholder="Password">
                            </div>
                            <div class="ip_box">
                                <img src="images/shield.svg" alt="">
                                <input class="input_bar" name="password_2" id="retype_password" type="text"
                                    placeholder="Confirm Password">
                            </div>
                            <div class="ip_box">
                                <i class="fa-solid fa-passport"></i>
                                <input class="input_bar" name="aadhar" id="exampleInputAadharCard" type="text"
                                    placeholder="Aadhar Number" style="padding-left:56px;">
                            </div>
                            <div class="ip_box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <input class="input_bar" name="dob" id="dob" type="date"
                                    placeholder="DOB" style="padding-left:56px;">
                            </div>
                            <div class="sign_btn_section">
                            <div class="sign_btn">
                                <button type="submit" class="sign_up btn" onclick="verify()" name="reg_user" >Sign Up</button>
                            </div>
                            <div class="sign_in_sec" style="font-size: 25px;">
                                <span>Already have an account?</span>
                                <a href="login.php" style="text-decoration:none;" ><div style="color: #4F1963;margin-left:4rem;font-size: 20px;font-weight:500">Sign In</div></a>  
                            </div>
                            </div>
                        </div>
                      </div>
                           
                    </form>
                </div>

            </div>
        </div>
        <div class="col-sm-6 ">
            <div class="left_column">

                <div class="mobile d-none d-sm-block">
                    <img src="images/bus.png" style="width:500px;height:500px">
                </div>

                

                
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>

    </div>


    </div>
    <script type="text/javascript">
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();


        if (profile) {
            $.ajax({
                type: 'POST',
                url: 'social_login.php',
                data: {
                    id: profile.getId(),
                    name: profile.getName(),
                    email: profile.getEmail()
                }
            }).done(function(data) {
                window.location.href = 'index.php';
            }).fail(function() {
                alert("Something went wrong !!");
            });
        }


    }
    </script>
    <script type="text/javascript">
	// multiplication table
	const d = [
	    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
	    [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
	    [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
	    [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
	    [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
	    [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
	    [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
	    [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
	    [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
	    [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
	]

	// permutation table
	const p = [
	    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
	    [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
	    [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
	    [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
	    [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
	    [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
	    [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
	    [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
	]

	// validates Aadhar number received as string
	function validate(aadharNumber) {
	    let c = 0
	    let invertedArray = aadharNumber.split('').map(Number).reverse()

	    invertedArray.forEach((val, i) => {
	        c = d[c][p[(i % 8)][val]]
	    })

	    return (c === 0)
	}

	function verify() {
		var message = document.getElementById("message");
		var aadharNo = document.getElementById("exampleInputAadharCard").value;
		if(validate(aadharNo)) {
			// alert("Aadhar card number is valid");
		} else {
			alert("Your aadhar card no. not valid");
            document.getElementById("exampleInputAadharCard").value = "";
		}
	}
	</script>

    </div>
</body>

</html>
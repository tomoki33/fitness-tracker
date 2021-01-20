

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power</title>
    <script src="https://kit.fontawesome.com/b24313227f.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@700&display=swap');
/* CSS RESET */
*
{
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
    text-decoration: none;
    color: #312A26;
}

h1,h2,h3,h4,h5,h6
{
    font-family: 'Oswald', sans-serif;
}

p,input,label,span,a
{
    font-family: 'Open Sans', sans-serif;
}


    body
{
width: 100%;
}
/* Header Area */

header{
    background-color: gray;
    height: 80px;
}
nav
{
overflow: auto;
width: 85%;
margin-left: auto;
margin-right: auto;
}

nav h1
{
    width: 50%;
    float: left;
    font-size: 50px;
    text-align: left;


}

nav ul
{
width: 50%;
float: left;
text-align: right;
padding-top: 10px;
font-size: 25px;

}

nav li
{
    display: inline-block;
}

nav a
{
    font-family: 'Oswald', sans-serif;
color: #312A26;

}

nav a:hover
{
    color: #c7a17a;
}
/* header area */

/* banner area */
.banner
{
    background-image: url('./images/background1.jpg');
    height: 650px;
    background-size: cover;
 background-position: center;
 margin-bottom: 5%;
}

.banner-text
{
    width: 30%;
    position: relative;
    top: 20%;
    left: 7.5%;
}

.banner-text a:hover
{
    color: #c7a17a;
}

.banner-text h2
{
font-size: 80px;
text-transform: uppercase;
line-height: 75px;
}



.banner-text p
{
    font-style: italic;
    margin-bottom: 15px;
    color: gray;
}

.banner-text span
{
    color: red;
    font-family: 'Oswald', sans-serif;
}
.banner-text a
{
    background-color: #312A26;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    padding: 15px 20px;
    display: inline-block;
}

/* banner area */

/* sectinon1 */
.section1-box{
    margin-top: 5%;
    margin-bottom: 5%;
    text-align: center;
}

.section1-text h1{
    font-size: 50px;
    margin-bottom: 3%;

}

.section1-text p{
font-size: 25px;
color: gray;
}
/* sectinon1 */


/* section2 */

.mainrow{
    display: flex;
    margin-bottom: 5%;
}
.main-box{
display: flex;
width: 60.5%;

}
.main-text{
    position: relative;
text-align: center;
}

.main-text h2{
    font-size: 30px;
 margin-bottom: 8%;

}

.main-text p{
    font-size: 15px;

}
.main-img img{


width: 100px;
height: 100px;
}


.main-btn{
    background-color: #312A26;
    padding: 15px 20px;
    display: inline-block;
    position: relative;
    left: 10%;
    width: 80%;
    padding: 10px;
    margin: 10px;
}

.main-btn a:hover
{
    color: #c7a17a;
}

.main-btn a{
    background-color: #312A26;
    color: gray;
    font-size: 40px;
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
    padding: 15px 20px;
    display: inline-block;
    width: 100%;
    text-align: center;

}
/* section2 */

/* section3 */
.sns{
    background-image: url('./images/background2.jpg');
 


}
.sns h1,p{
    text-align: center;
    margin-top: 5%;
}

/* section3 */


/* section4 */


/* section4 */

/* section5 */
.ads
{
    overflow: auto;
    width: 85%;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 5%;
}

.ads-box
{
    width: 49.5%;
    float: left;
    height: 350px;
    background-size: cover;
    background-position: center;
    margin-top: 20px;
}

.ads2 .ads-box:nth-child(1)
{
    background-image: url('./images/training1.jpg');
    
}

.ads2 .ads-box:nth-child(2)
{
    background-image: url('./images/onlinetraining.jpg');
}

.ads2 .ads-box:nth-child(3)
{
    background-image: url('./images/nutrition.jpg');
}


.ads2 .ads-box:nth-child(4)
{
    background-image: url('./images/training2.jpg');
}

.ads2 .ads-box:nth-child(1),
.ads2 .ads-box:nth-child(3)
{
    margin-right:1%;
}

.ads2 .ads-box:nth-child(1),
.ads2 .ads-box:nth-child(2)
{
    margin-bottom: 1%;
}


.ads-text
{
    width: 30%;
    position: relative;
    top: 30%;
    left: 10%;
}

.ads-text h3
{
    color: lightblue;
    font-size: 32px;
    text-transform: uppercase;
    line-height: 35px;
    margin-bottom: 20px;
}

.ads-text a
{
    color:white;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: underline;
}




/* section5 */

/* finalsection */
.ads2{
    text-align: center;
}

.ads2 h1{
    font-size: 50px;
    margin-bottom: 3%;
text-align: center;
}

.ads2 p{
font-size: 25px;
color: gray;
}


/* finalsection */



/* footer */
.footer
{
    margin-top: 3%;
    background-color: #312A26;
    padding-top: 2.5%;
    padding-bottom: 2.5%;
}



.footer h2,
.footer p
{
    color: white;
}
/* footer */
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/Power.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- header area -->

    <header>
        <nav>
            <h1><a href="#">Power</a></h1>
            <ul>
                <li><a href="editUser.php">CreateAccount</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

    </header>
    <!-- header area -->

    <main>
        <!-- banner area  -->
        <div class="banner">
            <div class="banner-text">
                </span>
                <h2>TRAIN <span>SMARTER</span> GET <span>STRONGER</span> </h2>
                <p>Track your workouts, get better results, and be the best version of you. Less thinking, more
                    lifting.</p>
                <a href="editUser.php">Create an account</a>
            </div>
        </div>
        <!-- banner area  -->

      

<!-- section1 -->
        <div class="section1">
            <div class="section1-box">
                <div class="section1-text">
                    <h1>Simple, powerful, easy-to-use</h1>
                    <p> Power is designed to help you train better by getting out of your way. No unnecessary gimmicks
                        you’d
                        never use.</p>
                </div>
            </div>       
        </div>
<!-- section1 -->

<!-- section2 -->
        <div class="main">
            <div class="mainrow">
                <div class="main-box">
                    <div class="main-img">
                    <i class="fas fa-desktop fa-4x"></i>
                    </div>
                    <div class="main-text">
                        <h2> INTUITIVE AND CLEAN DESIGN </h2>
                        <p>Simple and clutter-free interface to keep you motivated during workout. Less thinking, more
                            moving.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. 
                        </p>
                    </div>
                </div>
                <br>
                <div class="main-box">
                    <div class="main-img">
                    <i class="fas fa-chart-line fa-4x"></i>

                    </div>
                    <div class="main-text">
                        <h2>TRACK YOUR PROGRESS</h2>
                        <p>keep track of everytrainig you did and make your trainig more efficient!Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. </p>
                    </div>
                </div>
                <br>

                <div class="main-box">
                    <div class="main-img">
                <i class="far fa-edit fa-4x"></i>
                    </div>
                    <div class="main-text">
                        <h2>HIT A NEW PERSONAL RECORD</h2>
                        <p>See your records in 1RM, Max Reps or Volume.
                            Want to use another metric? You can add your own.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. 
                        </p>
                    </div>
                </div>
            </div>
            <br>

            <div class="mainrow">
                <div class="main-box">
                    <div class="main-img">
                    <i class="far fa-comments fa-4x"></i>
                    </div>
                    <div class="main-text">
                        <h2>SHARE YOUR PROGRESS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum.  </p>
                    </div>
                </div>
                <br>

                <div class="main-box">
                    <div class="main-img">
                    <i class="fas fa-pencil-alt fa-4x"></i>
                    </div>
                    <div class="main-text">
                        <h2>GET A FITNESS KNOWLEDGE</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum. 
                             </p>
                    </div>
                </div>
                <br>

                <div class="main-box">
                    <div class="main-img">
                    <i class="far fa-calendar-alt fa-4x"></i>
                    
                    </div>
                    <div class="main-text">
                        <h2>FIND YOUR TRAINER</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent faucibus dolor ac nulla tincidunt condimentum.   </p>
                    </div>
                </div>
            </div>
                <br>
            <div class="main-btn">
                <a href="editUser.php">Create an account</a>
            </div>
        </div>
<!-- section2 -->

<!-- section3 -->
       <div class="sns">
            <h1>PERSONAL TRAINING</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis vestibulum vehicula. Aliquam placerat, purus non convallis bibendum, tortor augue facilisis nulla, a sollicitudin erat metus eu ex.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin mattis vestibulum vehicula. Aliquam placerat, purus non convallis bibendum, tortor augue facilisis nulla, a sollicitudin erat metus eu ex. </p>
       </div>
<!-- section3 -->
  

     

      

<!-- section4 -->
    <div class="container-fluid text-center p-5">
        <div class="row">
            <div class="col">
                <img class="rounded-circle w-25 h-25" src="images/profile4.jpeg" alt="">
                <h3>TRAINER 1</h3>
                <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id ex id
                    lectus luctus ultricies non
                    ac nisi. Suspendisse sed nunc orci. Nulla blandit aliquam quam, a porttitor purus iaculis ac.
                    Pellentesque eu orci eu lectus tincidunt dapibus. Suspendisse semper dui nec lectus luctus maximus.
                    Morbi sagittis, mi sed blandit vulputate, purus dolor aliquam neque, sed fringilla justo ante ut ex.
                    </p>
            </div>
            <div class="col">
                <img class="rounded-circle w-25 h-25" src="images/profile2.jpeg" alt="">
                <h3>TRAINER 2</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id ex id lectus
                    luctus ultricies non
                    ac nisi. Suspendisse sed nunc orci. Nulla blandit aliquam quam, a porttitor purus iaculis ac.
                    Pellentesque eu orci eu lectus tincidunt dapibus. Suspendisse semper dui nec lectus luctus maximus.
                    Morbi sagittis, mi sed blandit vulputate, purus dolor aliquam neque, sed fringilla justo ante ut ex.
                    </p>
            </div>
            <div class="col">
                <img class="rounded-circle w-25 h-25" src="images/profile5.jpeg" alt="">
                <h3>TRAINER 3</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id ex id lectus
                    luctus ultricies non
                    ac nisi. Suspendisse sed nunc orci. Nulla blandit aliquam quam, a porttitor purus iaculis ac.
                    Pellentesque eu orci eu lectus tincidunt dapibus. Suspendisse semper dui nec lectus luctus maximus.
                    Morbi sagittis, mi sed blandit vulputate, purus dolor aliquam neque, sed fringilla justo ante ut ex.
                    </p>
            </div>
        </div>
    </div>
<!-- section4 -->
<div class="main-btn">
                <a href="editUser.php">Create an account</a>
            </div>
<br>
            <!-- Ads Area 4 boxes -->
            <div class="ads ads2">
                <div class="ads-box">
                    <div class="ads-text">
                        <h3>PERSONAL TRAINING</h3>
                    </div>
                </div>
                <div class="ads-box">
                    <div class="ads-text">
                        <h3>ONLINE TRAINING</h3>
                    </div>
                </div>
                <div class="ads-box">
                    <div class="ads-text">
                        <h3>NUTRITION COACHING</h3>
                    </div>
                </div>
                <div class="ads-box">
                    <div class="ads-text">
                        <h3>GROUP SESSION</h3>
                    </div>
                </div>
            </div>

<!-- final section -->
        <div class="ads2">
            <h1>If you workout, Power is for you</h1>
            <p> Working out is for everyone. No matter who you are, Power can help you on your fitness
                journey.</p>
        </div>
<!-- final section -->

</main>

    

<!-- footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="logo">
                <h2>Power</h2>
            </div>
            <div class="copyright">
                <p>&copy; 2020 All Rights Reserved</p>
            </div>
        </div>
    </div>
<!-- footer -->




</body>


</html>


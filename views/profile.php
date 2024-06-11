<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/profile.css">

</head>
<body>
    <div class="container">
        <div class="Founder-details">
            <div class="img">
                <img src="img\Profile_picture.jpg" alt="">
            </div>
            <div class="Founder-name">
                <p>ResuMaker Founder</p>
                <h2>leardo Da Vinci</h2>

            </div>
            <div class="Founder-background">
                <p>Leonardo di ser Piero da Vinci was an Italian Renaissance polymath. According to data available online, Leonardo da Vinci invented the first professional profile in 1482, which we call as the résumé. The word Resume originated from French résumé“to summarize”, and from Latin resumere “to take back”.</p>

                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Read More</button>

            </div> 

        </div>
        <div class="edit-profile">
            <div class="navbar">
                <h2> Profile</h2>
                <p>Complete your Profile</p>
                <ul>
                    <li>Profile</li>
                    <li class="school">School/College Details</li>
                    <li>Experience and other</li>
                </ul>
            </div>
            <div class="form-container">
                <form action="">
                    <input type="text" id="Fname" placeholder="First Name"style="width:49%;">
                    <input type="text"id="Lname" placeholder="Last Name"style="width:49%;">
                    <input type="text" placeholder="User Contact" style="width:30%;">
                    <input type="email" placeholder="Email"style="width:30%;">
                    <input type="text"    placeholder="Git Link"style="width:30%;">
                    <input type="text" placeholder="Address"style="width:100%;">
                    <input type="number" placeholder="Age"style="width:100%;">

                <button type="button" class="btn btn-primary proceed" data-toggle="button" aria-pressed="false" autocomplete="off">Proceed</button>

                </form>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
             const btn = document.querySelector(".proceed");
             btn.addEventListener("click",()=>{
                window.location.href = "layout.php";
             })
        </script>
</body>
</html>
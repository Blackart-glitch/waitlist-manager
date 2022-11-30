<?php include'dashboard.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lobbyx</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="account.css">
    </head>
    <body>
        <!-- the body wrap contains the left nav and right nav of the page-->
        <div class="body_wrap">
            
            <div class="left_nav">
                <div class="profilepic">

                </div>
                <div class="acc_ID">
                        <p><?php echo "UID".$uid;?></p>
                </div>
                <div class="f_name">
                    <p><?php echo $f_name . " " . $l_name;?></p>
                </div>
                <div class="email">
                    <p><?php echo $email;?></p>
                </div>
                <div class="tel">
                    <p><?php echo $phone;?></p>
                </div>
                <div class="location">
                    <p><?php echo $state . " " . $country;?></p>
                </div>

                <h2>Joined waitlist</h2>

                <div class="waitlst">
                    <?php 
                    $i = 0;
                    while ($i < count($joiner)){
                        echo "<p>" . $joiner[$i] . "</p>";
                        $i++;
                    }
                    ?>
                </div>
                <a href=".php" target="blank">SCHEDULE</a>
            </div>
            <div class="right_nav">
                <!-- the top card of the right section of the page -->
                <div class="top_card">
                    <div class="search_bar">
                        <form method="post" action="" id="join-form">
                            <select name="code">
                            <?php 
                            $i = 0;
                            while ($i < count($joiner2)){
                            echo "<p>" . $joiner2[$i] . "</p>";
                            $i++;
                            }
                            ?>
                            <option value="YES">YES</option>
                            </select>
                            <input type="submit" name="join" value="JOIN">
                        </form>
                    </div>
                    <h2>Available waitlists</h2>
                    <div class="available_waitlist">        
                    <?php 
                    $i = 0;
                    while ($i < count($joiner2)){
                        echo "<p>" . $joiner2[$i] . "</p>";
                        $i++;
                    }
                    ?>
                    </div>
                </div>
                <!-- the top card ends here!! -->

                <!-- the bottom card of the right section of the page -->
                <div class="bottom_card">

                    <h2>Work profile</h2>
                    <label class="label">Display name</label><span><?php     echo   $name; ?> </span><br>
                    <label class="label">Display Title</label><span><?php    echo   $title; ?> </span><br>
                    <label class="label">Head count</label><span><?php       echo   $apps; ?> </span><br>
                    <label class="label">Reset timer</label><span><?php      echo   $avao; ?> </span><br>
                    <label class="label">Available online</label><span><?php echo   $avao; ?> </span><br>
                    <label class="label">Work Email</label><span><?php       echo   $zmail; ?> </span>

                    <a href="waitlist_create.php" target="blank">update the profile</a>
                </div>
                <!-- the bottom card ends here!! -->
            </div>
        </div>
    </body>
    <footer>
        <div class="contact">
            <h2>Contact support here</h2>
            <form method="post" action="">
                <input type="text" placeholder="Enter your full name" >
                <input type="email"placeholder="Your email">
                <input type="text" placeholder="Subject of the mail">
                <textarea placeholder="Your message here..." cols="40" name="message" >

                </textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="contactman">
            <p>images used were outsourced</p>
        </div>
    </footer>
</html>
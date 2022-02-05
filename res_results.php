<?php
session_start();
include("connection.php");
include("functions.php");


$sql = "SELECT * FROM score_science ORDER BY id DESC;";
$qstn = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="stylesheet" href="style_test.css">
</head>

<body>
    <header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
        <div class="navigation">
            <a href="home_home.php">Home</a>
            <a href="home_about.php">About</a>
            <a href="home_contact.php">Contact</a>
            <a href="log_logout.php">LOGOUT</a>
        </div>


    </header>

    <section>
        <div>
            <div id="container">
                <div id="mini-container">
                    <h2>EXAM SECTIONS</h2>
                    <br>
                    <div class="exam-section">
                        <p>SCIENCE</p>
                    </div>
                    <div class="exam-section">
                        <p>MATH</p>
                    </div>
                    <div class="exam-section">
                        <p>ENGLISH</p>
                    </div>
                    <div class="exam-section">
                        <p>FILIPINO</p>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="exam-test">
                <h1 style="padding-top: 10px; text-align:center;">COURSE RECOMMENDATION</h1>

                <div class="inform">
                    <?php
                    echo "Thank you for taking a part in this entrance exam, your exam results the recommended course 
                    are all written below.";
                    ?>
                </div>

                <!-- Display the results -->
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);
                    }
                    ?>
                    <!-- Printing the questions and choices -->
                    <div class="test_question">
                        <h2>RESULTS</h2>
                    </div>
                    <div class="test_choices">
                        <?php

                        //displayng scores by
                        //connecting to the database and get the latest data
                        echo "Science:  ", $row['science'], "/25<br>";
                        $res_science = $row['science'];

                        $sql = "SELECT * FROM score_math ORDER BY id DESC;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        echo "Math:     ", $row['math'], "/25<br>";
                        $res_math = $row['math'];

                        $sql = "SELECT * FROM score_english ORDER BY id DESC;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        echo "English:  ", $row['english'], "/25<br>";
                        $res_english = $row['english'];

                        $sql = "SELECT * FROM score_filipino ORDER BY id DESC;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        echo "Filipino: ", $row['filipino'], "/25<br>";
                        $res_filipino = $row['filipino'];

                        echo "<br>";

                        $total_score = $res_english + $res_filipino + $res_math + $res_science;
                        $percentage_score = ($total_score / 100) * 100;
                        echo "Total Score: ", $total_score, " / 100 <br>";
                        echo "Percentage: ", $percentage_score, "% (Passing Rate: 75%) <br><br>";

                        if ($percentage_score >= 75) { ?>
                            <h3 style="color: maroon;">YOU PASSED THE TEST!</h3>
                        <?php } else { ?>
                            <h3 style="color: maroon;">YOU FAILED THE TEST!</h3>
                        <?php }
                        ?>

                        <!-- COURSE RECOMMENDATION PART -->
                        <?php

                        //accessing the score for science test
                        $sql = "SELECT * FROM score_science;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        $score_science = $row['science'];

                        //accessing the score for math test
                        $sql = "SELECT * FROM score_math;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        $score_math = $row['math'];

                        //accessing the score for english test
                        $sql = "SELECT * FROM score_english;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        $score_english = $row['english'];

                        //accessing the score for filipino test
                        $sql = "SELECT * FROM score_filipino;";
                        $qstn = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($qstn);
                        $score_filipino = $row['filipino'];


                        //variables for each college courses
                        $BSBA = 0;
                        $BSA = 0;
                        $BSN = 0;
                        $BSP = 0;
                        $BSDevCom = 0;
                        $BSM = 0;
                        $BSEd = 0;
                        $BEEd = 0;
                        $BEEng = 0;
                        $BSCS = 0;
                        $BSF = 0;
                        $BSCrim = 0;
                        $BSBio = 0;
                        $BSPS = 0;
                        $BSE = 0;
                        $BSEE = 0;
                        $BSH = 0;
                        $BSLA = 0;
                        $BSS = 0;
                        $BSFA = 0;
                        $BSCG = 0;
                        $BSGE = 0;
                        $BSJ = 0;
                        $BSIT = 0;
                        $BSCW = 0;

                        //computation for which is to be recommended
                        //100% = 70
                        if ($score_math > $score_filipino) {
                            $BSBA = +18;
                            $BSA = +11;
                            $BSN = +1;
                            $BSP = +2;
                            $BSDevCom = +4;
                            $BSM = +3;
                            $BSEd = +3;
                            //   $BEEd =+ 3;
                            $BEEng = +19;
                            $BSCS = +15;
                            $BSF = +13;
                            $BSCrim = +1;
                            $BSBio = +2;
                            $BSPS = +2;
                            $BSE = +3;
                            $BSEE = +7;
                            $BSH = +8;
                            $BSLA = +10;
                            $BSS = +11;
                            $BSFA = +2;
                            $BSCG = +2;
                            $BSGE = +3;
                            $BSJ = +4;
                            $BSIT = +5;
                            $BSCW = +1;
                        }
                        if ($score_english > $score_math) {
                            $BSBA = +4;
                            $BSA = +4;
                            $BSN = +5;
                            $BSP = +5;
                            $BSDevCom = +7;
                            $BSM = +9;
                            $BSEd = +15;
                            //    $BEEd =+ 14;
                            $BEEng = +5;
                            $BSCS = +5;
                            $BSF = +5;
                            $BSCrim = +11;
                            $BSBio = +9;
                            $BSPS = +12;
                            $BSE = +14;
                            $BSEE = +18;
                            $BSH = +12;
                            $BSLA = +12;
                            $BSS = +13;
                            $BSFA = +5;
                            $BSCG = +6;
                            $BSGE = +3;
                            $BSJ = +7;
                            $BSIT = +6;
                            $BSCW = +2;
                        }
                        if ($score_filipino > $score_english) {
                            $BSBA = +2;
                            $BSA = +2;
                            $BSN = +2;
                            $BSP = +4;
                            $BSDevCom = +14;
                            $BSM = +14;
                            $BSEd = +19;
                            //   $BEEd =+ 19;
                            $BEEng = +5;
                            $BSCS = +6;
                            $BSF = +8;
                            $BSCrim = +12;
                            $BSBio = +14;
                            $BSPS = +4;
                            $BSE = +5;
                            $BSEE = +6;
                            $BSH = +7;
                            $BSLA = +14;
                            $BSS = +14;
                            $BSFA = +2;
                            $BSCG = +13;
                            $BSGE = +11;
                            $BSJ = +10;
                            $BSIT = +5;
                            $BSCW = +1;
                        }
                        if ($score_science > $score_math) {
                            $BSBA = +9;
                            $BSA = +9;
                            $BSN = +10;
                            $BSP = +8;
                            $BSDevCom = +14;
                            $BSM = +15;
                            $BSEd = +3;
                            //  $BEEd =+ 3;
                            $BEEng = +14;
                            $BSCS = +9;
                            $BSF = +14;
                            $BSCrim = +4;
                            $BSBio = +19;
                            $BSPS = +12;
                            $BSE = +15;
                            $BSEE = +5;
                            $BSH = +5;
                            $BSLA = +18;
                            $BSS = +17;
                            $BSFA = +15;
                            $BSCG = +11;
                            $BSGE = +15;
                            $BSJ = +15;
                            $BSIT = +12;
                            $BSCW = +18;
                        }
                        ?>
                    </div>
                </div>

                
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);
                    ?>
                        <div class="test_question">
                            <h2>COURSE RECOMMENDATION</h2>
                        </div>
                        <div class="inform" style="text-align: left; margin-left:0%">
                            <?php
                            echo "According to the results of your entrance exam, the course recommended to you is: ";
                            ?>
                        </div>


                        <!-- Code to compute for what should be number 1,2, so on -->
                        <div class="test_choices">

                        <div style="font-size: 19px; font-weight: bold; color:maroon; text-transform: uppercase;">
                            <?php
                            for ($i = 80, $j = 0; $i >= 0; $i--) {
                                if ($BSBA == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Business Administration (BSBA) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSA == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Accounting (BSA) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSN == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Nursing (BSN) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSP == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Psychology (BSP) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSDevCom == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Development Communications (BS DevCom) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSM == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Marketing (BSM) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSEd == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Education Major in Science (BSEd) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BEEd == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Elementary Education (BEEd) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BEEng == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in English Education (BE Eng) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSCS == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Computer Science (BSCS) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSF == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Finance (BSF) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSCrim == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Criminal Justice (BS Crim) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSBio == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Biology (BS Bio) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSPS == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Political Science (BSPS) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSE == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Economics (BSE) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSEE == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Electrical Engineering (BSEE) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSP == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Psychology (BSP) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSH == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in History (BSH) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSCG == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Commercial Art & Graphic Design (BSCG) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSGE == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in General Engineering (BSGE) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSJ == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Journalism (BSJ) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSIT == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Computer and Information Systems (BSIT) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                                if ($BSCW == $i) {
                                    //echo $j, ". ";
                                    echo "Bachelor of Science in Social Work (BSCW) -- ";
                                    echo ($i / 80) * 100, "% <br>";
                                    $j = 1;
                                    if ($j == 1) {
                                        break;
                                    }
                                }
                            }

                            ?>
                        </div>
                        </div>
                </div>
            <?php } ?>

            <br>

            <div class="inform">
                <a href="res_feedback.php">
                    <h4 id="button" style="margin-left: 35%; margin-top: -2%; width: 30%; background-color: #004526">SEND FEEDBACK</h4>
                </a>
                <a href="home_home.php">
                    <h4 id="button" style="margin-right: 29%; margin-top: -2%; background-color: #004526">GO BACK TO HOME</h4>
                </a>
            </div>

            </form>
            </div>

        <div id="container" style="height: 150px; margin-top: 1%;">
            <div id="mini-container" style="height: 150px;" ;>
                <br>
                <div class="exam-section" style="height: 50%; background-color:yellow">
                    <p>COURSE RECOMMENDATION</p>
                </div>
            </div>
        </div>
        </div>

        <br><br>

        <!-- FOOTER -->
        <footer>
            <div class="footsie1">
                <h3>Learn More</h2>
                    <a href="https://tinyurl.com/2p82s29s">
                        <p style="color:black;">What is an Online Exam</p>
                    </a>
                    <a href="https://www.speedexam.net/">
                        <p style="color:black;">Other online exam systems</p>
                    </a>
                    <a href="https://tinyurl.com/4htr72zd/">
                        <p style="color:black;">Research and articles</p>
                    </a>
            </div>
            <div class="logo">
                <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
            </div>
            <div class="footsie2">
                <h3>Contact</h2>
                    <a href="https://web.facebook.com/isucauayancampus">
                        <p style="color:black;">Facebook</p>
                    </a>
                    <a href="https://mail.google.com/mail/">
                        <p style="color:black;">Email</p><a>
                            <a href="home_contact.php">
                                <p style="color:black;">Phone</p>
                            </a>
                            <a href="https://instagram.com/">
                                <p style="color:black;">Instagram</p>
                            </a>
            </div>
            <div class="footsie3">
                <h3>About Us</h2>
                    <a href="home_about.php">
                        <p style="color:black;">Read</p>
                    </a>
            </div>
        </footer>
    </section>
</body>

</html>
<?php
session_start();
include("connection.php");
include("functions.php");

$sql = "SELECT * FROM test_filipino;";
$qstn = mysqli_query($con, $sql);

//submitting answers
$score_filipino = 0;
$ans1 = $_POST['ans1'] ?? null;
$ans2 = $_POST['ans2'] ?? null;
$ans3 = $_POST['ans3'] ?? null;
$ans4 = $_POST['ans4'] ?? null;
$ans5 = $_POST['ans5'] ?? null;
$ans6 = $_POST['ans6'] ?? null;
$ans7 = $_POST['ans7'] ?? null;
$ans8 = $_POST['ans8'] ?? null;
$ans9 = $_POST['ans9'] ?? null;
$ans10 = $_POST['ans10'] ?? null;
$ans11 = $_POST['ans11'] ?? null;
$ans12 = $_POST['ans12'] ?? null;
$ans13 = $_POST['ans13'] ?? null;
$ans14 = $_POST['ans14'] ?? null;
$ans15 = $_POST['ans15'] ?? null;
$ans16 = $_POST['ans16'] ?? null;
$ans17 = $_POST['ans17'] ?? null;
$ans18 = $_POST['ans18'] ?? null;
$ans19 = $_POST['ans19'] ?? null;
$ans20 = $_POST['an20'] ?? null;
$ans21 = $_POST['ans21'] ?? null;
$ans22 = $_POST['ans22'] ?? null;
$ans23 = $_POST['ans23'] ?? null;
$ans24 = $_POST['ans24'] ?? null;
$ans25 = $_POST['ans25'] ?? null;

if ($ans1 && $ans2) {
    header("Location: res_results.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exam Test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.00, maximum-scale=2.00, minimum-scale=1.00">
    <link rel="stylesheet" href="style_test.css">

    <!-- CODE FOR THE TIMER -->
    <script language="javascript">
        var tim;

        var min = 25;
        var sec = 00;
        var f = new Date();

        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Your started your Exam at " + f.getHours() + ":" + f.getMinutes();
        }

        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                tim = setTimeout("f2()", 1000);
            } else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        header("Location: filipino.php")
                    } else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = "Your Left Time  is :" + min + " Minutes ," + sec + " Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }

            }
        }
    </script>
</head>

<body onload="f1()">
    <header>
        <a href="https://isucauayan.edu.ph/"><img src="schoollogo.png" alt="logo" class="logo"></a>
        <form id="form1" runat="server">
            <div style="width:100%" ;>
                <h2>TIMER</h2>
                <div id="starttime"></div>
                <div id="endtime"></div>
                <div id="showtime"></div>
            </div>
        </form>
        <div class="navigation">
            <a href="log_logout.php">LOGOUT</a>
        </div>


    </header>

    <section style="background-color: white;">
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
                    <div class="exam-section" style="background-color: yellow;">
                        <p>FILIPINO</p>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="exam-test">
                <h1 style="padding-top: 10px; text-align:center;">FILIPINO TEST</h1>

                <div class="inform">
                    <?php
                    if ($score_filipino == 0) {
                        echo "Make sure to answer all 25 question before clicking the SUBMIT button below";
                    } else {
                        echo "Your answers have been saved, now click the PROCEED button to go to the next section";
                    }
                    ?>
                </div>

                <!-- THIS IS THE EXAM QUESTIONS-->
                <form action="test_filipino.php" method="POST">
                    <?php $score_filipino = 0; ?>

                    <!-- Question Number 1 -->
                    <div class="test_num">
                        <?php
                        if (mysqli_num_rows($qstn) > 0) {
                            $row = mysqli_fetch_assoc($qstn);

                            //check if the answer is correct                        
                            if ($ans1 == $row['correct_answer']) {
                                $score_filipino++;
                            }

                        ?>
                            <!-- Printing the questions and choices -->
                            <div class="test_question">
                                <?php
                                echo $row['question'], "<br>";
                                ?>
                            </div>
                            <div class="test_choices">
                                <input type="radio" name="ans1" value="A"> <?php echo $row['choice1'], "<br>"; ?>
                                <input type="radio" name="ans1" value="B"> <?php echo $row['choice2'], "<br>"; ?>
                                <input type="radio" name="ans1" value="C"> <?php echo $row['choice3'], "<br>"; ?>
                                <input type="radio" name="ans1" value="D"> <?php echo $row['choice4'], "<br>"; ?>
                            </div>

                            <!-- User Response -->
                    </div>
                <?php } ?>

                <!-- Question Number 2 -->
                <div class="test_num">
                    <?php
                    if (mysqli_num_rows($qstn) > 0) {
                        $row = mysqli_fetch_assoc($qstn);

                        //check if the answer is correct                        
                        if ($ans2 == $row['correct_answer']) {
                            $score_filipino++;
                        }

                    ?>
                        <!-- Printing the questions and choices -->
                        <div class="test_question">
                            <?php
                            echo $row['question'], "<br>";
                            ?>
                        </div>
                        <div class="test_choices">
                            <input type="radio" name="ans2" value="A"> <?php echo $row['choice1'], "<br>"; ?>
                            <input type="radio" name="ans2" value="B"> <?php echo $row['choice2'], "<br>"; ?>
                            <input type="radio" name="ans2" value="C"> <?php echo $row['choice3'], "<br>"; ?>
                            <input type="radio" name="ans2" value="D"> <?php echo $row['choice4'], "<br>"; ?>
                        </div>
                </div>
            <?php } ?>

            <!-- Question Number 3 -->
            <div class="test_num">
                <?php
                if (mysqli_num_rows($qstn) > 0) {
                    $row = mysqli_fetch_assoc($qstn);

                    //check if the answer is correct                        
                    if ($ans3 == $row['correct_answer']) {
                        $score_filipino++;
                    }

                ?>
                    <!-- Printing the questions and choices -->
                    <div class="test_question">
                        <?php

                        echo $row['question'], "<br>";
                        ?>
                    </div>
                    <div class="test_choices">
                        <input type="radio" name="ans3" value="A"> <?php echo $row['choice1'], "<br>"; ?>
                        <input type="radio" name="ans3" value="B"> <?php echo $row['choice2'], "<br>"; ?>
                        <input type="radio" name="ans3" value="C"> <?php echo $row['choice3'], "<br>"; ?>
                        <input type="radio" name="ans3" value="D"> <?php echo $row['choice4'], "<br>"; ?>
                    </div>
            </div>
        <?php } ?>

        <!-- Question Number 4 -->
        <div class="test_num">
            <?php
            if (mysqli_num_rows($qstn) > 0) {
                $row = mysqli_fetch_assoc($qstn);

                //check if the answer is correct                        
                if ($ans4 == $row['correct_answer']) {
                    $score_filipino++;
                }

            ?>
                <!-- Printing the questions and choices -->
                <div class="test_question">
                    <?php

                    echo $row['question'], "<br>";
                    ?>
                </div>
                <div class="test_choices">
                    <input type="radio" name="ans4" value="A"> <?php echo $row['choice1'], "<br>"; ?>
                    <input type="radio" name="ans4" value="B"> <?php echo $row['choice2'], "<br>"; ?>
                    <input type="radio" name="ans4" value="C"> <?php echo $row['choice3'], "<br>"; ?>
                    <input type="radio" name="ans4" value="D"> <?php echo $row['choice4'], "<br>"; ?>
                </div>
        </div>
    <?php } ?>

    <!-- Question Number 5 -->
    <div class="test_num">
        <?php
        if (mysqli_num_rows($qstn) > 0) {
            $row = mysqli_fetch_assoc($qstn);

            //check if the answer is correct 

            if ($ans5 == $row['correct_answer']) {
                $score_filipino++;
            } else {
                echo '<script>alert("This alert happens because you either entered more 
                        than the letter of your answer or there are questions you have not responded yet.")</script>';
            }


        ?>
            <!-- Printing the questions and choices -->
            <div class="test_question">
                <?php

                echo $row['question'], "<br>";
                ?>
            </div>
            <div class="test_choices">
                <input type="radio" name="ans5" value="A"> <?php echo $row['choice1'], "<br>"; ?>
                <input type="radio" name="ans5" value="B"> <?php echo $row['choice2'], "<br>"; ?>
                <input type="radio" name="ans5" value="C"> <?php echo $row['choice3'], "<br>"; ?>
                <input type="radio" name="ans5" value="D"> <?php echo $row['choice4'], "<br>"; ?>
            </div>
    </div>
<?php } ?>

<!-- Question Number 6 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans6 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans6" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans6 value=" B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans6 value=" C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans6" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 7 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans7 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans7" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans7" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans7" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans7" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 8 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans8 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans8" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans8" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans8" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans8" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 9 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans9 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans9" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans9" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans9" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans9" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 10 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans10 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans10" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans10" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans10" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans10" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 11 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans11 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans11" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans11" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans11" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans11" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 12 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans12 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans12" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans12" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans12" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans12" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 13 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans13 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans13" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans13" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans13" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans13" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 14 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans14 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans14" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans14" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans14" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans14" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 15 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans15 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans15" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans15" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans15" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans15" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 16 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans16 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans16" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans16" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans16" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans16" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 17 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans17 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans17" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans17" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans17" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans17" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 18 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans18 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans18" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans18" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans18" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans18" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 19 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans19 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans19" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans19" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans19" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans19" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 20 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans20 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans20" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans20" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans20" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans20" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 21 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans21 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans21" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans21" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans21" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans21" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 22 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans22 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans22" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans22" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans22" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans22" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 23 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans23 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans23" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans23" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans23" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans23" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 24 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans24 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans24" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans24" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans24" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans24" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<!-- Question Number 25 -->
<div class="test_num">
    <?php
    if (mysqli_num_rows($qstn) > 0) {
        $row = mysqli_fetch_assoc($qstn);

        //check if the answer is correct                        
        if ($ans25 == $row['correct_answer']) {
            $score_filipino++;
        }

    ?>
        <!-- Printing the questions and choices -->
        <div class="test_question">
            <?php

            echo $row['question'], "<br>";
            ?>
        </div>
        <div class="test_choices">
            <input type="radio" name="ans25" value="A"> <?php echo $row['choice1'], "<br>"; ?>
            <input type="radio" name="ans25" value="B"> <?php echo $row['choice2'], "<br>"; ?>
            <input type="radio" name="ans25" value="C"> <?php echo $row['choice3'], "<br>"; ?>
            <input type="radio" name="ans25" value="D"> <?php echo $row['choice4'], "<br>"; ?>
        </div>
</div>
<?php } ?>

<div class="inform">
<?php
    if ($score_filipino == 0) {
        //echo "Make sure to answer all 25 question before clicking the SUBMIT button";
    } else {
        $query = "INSERT INTO score_filipino(filipino) VALUES ($score_filipino)";
        mysqli_query($con, $query);
    }
    ?>

    <input type="submit" id="button" name="submit" value="SUBMIT ANSWERS" style="margin-left: 0%;">
</div>
                </form>
            </div>

            <div id="container" style="height: 150px; margin-top: 1%;">
                <div id="mini-container">
                    <br>
                    <div class="exam-section" style="height: 70px;">
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

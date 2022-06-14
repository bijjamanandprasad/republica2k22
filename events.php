<?php 
  include "header.php";
?>

<style>
    .card{
        margin-left:2em;
    }
    .txt{
        display:flex;
    }
    .green-c{
        color: green !important;
    }
    .orange-c{
        color: rgb(252, 106, 39) !important;
    }
    .blue-c{
        color: #1d4396 !important;
    }
    center a{
            display:none;
        }
    @media (max-width:992px){
        body{
            background:none;
        }
        .card{
            margin-left:0em;
        }
        .event-title {
            width: 100%;
            height: 80px;
            padding: 10px;
        }
        center a{
            display:inline-block;
        }
    }
</style>

<center>
    <div class="event-title">
        <img src="./img/events-title.png" alt="">
    </div>
    <br>
    <a target="_blank" href="https://bit.ly/Republica2k22" class="register">REGISTER NOW</a>
</center>

<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="events.css">
      
</head>

<br>

<section class="events">
    <div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./img/events/bharath-darshan.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title text-center orange-c">Bharat Darshan </h3>
    <h5 class="card-title">
        <i class='bx bxs-calendar'></i>
        <span class="txt blue-c">
            <p>25-01-2022 : 9AM to 9PM</p>
        </span>
    </h5>
    <p class="card-text green-c">To make the student capable of being analytical and skillful...</p>
    <a onclick="display(document.getElementById('event-1'))" class="btn btn-primary">Read more</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./img/group_discussion.jpg" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title text-center orange-c">Interactive Quiz</h3>
    <h5 class="card-title">
        <i class='bx bxs-calendar'></i>
        <span class="txt blue-c">

            <p>25-01-2022 : First round is from 9 AM to 9 PM
              <br><br>26-01-2022 : Second round is from 6 PM</p>
        </span>
    </h5>
    <p class="card-text green-c">On this 73rd Republic day, We have outlined an exhilarating...</p>
    <a onclick="display(document.getElementById('event-2'))" class="btn btn-primary">Read more</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./img/events/poetry.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title text-center orange-c">Patriotic Poetry</h3>
    <h5 class="card-title">
        <i class='bx bxs-calendar'></i>
        <span class="txt blue-c">
            <p>24-01-2022 to 26-02-2022</p>
        </span>
    </h5>
    <p class="card-text green-c">Poet is one who passionately expresses what they feel...
  </p>
    <a onclick="display(document.getElementById('event-3'))" class="btn btn-primary">Read more</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./img/events/Ekdin.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title text-center orange-c">Ekdin</h3>
    <h5 class="card-title">
        <i class='bx bxs-calendar'></i>
        <span class="txt blue-c">
            <p>24-02-2022 to 26-01-2022</p>
        </span>
    </h5>
    <p class="card-text green-c">We're sure that everyone has thought of changing the nation...
  </p>
    <a onclick="display(document.getElementById('event-4'))" class="btn btn-primary">Read more</a>
  </div>
</div>

<div class="card" style="width: 17rem;">
  <img class="card-img-top" src="./img/events/debate.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title text-center orange-c">Shoot Your Thought</h3>
    <h5 class="card-title">
        <i class='bx bxs-calendar'></i>
        <span class="txt blue-c">
            <p>25-01-2022 : 6am to 9pm</p>
        </span>
    </h5>
    <p class="card-text green-c">Have a desire to amend the Constitution for the welfare of the nation?...
  </p>
    <a onclick="display(document.getElementById('event-5'))" class="btn btn-primary">Read more</a>
  </div>
</div>


</section>

<br><br>

<section>
        <!-- EVENT-1 -->
        <div id="event-1" class="pop-up">
            <div class="window-hamberger">
                <img class="close" src="./img/events/close.png" alt="X">
            </div>
            <div class="window">
                <br><br>
                <h1>Bharat Darshan</h1>
                <!-- Poster visibility -->
                <div class="poster"><img src="./img/events/bharath-darshan.png" alt="img" ></div>
                <br>
                <p>Objective To make the student capable of being analytical and skillful..</p>
                <br>
                <h3>Procedure</h3>
                <p>
                *Participants will  be divided into groups and put into a WhatsApp group.<br> 
                *We'll send 5-6 locked PDFs and all you need to do is to crack them one by one and move further.<br>
                * The fastest will be given the first place as 
                usual. <br>
                Register and have fun in sitting and 
                exploring at the same time!!
                </p>
                <br>
                <h3>Timings</h3>
                <p>25-01-2022 : 9AM to 9PM</p>
                <br>
                <h3>Rules</h3>
                <p>*Responses should be taken in google forms .</p>
                <br>
                <h3>Contact</h3>
                <p>Sivani Allada <br>+919160900602</p>
                
                <br><br><br>
            </div>
        </div>

        <!-- EVENT-2 -->
        <div id="event-2" class="pop-up">
            <div class="window-hamberger">
                <img class="close" src="./img/events/close.png" alt="X">
            </div>
            <div class="window">
            <br><br>
                <h1>Interactive Quiz</h1>
                <!-- Poster visibility -->
                <div class="poster"><img src="./img/group_discussion.jpg" alt="img" ></div>
                <br>
                <h3>Objective</h3>
                <p>On this 73rd Republic day, We have outlined an exhilarating Quiz contest to emphasize student’s knowledge and to make them even more competitive.</p>
                <br>
                <h3>Round 1 :</h3>
                <p>Participant should attempt the Online Quiz in Google forms after the event registration.</p>
                <br>
                <h3>Round 2 :</h3>
                <p>Participant will be forwarded to an interactive Quiz in Google Meet platform.</p>
                <br>
                <h3>Topics</h3>
                <p>Indian constitution<br>
                  General knowledge<br>
                  Current affairs<br>
                  Freedom struggle
                </p>
                <br>
                <h3>Participant here</h3>
                <a target="_blank" href="http://bit.ly/sdcac-republica2k22-Interact-quiz">http://bit.ly/sdcac-republica2k22-Interact-quiz</a>
                <br><br>
                <h3>Timings</h3>
                <p>*25-01-2022 : First round is from 9 AM to 9 PM <br>
                    *26-01-2022 : Second round is from 6 PM
                </p>
                <br>
                <h3>Contact</h3>
                <p>Sravan Sai Kumar <br>
                    7893719171</p>
      
                <br><br><br>
            </div>
        </div>

        <!-- EVENT-3 -->
        <div id="event-3" class="pop-up">
            <div class="window-hamberger">
                <img class="close" src="./img/events/close.png" alt="X">
            </div>
            <div class="window">
                <br><br>
                <h1>Patriotic Poetry</h1>
                <!-- Poster visibility -->
                <div class="poster"><img src="./img/events/poetry.png" alt="img" ></div>
                <br>
                <h3>Objective</h3>
                <p>Poet is one who passionately expresses what they feel, indeed every one of us is!!<br>
                  To the passionate poet inside you., SDCAC brings up a chance to express your poems that unites the integrity of the nation among citizens. 
                  </p>
                <br>
                
                <h3>Themes</h3>
                <p>Republic Euphoria: Celebrate as a Child <br>
                  Gratitude towards Soldiers <br>
                  Aesthetic India and its Culture <br>
                  Being a Freedom Fighter 
                </p>      
                <br>
                <h3>Submission Link : </h3>
                <a target="_blank" href="https://forms.gle/nVg1gCVKUpp7BPGT6">https://forms.gle/nVg1gCVKUpp7BPGT6</a>
                <br><br>
                <h3>Rules</h3>
                <p>1. The competition is open for all, from PUC to Engineering. <br>
                    2. All entries must be submitted on google forms provided. <br>
                    3. A participant can send only one entry. <br>
                    4. The entry should be original. Copied entries will not be considered under the competition.
                </p>
                <br>
                <h3>Timings</h3>
                <p>24-01-2022 to 26-02-2022
                </p>
                <br>
                <h3>Contact</h3>
                <p>Bala Gayathri <br>+916305350326</p>
                <br><br><br>
            </div>
        </div>

        <!-- EVENT-4 -->
        <div id="event-4" class="pop-up">
            <div class="window-hamberger">
                <img class="close" src="./img/events/close.png" alt="X">
            </div>
            <div class="window">
            <br><br>
                <h1>Ekdin</h1>
                <!-- Poster visibility -->
                <div class="poster"><img src="./img/events/Ekdin.png" alt="img" ></div>
                <br>
                <h3>Objective</h3>
                <p>We're sure that everyone has thought of changing the nation, the society in a better way at some point of time. We all have the longing to change our nation into a better place with our ideas.
                   So SDCAC is bringing you an awesome platform to scribble your thoughts and ideas upon what you would do if you were given a chance to lead the nation as prime minister for a day! 
                  </p>
                <br>
                
                <h3>Rules</h3>
                <p>*Shouldn’t exceed 500 words.<br>
                    *Shouldn’t contain any offensive words / sentences.<br>
                    * Should Submit your entry through the Google forms provided.
                </p>
                <br>
                <h3>Submission Link : </h3>
                <a target="_blank" href="https://forms.gle/RdTuBuQdjbDai6DB7">https://forms.gle/RdTuBuQdjbDai6DB7</a>
                <br><br>
                <h3>Deadline</h3>
                <p>24-02-2022 to 26-01-2022
                </p>
                <br>
                <h3>Contact</h3>
                <p>Bala Gayathri <br>+916305350326</p>
                <br><br><br>
            </div>
        </div>

        <!-- EVENT-5 -->
        <div id="event-5" class="pop-up">
            <div class="window-hamberger">
                <img class="close" src="./img/events/close.png" alt="X">
            </div>
            <div class="window">
            <br><br>
                <h1>Shoot Your Thought</h1>
                <!-- Poster visibility -->
                <div class="poster"><img src="./img/events/debate.png"  alt="img" ></div>
                <br>
                <p style="text-align:center;">Have a desire to amend the Constitution for the welfare of the nation? <br>
                  What is that one law you could append to the Constitution and why would you do so?? <br>
                  Here is an open door given by SDCAC to tell the world about that one law and why.. <br>
                  FILM YOUR VIDEO NOW!!
                  </p>
                <br>
                
                <h3>Rules</h3>
                <p>1.Video shouldn’t cross 3 minutes. <br>
                    2.File size shouldn’t cross 25mb. <br>
                    3.Send your video file to the given contact through WhatsApp along with your details .
                </p>
                <br>
                <p><b>Send us your recordings</b> to  <b>7799632321</b> before the deadline through whatsapp !!</p>
                <br>
                <h3>Timeline</h3>
                <p>25-01-2022 : 6am to 9pm
                </p>
                <br>
                <h3>Contact</h3>
                <p>Majji Lokesh Babu <br>+91 77996 32321</p>
                <br><br><br>
            </div>
        </div>
</section>


  <script>
          $(document).ready(function(){
                $(".pop-up").hide();
                $(".close").click(function(){
                    $(".pop-up").hide();
                    $('.stop').trigger('pause');
                });
            });

            function display(event){
                $(event).show();
            }
    </script>

<?php 
  include "footer.php";
?>
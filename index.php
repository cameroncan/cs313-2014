<!DOCTYPE>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
    <script>
        $(function() {
          $( "#tabs" ).tabs();
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Brother Christiansen's homepage</h2>
                <div class="subtitle">Powered by php and jquery</div>
            </div>
            <div class="mugshot"><img src="images/christiansenca.jpg" /></div>
            <div class="body">
                <div id="tabs">
                    <ul>
                      <li><a href="#tabs-1">Introduction</a></li>
                      <li><a href="#tabs-2">Assignments</a></li>
                      <li><a href="#tabs-3">Spiritual Thoughts</a></li>
                    </ul>
                    <div id="tabs-1">
                        <p>I am a software developer in Highland, UT. Here is a bit of my history: I grew up in Hemet, California, served a mission in Caracas Venezuela, earned a Bachelor's Degree at BYU-Idaho in Computer Science, worked at the Walmart home office in Bentonville Arkansas for three years, earned a Master's degree at BYU in Computer Science with a focus on image processing, then began working for Xactware in Lehi, UT.</p>
                        <p>I enjoy developing software and seeing my creations come to life. I work mostly in Java and JavaScript building web applications for Xactware with occasional side projects doing image processing. I also enjoy playing sports as often as possible, especially soccer.</p>
                        <p>My favorite way to spend my time is with my wife and my kids. I have been married for seven years and I have four children. We often go on outdoor adventures together and enjoy camping, hikes, picnics in the nearby canyon, finding new playgrounds, and seeing our garden grow.</p>
                        <p>I look forward to helping you develop a passion for programming and to prepare you for a future of learning whatever new technologies come your way. Through my efforts I hope to give back some of the wisdom and personal attention that my instructors gave me while I was a student here at BYU-Idaho.</p>
                        <p>I hope to get to know you all individually and see our collective experiences enhance how we learn the course material. I hope the best for you in this online course.
                        <br /> 
                        <p><a href="http://screencast.com/t/GK4jEKBC" target="_blank">Here is a short intro video about me</a></p>
                    </div>
                    <div id="tabs-2">
                        <p>Dynamic list using php to find folders and create links for assignments:</p>
                        <p>
                            <?php
                                foreach (glob("lesson-*") as $lesson) {
                                    echo "<div class=\"lesson\"><a href=\"$lesson/index.php\" target=\"_blank\">$lesson</a></div>";
                                }
                            ?>
                        </p>
                    </div>
                    <div id="tabs-3">
                        <div class="spiritual-thought">
                        <h4>Spiritual Thought - 15 Sep</h4>
                        <p>First, Nephi proved that we was a prophet by announcing the murder of the chief judge, and then announcing the murderer as well as prophesying the communication that would happen when the murderer was approached (Helaman 7-9). After acting in great power and faith, the voice of the Lord came to him and said:</p>
                      <blockquote> 
                          <p>4 Blessed art thou, Nephi, for those things which thou hast done; for I have beheld how thou hast with unwearyingness declared the word, which I have given unto thee, unto this people. And thou hast not feared them, and hast not sought thine own life, but hast sought my will, and to keep my commandments.</p>

                          <p>5 And now, because thou hast done this with such unwearyingness, behold, I will bless thee forever; and I will make thee mighty in word and in deed, in faith and in works; yea, even that all things shall be done unto thee according to thy word, for thou shalt not ask that which is contrary to my will.</p>
                      </blockquote> 
    <p>As we do what we know is right, both in the form of commandments and in being the best person we know to be, our unwearyingness will not go unnoticed by the Lord. In those times where things get mundane and hard, we can remember the example of Nephi and be consistently strong in doing our best. Heavenly Father will bless us with strength to do so if we desire.</p>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

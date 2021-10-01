<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <!-- <li><a href="#teams" class="menu-btn">Teams</a></li> -->
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Anthony Viramontes</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me_portrait.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Anthony and I'm a <span class="typing-2"></span></div>
                    <p>I am an undergraduate attending California State University of Los Angeles. I am earning my
                        Bachelor of Science degree in Computer science. I am currently a fifth year, and I expect to
                        graduate in the year 2022. The reason I chose Computer Science is it fit me best compared to all
                        the other stem majors, and being a fast learner as well as being efficient is one of my best
                        qualities, so Computer Science felt natural to me. Important classes I have taken are Principles
                        of Database Systems, Web and Internet Programming, Current Trends in Web Design, Introduction to
                        Automata Theory, Operating Systems, and Software Engineering. What separates me from my peers is
                        my personal projects, I know that attending classes isn’t enough, so I took initiative to join
                        Association for Computer Machinery(ACM), which has drastically improved my use of learning
                        multiple languages, collaborating with multiple teams, and being a leader by holding a Webmaster
                        position, where I develop and lead for the organization’s website. My goals are to find a
                        Full-Time position as a software engineer in web development where I can utilize my skills and
                        work in a professional environment.</p>
                    <a href="Resume.pdf" download>Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Experiences</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-window-maximize"></i>
                        <div class="text">Web Development</div>
                        <p>I have experience using HTML, CSS, JavaScript, BootStrap, and React.js. I am currently the Webmaster for my club, Association for Computing Machinery, at Cal State La.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-laptop-code"></i>
                        <div class="text">Java Programming</div>
                        <p>Created mutiple Java applicaions implemeting Object Oriented Programming(00P). My Software Engineering project was built with the structure of OOP in mind.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Databases & APIs</div>
                        <p>I have studied complexed database structures. I've also implemented multiple databses using MySql and MongoDB. I've implemented an API for my final project for my Web Class.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I am currently the Webmaster for my club, which is Association for Computing Machinery(ACM). I lead my web team ensuring they meet deadlines, and they acquire new skills after every project. I became a Webmaster to gain experience that will translate to a needed work ethic in the current industry. Along with earning my Bachelor of Science degree in Computer Science, ACM has given me experiences that won’t be taught in class. I  am constantly taking on new tasks, meeting deadlines, and collaborating with multiple teams while I have classes to attend.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>75%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>75%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>90%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start 
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>I am graduating this Spring 2022. I am looking for a Full-Time position that can take full advantage of my skill set. I am a team player than can lead and meet quick deadlines if necessary.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Anthony Viramontes</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-school"></i>
                            <div class="info">
                                <div class="head">University</div>
                                <div class="sub-title">California State University of Los Angeles</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">amviramontes34@yahoo.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form class="contact-form" action="contactform.php" method="post" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="field email">
                                <input type="text" name="mail"  placeholder="Your e-mail" required>
                            </div>
                        </div>
                        <div class="field subject">
                            <input type="text" name="subject"  placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Anthony Viramontes</span>
    </footer>
    <script src="script.js"></script>
</body>

</html>
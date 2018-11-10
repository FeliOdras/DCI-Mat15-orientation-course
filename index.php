<?php 
    $pageID	    = 'index';
    $pageTitle	= 'Ariane Feldmann - Frontend.Developer by passion';

    include 'includes/head.php';
?>


<!-- I have added a class to body here so I can address elements that need a special style only on the frontpage (for example the header here)-->

<body class="frontpage">
    <!-- This container wraps the whole content -->
    <div id="main-container">
        <!-- Start of my main navigation -->
        <nav id="main-navigation" class="main-nav-default">
            <!-- Different menu type from other pages -->
            <ul class="bubblemenu">
                <!-- I used the class 'current' here to give the current menu item a unique style -->
                <li>
                    <a href="index.html" title="Ariane Feldmann | Senior HTML/CSS-Developer - Junior JavaScript-Developer"><i class="fa fa-home"></i><span class="menuitemdesc">Welcome</span></a>
                </li>
                <li><a href="#about" title="Who am I - my Curriculum Vitae"><i class="fa fa-address-card-o"></i><span class="menuitemdesc">About me</span></a>
                    <!-- Start sub-menu 'About me' -->
                    <ul class="sub-menu">
                        <li><a href="about.html#education" title="What I learned. Where I learned.">Education</a></li>
                        <li><a href="about.html#workexperience" title="Where I worked and what I did there">Work Experience</a></li>
                        <li><a href="about.html#personal" title="Other things worth to know about me">Personal</a></li>
                    </ul>
                    <!-- End sub-menu 'About me' -->
                </li>
                <li><a href="#skills" title="How I can help you - Skills and Competences"><i class="fa fa-list-alt"></i><span class="menuitemdesc">Skills</span></a>
                    <!-- Start sub-menu 'Skills' -->
                    <ul class="sub-menu">
                        <li><a href="skills.html#coding" title="Webtechnologies, Programming Langugages">Web Development</a></li>
                        <li><a href="skills.html#cms" title="Content Management Systems I have worked with">CMS</a></li>

                        <li><a href="skills.html#Graphic" title="Image editing and desktop publishing software">Graphic Design</a></li>
                        <li><a href="skills.html#languages" title="Languages I know to speak">Languages</a></li>
                    </ul>
                    <!-- End sub-menu 'Skills' -->
                </li>
                <li><a href="#projects" title="What I did - selected projects and references of mine"><i class="fa fa-code"></i><span class="menuitemdesc">Code & Projects</span></a>
                    <!-- Start sub-menu 'Projects and Code' -->
                    <ul class="sub-menu">
                        <li><a href="projects.html#code" title="Some HTML/CSS Tricks">HTML/CSS</a></li>
                        <li><a href="projects.html#themes" title="Website Projects, Theme- and Template Development">WordPress</a></li>
                        <li><a href="projects.html#javascript" title="Javascript Projects inkl. EgmaScript, Node and React">JavaScript</a></li>
                        <li><a href="https://github.com/FeliOdras?tab=repositories" title="My Github Repository" target="_blank">Code on Github</a></li>
                    </ul>
                    <!-- End sub-menu 'Projects and Code' -->
                </li>
                <li><a href="contact.html" title="How to get in touch with me"><i class="fa fa-paper-plane"></i><span class="menuitemdesc">Contact</span></a></li>
            </ul>
        </nav>
        <!-- End of Main Navigation -->
        <!-- Start of Header Section -->
        <header id="main-header">
            <!-- Start of Title Section in Header -->
            <img src="images/ari-portrait.jpg" class="roundimg imgright profilepic" alt="Ariane Feldmann">
            <section id="title">
                <h1>Ariane Feldmann<br>
                    <small>Frontend.Developer by passion...</small></h1>
                <h2 id="header_subline">[HTML | CSS ] And soon: [ JavaScript | Node | React]</h2>
            </section>
            <!-- End of Title Section in Header -->
        </header>
        <!-- End of Header Section -->
        <!-- Start of Main Section -->
        <main>
            <!-- Page Title - Headline displayed between Header and Main Content -->
            <h2 class="pagetitle alignleft ">Make code <em>Beautiful</em></h2>
            <!-- Start of Section 'About me' -->
            <a id="about"></a>
            <section id="home_me" class="inverse">
                <!-- bookmark link for "About"-Section -->
                <!-- The main_wrapper holds the content to a maximum width and keeps it in the middle of the screen -->
                <div class="main_wrapper">
                    <!-- article is displayed in a box -->
                    <h3 class="sectionheading">How it all began</h3>
                    <article class="box boxright">
                        <h4>History</h4>
                        <figure class="imgright">
                            <a href="animatedCV/" target="_blank"><img src="images/animatedCV.png" width="300" alt="animated CV"></a>
                            <figcaption>Open animated CV</figcaption>
                        </figure>
                        <p>It was in 1999 when I "built" my first website. It was kind of crappy, built with Microsoft FrontPage, one of the first WYSIWYG desktop editors of its kind, and naturally it only worked in Internet Explorer. A few years later I came to a place called "c-base" (the people who run this place pretend to reconstruct a crashed space station, some of them might really believe it) and there I met some cool guys who really knew how to build a website. One of them showed me the German HTML reference project <a href="http://www.selfhtml.org" target="_blank">selfhtml.org</a>. 'If you want to build a website, read this', he said. So I did and so I fell in love with code.</p>
                        <hr class="clr">
                        <a class="button boxleft aligncenter" href="about.html"><em>Got curious?</em> <br>Find out more &raquo;</a>
                        <!-- clear floated content -->
                        <hr class="clr">
                    </article>
                    <!-- End of boxed and right aligned (.boxright) article -->
                </div>
                <!-- End of Main Wrapper -->
            </section>
            <!-- End of Section 'About' -->
            <!-- Start of Section 'Skills' -->
            <a id="skills"></a>
            <section id="home_skills">
                <div class="main_wrapper">
                    <h3 class="sectionheading aligncenter">Skills</h3>
                    <!-- Used flexbox model to display the four items responsively -->
                    <div class="flexbox">
                        <!-- Start of .flexboxitem 'Coding'-->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#coding" title="Coding skills and programming languages">
                                    <img src="images/coding.jpg" alt="Coding" class="roundimg">
                                </a>
                                <figcaption><h4>Coding</h4></figcaption>                                
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Coding' -->
                        <!-- Start of .flexboxitem 'CMS' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#cms" title="Content Management Systems I have worked with">
                                    <img src="images/cms.jpg" alt="CMS" class="roundimg">
                                </a>
                                <figcaption><h4>CMS</h4></figcaption>
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'CMS' -->
                        <!-- Start of .flexboxitem 'Graphic Design' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#Graphic" title="Image Editing and Manipulation">
                                    <img src="images/home-office.jpg" alt="Graphic Design" class="roundimg">
                                </a>
                                <figcaption><h4>Graphic Design</h4></figcaption>                                    
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Graphic Design' -->

                        <!-- Start of .flexboxitem 'Languages' -->
                        <div class="flexboxitem">
                            <figure>
                                <a href="skills.html#lang" title="Known Languages">
                                    <img src="images/project.jpg" alt="Languages" class="roundimg">
                                </a>
                                <figcaption><h4>Languages</h4></figcaption>          
                            </figure>
                        </div>
                        <!-- End of .flexboxitem 'Languages' -->
                    </div>
                    <!-- End of .flexbox Row -->
                </div>
            </section>
            <!-- End of Section 'Skills' -->
            <!-- Start of Section 'Code and Project' -->
            <a id="projects"></a>
            <section id="home_code" class="inverse">
                <div class="main_wrapper">
                    <h3 class="sectionheading alignleft">Code and Projects</h3>
                    <div class="flexbox">
                        <div class="flexboxitem box">
                            <a href="projects.html#html">
                                <div class="icons">
                                    <i class="fa fa-html5"></i>
                                    <i class="fa fa-css3"></i>
                                </div>
                                <h4>HTML and CSS</h4>
                                <p>Code examples for some fancy effects with CSS3.</p>
                            </a>
                        </div>
                        <div class="flexboxitem box">
                            <a href="projects.html#themes">
                                <div class="icons"><i class="fa fa-wordpress"></i>
                                    <i class="fa fa-joomla"></i>
                                </div>
                                <h4>Themes and Templates for CMS</h4>
                                <p>Individually styled WordPress sites</p>
                            </a>
                        </div>
                        <div class="flexboxitem box">
                            <a href="projects.html#javascript">
                                <div class="icons">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>JavaScript and its Frameworks</h4>
                                <p>Coming soon...</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of Section 'Code and Projects' -->
        </main>
        <!-- End of Main Section -->
        <!-- Start of Footer Section -->
        <footer id="main-footer">
            <ul id="social-navigation">
                <li><a href="https://www.xing.com/profile/Ariane_Feldmann" target="_blank"><i class="fa fa-xing"></i></a></li>
                <li><a href="https://de.linkedin.com/in/ariane-feldmann" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/FeliOdras?tab=repositories" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
        </footer>
        <!-- End of Footer Section -->
        <nav id="meta-menu">
            <ul>
                <li><a href="dci.html" title="Working Materials for the courses at Digital Career Institute">DCI</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="disclaimer.html">Imprint and Disclaimer</a></li>
            </ul>
        </nav>
        <div class="validation">
            <a href="http://validator.w3.org/check/referer" target="_blank" title="Validate MarkUp">Valid HTML5 <i class="fa fa-html5"></i></a> | <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fme.odras.de%2Fstyle%2Fstyle.css" title="Validate Stylesheet" target="_blank" rel="nofollow">Valid CSS3 <i class="fa fa-css3"></i></a></div>
        </div>
</body>

</html>

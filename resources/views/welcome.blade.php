<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Nick Poulos - NY Software Industry Vet</title>

        <!-- Favicons -->
        <link rel="shortcut icon" href="/img/favicon.png">
        <link rel="apple-touch-icon" href="/img/favicon_60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon_76x76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon_120x120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon_152x152.png">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i%7CPoppins:300,400,500,600" rel="stylesheet">

        <!-- CSS Styles -->
        <link rel="stylesheet" href="/css/styles.css" />

        <!-- CSS Theme -->
        <link id="theme" rel="stylesheet" href="/css/themes/theme-sans_serif-blue.css" />
        <style type="text/css">

            a.full {display:block; height: 100%; width: 100%; position: relative;}

            .progress .progress-bar { transition: width .5s; }

            #ajax-loader { opacity: 0; display: none; }

            .project-logo { max-height: 225px; }

            #project-section-title { line-height: 2; }
            #nyc-video {
                object-fit: cover;
                width: 100%;
                height: 100%;
                opacity: .2;
            }

            .accordion-list { padding-left: 0; text-align: left; }

            .accordion-list li { margin-bottom: 15px; }

            .work-responsibility li { margin-bottom: 15px; }

            .post.item .post-content { width: 100%; padding: 40px 40px; }

            .fadein {
                transition: opacity 1000ms;
                opacity: 1;
            }

            .fadeout {
                opacity: 0;
                transition: opacity 1000ms;
            }

        </style>
    </head>
    <body>
        <div id="app">
            <!-- Loader -->
            <div id="page-loader" class="animated fadeInOut" :style="{ display: pageLoading ? 'unset':'none', visibility: 'visible' }">
                <svg class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>
            </div>
            <!-- Loader / End -->

            <!-- Header -->
            <header id="header" class="header-vertical dark">

                <!-- Logo -->
                <div class="logo">
                    <h1>Nick Poulos</h1>
                    <h4>Full Stack<br>Engineer/Manager</h4>
                </div>

                <!-- Navigation -->
                <nav id="main-menu">
                    <ul class="nav nav-vertical">
                        <li @click="navSetActive($event)" id="nav-start"><a href="#start" v-scroll-to="'#start'"><i class="pe-7s-home"></i><span>Start</span></a></li>
                        <li @click="navSetActive($event)" id="nav-resume"><a href="#resume" v-scroll-to="'#resume'"><i class="pe-7s-ribbon"></i><span>Resume</span></a></li>
                        <li @click="navSetActive($event)" id="nav-portfolio"><a href="#portfolio" v-scroll-to="'#portfolio'"><i class="pe-7s-monitor"></i><span>Projects</span></a></li>
                        <li @click="navSetActive($event)" id="nav-references"><a href="#references" v-scroll-to="'#references'"><i class="pe-7s-comment"></i><span>References</span></a></li>
                        <li @click="navSetActive($event)" id="nav-blog"><a href="#blog" v-scroll-to="'#blog'"><i class="pe-7s-copy-file"></i><span>Blog</span></a></li>
                        <li @click="navSetActive($event)" id="nav-contact"><a href="#contact" v-scroll-to="'#contact'"><i class="pe-7s-mail"></i><span>Contact</span></a></li>
                    </ul>
                    <span class="selector"></span>
                </nav>

                <!-- Bottom -->
                <div class="bottom text-center">
                    <ul class="nav-icons nav-sm">
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>

            </header>
            <!-- Header / End -->

            <!-- Content -->
            <div id="content">

                <!-- Section - Start -->
                <section id="start" class="section fullheight dark bg-dark">

                    <!-- BG Video -->
                    <div class="bg-video">
                        <video autoplay muted loop id="nyc-video">
                            <source src="/video/nyc-tech.mp4" type="video/mp4">
                        </video>
                    </div>

                    <div class="container container-custom v-center" data-local-scroll>
                        <h1 class="text-lg mb-0"><em>Hi! I’m</em> Nick Poulos</h1>
                        <p class="lead text-muted">Full stack engineer & New York software industry veteran</p>
                        <a href="#resume" class="btn btn-primary btn-lg">Check my Resume</a><a href="#portfolio" v-scroll-to="'#portfolio'" class="btn btn-link btn-lg">Latest Projects</a>
                    </div>

                </section>

                <!-- Section - Resume -->
                <section id="resume" class="section">

                    <div class="container container-custom">
                        <p class="lead text-muted mb-40" style="font-size: 1.8rem;">
                            My name is Nick Poulos, I am a full stack software engineer/manager based in New York City. I received my Bachelor of Science in Computer Science from Quinnipiac University as well as a minor in Interactive Digital Design, and have over fifteen years professional experience.<br><br>I have worked for small agencies, large corporations, in teams of 25+ devs, or in small groups.  My experience ranges across many different industries - advertising, medical, retail, and media. For the last several years I have been the Senior Engineering Manager at one of the biggest digital media companies in the country, also based in NYC.<br><br>When I'm not coding, I am most likely playing frisbee with my yellow lab Nash, having a beer with friends, hitting a Yankee game, or maybe taking a ski trip. Otherwise, I am probably stuck on the LIRR somewhere during my commute!
                        </p>
                        <div class="row">
                            <div class="col-xs-12 brd mb-30">
                                <div class="text-center">
                                    <a href="/doc/NickPoulos_Resume_2019.pdf" class="btn btn-primary btn-lg">Download my Resume</a>
                                </div>
                            </div>
                        </div>
                        <div class="row long-spaces">
                            <!-- Specialities -->
                            <div class="col-sm-12 col-xs-12">
                                <div class="resume-card">
                                    <h3 class="title">What I Do</h3>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-browser"></i></span>
                                                <div class="feature-content">
                                                    <h4>Web Apps</h4>
                                                </div>
                                            </div>
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-phone"></i></span>
                                                <div class="feature-content">
                                                    <h4>Mobile Apps</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-tools"></i></span>
                                                <div class="feature-content">
                                                    <h4>DevOps</h4>
                                                </div>
                                            </div>
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-graph1"></i></span>
                                                <div class="feature-content">
                                                    <h4>Project Management</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-refresh-cloud"></i></span>
                                                <div class="feature-content">
                                                    <h4>Continuous Integration</h4>
                                                </div>
                                            </div>
                                            <!-- Feature -->
                                            <div class="feature feature-2">
                                                <span class="icon icon-primary"><i class="pe-7s-server"></i></span>
                                                <div class="feature-content">
                                                    <h4>Infrastructure</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Skills -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="resume-card">
                                    <h3 class="title">Skills</h3>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-1" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-1')" class="progress-bar" role="progressbar" aria-valuenow="90">90%</div>
                                        </div>
                                        <h5>Database <em class="pl-10">MySql / Postgres / Mongo / Firebase</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-2" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-2')" class="progress-bar" role="progressbar" aria-valuenow="90">90%</div>
                                        </div>
                                        <h5>Deploy<em class="pl-10">AWS / DigitalOcean / Forge / Heroku / Netlify</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-3" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-3')" class="progress-bar" role="progressbar" aria-valuenow="80">80%</div>
                                        </div>
                                        <h5>Testing/C.I.<em class="pl-10">TravisCI / Jenkis / CircleCi</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-4" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-4')" class="progress-bar" role="progressbar" aria-valuenow="90">90%</div>
                                        </div>
                                        <h5>Management<em class="pl-10">Pivotal Tracker, Clubhouse, Jira</em></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages -->
                            <div class="col-sm-6 col-xs-12">
                                <div class="resume-card">
                                    <h3 class="title">Languages</h3>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-5" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-5')" class="progress-bar" role="progressbar" aria-valuenow="97">97%</div>
                                        </div>
                                        <h5>PHP<em class="pl-10">Laravel / Symfony</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-6" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-6')" class="progress-bar" role="progressbar" aria-valuenow="97">97%</div>
                                        </div>
                                        <h5>JavaScript<em class="pl-10">ES6 / Vue / React / Node</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-7" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-7')" class="progress-bar" role="progressbar" aria-valuenow="75">75%</div>
                                        </div>
                                        <h5>Python<em class="pl-10">Django / TensorFlow / NumPy</em></h5>
                                    </div>
                                    <!-- Skill -->
                                    <div class="skill">
                                        <div class="progress">
                                            <div id="progress-8" v-observe-visibility="(isVisible, entry) => animateProgress(isVisible, entry, 'progress-8')" class="progress-bar" role="progressbar" aria-valuenow="75">75%</div>
                                        </div>
                                        <h5>Ruby<em class="pl-10">Rails</em></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Education & Jobs -->
                            <div class="col-sm-12 col-xs-12">
                                <div class="resume-card">
                                    <h3 class="title">Work Experience</h3>
                                    <div class="timeline">
                                        <div v-for='(entry, index) in experience' :key="index" :id="'timeline-' + index" v-observe-visibility="(isVisible, entry) => visibilityChanged(isVisible, entry, 'timeline-' + index)" class="timeline-event animated row ml-0 mr-0">
                                            <div class="content">
                                                <div class="col-sm-5 col-xs-12">
                                                    <span class="date">@{{ monthYear(entry.start) }} - @{{ entry.end ?  monthYear(entry.end):'Present' }}</span>
                                                    <img :src="'/storage/' + entry.image" alt="" class="img-rounded mb-10" style="height: 126px;">
                                                    <h4>@{{ entry.title }}</h4>
                                                    <span class="caption">@{{ entry.company }}<br>@{{ entry.location }}</span>
                                                </div>
                                                <div class="col-sm-7 col-xs-12">
                                                    <ul class="work-responsibility" v-if="entry.responsibilities.length > 0">
                                                        <li v-for="responsibility in entry.responsibilities">@{{ responsibility }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- Section - Portfolio -->
                <section id="portfolio" class="section cover bg-black">

                    <!-- Filter Bar -->
                    <nav class="filter-bar bg-primary dark">
                        <div class="tabs-wrapper">
                            <h2 id="project-section-title" class="mb-0">Latest Projects</h2>
                            <span class="selector"></span>
                        </div>
                    </nav>

                    <!-- Works List -->
                    <div v-masonry v-images-loaded:on.progress="imageProgress" id="works-list" class="filter-list row masonry no-spaces" transition-duration="0.3s" column-width=".masonry-sizer" item-selector=".masonry-item">
                        <div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
                        <div v-masonry-tile v-for="(project, index) in projects" @click="openProjectDetails(index)" class="mobileApps masonry-item col-md-4 col-sm-6 col-xs-12" style="cursor: pointer; ">
                            <div class="image-box">
                                <div class="image"><img :src="'/storage/' +  project.tile_image" alt=""></div>
                                <div class="hover">
                                    <h4 class="mb-0">@{{ project.title  }}</h4>
                                    <span class="text-muted">@{{ ucwords(project.type) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- Section - Clients -->
                <section id="references" class="section bg-light">

                    <div class="container container-custom">
                        <h3 class="text-center mb-80">References</h3>
                        <div v-masonry class="row masonry" transition-duration="0.3s" column-width=".masonry-sizer" item-selector=".masonry-item">
                            <div class="masonry-sizer col-sm-6 col-xs-12"></div>
                            <div v-masonry-tile v-for="(reference, index) in references" :key="index" class="masonry-item col-sm-6 col-xs-12">
                                <!-- Blockquote -->
                                <blockquote :id="'reference-' + index" class="animated" data-animation="fadeIn" v-observe-visibility="(isVisible, entry) => visibilityChanged(isVisible, entry, 'reference-' + index)">
                                    <p>@{{ reference.body }}</p>
                                    <footer>
                                        <img src="/img/avatars/avatar01.jpg" alt="">
                                        <div class="content">
                                            <span class="name">@{{ reference.name }}</span>
                                            <div class="caption">@{{ reference.title }}</div>
                                        </div>
                                    </footer>
                                </blockquote>
                            </div>

                        </div>
                    </div>

                </section>

                <!-- Section - Latest Posts -->
                <section id="blog" class="section">
                    <div class="container container-custom">
                        <h3 class="text-center mb-80">Latest Posts</h3>

                        <!-- Post / Item -->
                        <div v-if="loadingLatestPosts" id="blog-loading">
                            <svg class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>
                        </div>

                        <article class="post item" v-for="post in latestPosts">
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li>@{{ fullDate(post.pubDate) }}</li>
                                    <li>by @{{ post.author }}</li>
                                </ul>
                                <h4><a href="blog-post-vertical-dark-no-photo.html" v-html="post.title"></a></h4>
                                <div v-html="trimWord(post.description, 500)"></div>
                                <div class="text-center mt-20">
                                    <a :href="post.link" class="btn btn-primary" target="_blank">Read More</a>
                                </div>
                            </div>
                        </article>
                        <div class="text-center mt-50">
                            <a href="https://medium.com/@nickpoulos/" class="btn btn-primary" target="_blank">See All My Posts</a>
                        </div>
                    </div>

                </section>

                <!-- Section - Contact -->
                <section id="contact" class="section min-fullheight">

                    <!-- BG Image -->
                    <div id="google-map" data-latitude="40.762162" data-longitude="-73.018526" data-style="dark" class="bg-map"></div>

                    <div class="container container-custom">
                        <div id="contact-box" class="contact-box bg-primary dark animated" data-animation="fadeInDown" data-animation-delay="500" v-observe-visibility="(isVisible, entry) => visibilityChanged(isVisible, entry, 'contact-box')">
                            <div id="contact-box-content" class="contact-box-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="mb-50"><em>Don’t hesitate to</em> contact me!</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="feature feature-1">
                                            <div class="icon"><span class="ti-desktop"></span></div>
                                            <a href="#" class="h3 font-primary">nick@nickpoulos.info</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="feature feature-1">
                                            <div class="icon"><span class="ti-mobile"></span></div>
                                            <a href="#" class="h3 font-primary"><small>+1</small> (631) 599-9112</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="feature feature-1">
                                            <div class="icon"><span class="ti-location-arrow"></span></div>
                                            <address>Patchogue, New York</address>
                                        </div>
                                    </div>
                                </div>
                                <hr class="sep-line">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="mt-5">Check out my GitHub and LinkedIn!</h5>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <ul class="nav-icons">
                                            <li><a href="https://www.github.com/nickpoulos/"><i style="font-size: 4.5rem;" class="fa fa-github"></i></a></li>
                                            <li><a href="https://www.linkedin.com/in/nickpoulosny"><i style="font-size: 4.5rem;" class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a id="contact-toggle" style="cursor:pointer;" @click="visibilityChanged(false, '', 'contact-box')" class="contact-toggle"></a>
                        </div>
                    </div>

                </section>

            </div>
            <!-- Content / End -->

            <!-- Mobile Nav Toggle -->
            <a href="#" id="vertical-nav-toggle" class="nav-toggle" @click="navToggle()"><span><span></span></span></a>

            <!-- Contact Popup Controls -->
            <!-- div class="contact-popup-ctrl">
                <a style="cursor: pointer;" @click="openContactForm" id="contact-open-form" class="contact-popup-toggle">
                    <vue-typed-js :strings="['Have a question?','Shoot me a msg!']" :loop="true" >
                        <span class="typing"></span>
                    </vue-typed-js>
                </a>
                <a href="#" id="contact-close-form" @click="closeContactForm" class="contact-popup-close" data-toggle="contact-popup"><i class="ti-close"></i></a>
            </--div>
            <!-- Contact Popup -->
            <div id="contact-popup" class="contact-popup dark" :style="{ display: contactOpen ? 'block':'none' }">
                <div class="v-center row">
                    <div class="col-lg-6 col-md-9">
                        <form id="contact-form" class="validate-form">
                            <div class="head">
                                <h3>Send Me A Message</h3>
                            </div>
                            <div class="steps">
                                <!-- Form Step -->
                                <div class="active">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Your name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input id="email" name="email" type="text" class="form-control" placeholder="Your e-mail" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <textarea name="message" id="message" rows="3" class="form-control" placeholder="Your message here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="bottom clearfix">
                                        <nav class="controls">
                                            <button id="send-message" @click="sendEmail" class="btn btn-white btn-submit"><span>Send a message! <i class="i-after ti-check"></i></span></button>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Ajax Modal -->
            <div id="ajax-modal" :style="{ display: (modalOpen) ? 'block':'none'}">
                @include('project-details')
            </div>
            <!-- Ajax Close -->
            <a id="ajax-close" style="cursor: pointer;"  class="ajax-close" data-dismiss="ajax-modal" @click="closeProjectDetails"><i @click="closeProjectDetails" class="ti-close"></i></a>
            <!-- Ajax Loader -->
            <svg id="ajax-loader" class="loader" width="32px" height="32px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="5" stroke-linecap="round" cx="32" cy="32" r="32"></circle></svg>

            <!-- Modal / Video -->
            <div class="modal modal-video fade" id="modalVideo" role="dialog">
                <button class="close" data-dismiss="modal"><i class="ti-close"></i></button>
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <iframe height="500"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS Google Map -->
        <script src="https://maps.google.com/maps/api/js?key={{ config("services.google-maps.apikey") }}"></script>

        <script type="text/javascript">

            window.mix = {
                mounted: function () {

                },
                data: {
                    projects: @json($projects),
                    experience: @json($experiences)
                },
                methods: {
                    bold: function(val) {
                        return val.replace(/\*[A-z0-9,'\$\+ ]+\*/gi, function (x) {
                            return '<strong>' + x.substring(1, x.length - 1) + '</strong>';
                        });
                    }
                }
            }
        </script>
        <!-- JS Core -->
        <script src="/js/app.js"></script>
    </body>

</html>

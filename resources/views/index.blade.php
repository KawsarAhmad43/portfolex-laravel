<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kawsar Ahmad - Junior Software Engineer</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
        <div class="background">
            <span style="top: 10%; left: 10%; animation-duration: 12s;"></span>
            <span style="top: 20%; left: 80%; animation-duration: 18s;"></span>
            <span style="top: 30%; left: 40%; animation-duration: 10s;"></span>
            <span style="top: 50%; left: 20%; animation-duration: 14s;"></span>
            <span style="top: 60%; left: 70%; animation-duration: 16s;"></span>
            <span style="top: 80%; left: 50%; animation-duration: 12s;"></span>
        </div>

        <div class="container">
            <div class="sidebar">
                <div class="menu-title">"menu"= [</div>
                <a href="#home" onclick="showSection('home')">Home,</a>
                <a href="#about" onclick="showSection('about')">About Me,</a>
                <a href="#experience"
                    onclick="showSection('experience')">Experience,</a>
                <a href="#skills" onclick="showSection('skills')">Skills,</a>
                <a href="#projects"
                    onclick="showSection('projects')">Projects,</a>
                <a href="#contact" onclick="showSection('contact')">Contact</a>
                <div class="menu-title">]</div>

                <div class="command-prompt-container">
                    <div class="command-prompt-titlebar">
                        <div class="title">Explore Profile Via <b>cmd</b></div>
                        <div class="controls">
                            <div class="control close"></div>
                            <div class="control minimize"></div>
                            <div class="control maximize"></div>
                        </div>
                    </div>
                    <div class="command-prompt">
                        <span class="prompt-text">C:\N-coder\Observer&gt;</span>
                        <input type="text" id="cmd-input" autofocus
                            placeholder="Type menu-name...">
                    </div>
                </div>
                <div class="greeting-container">
                    <div id="greeting" class="neuromorphic">
                        <!-- The JavaScript will update this section -->
                    </div>
                    <div id="greeting-icon" class="neuromorphic-icon">
                        <!-- The JavaScript will insert the icon here -->
                    </div>
                </div>
            </div>

            <div class="content">

                <div id="home" class="content-section active">
                    <div class="header">Hello World!</div>
                    <div class="home-content">
                        <div class="profile-container">
                            <img src="{{asset('assets/images/profile.png')}}"
                                alt="Kawsar Ahmad" class="profile-image">
                            <div class="profile-text">
                                <h2>I'm Kawsar Ahmad</h2>
                                <p>Experienced Software developer with a strong
                                    background in crafting innovative solutions.
                                    Proven track record in delivering
                                    high-quality software for diverse projects.
                                    I Play With Laravel & Vue.js and Machine
                                    Learning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="https://github.com/KawsarAhmad43"
                            target="_blank" class="button">GitHub</a>
                        <a
                            href="https://www.linkedin.com/in/md-kawsar-ahmad-77800a105/"
                            target="_blank" class="button">LinkedIn</a>
                        <a href="https://www.kaggle.com/kawsarahmad"
                            target="_blank"
                            class="button">Kaggle</a>
                        <a href="{{asset('assets/docs/cv.pdf')}}" target="_blank" download
                            class="button">Download CV</a>
                    </div>
                </div>

                <div id="about" class="content-section">
                    <div class="header">About Me</div>
                    <div class="about-content">
                        <div class="profile-container">
                            <img src="{{asset('assets/images/profile.png')}}"
                                alt="Kawsar Ahmad" class="profile-image">
                            <div class="profile-text">

                                <p>As a seasoned software developer with
                                    expertise in Laravel and Vue.js, I have a
                                    strong track record delivering high-quality
                                    solutions for confidential and government
                                    projects. Proficient in multiple languages
                                    and technologies, I also bring a robust
                                    background in machine learning to create
                                    data-driven solutions. Passionate about
                                    innovation, I thrive on pushing boundaries
                                    and am eager to apply my skills to drive
                                    success. Outside work, I research how
                                    machine learning, distributed databases, and
                                    IoT can improve patient outcomes in
                                    healthcare.</p>
                            </div>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="https://github.com/KawsarAhmad43"
                            target="_blank" class="button">GitHub</a>
                        <a
                            href="https://www.linkedin.com/in/md-kawsar-ahmad-77800a105/"
                            target="_blank" class="button">LinkedIn</a>
                        <a href="https://www.kaggle.com/kawsarahmad"
                            target="_blank"
                            class="button">Kaggle</a>
                        <a href="{{asset('assets/docs/cv.pdf')}}" target="_blank" download
                            class="button">Download CV</a>
                    </div>
                </div>

                <div id="experience" class="content-section">
                    <div class="header">Work Experience</div>
                    <div class="experience-map">
                        <div class="node-container">
                            <div class="node">
                                <div class="node-title">Web Developer</div>
                                <div class="node-org">Onix Computers
                                    System</div>
                                <button class="details-button"
                                    onclick="openModal('modal1')">See
                                    Journey</button>
                            </div>
                            <div class="connector"></div>
                        </div>

                        <div class="node-container">
                            <div class="node">
                                <div class="node-title">Jr Software
                                    Engineer</div>
                                <div class="node-org">Nogor Solutions Ltd</div>
                                <button class="details-button"
                                    onclick="openModal('modal2')">See
                                    Journey</button>
                            </div>
                            <div class="connector"></div>
                        </div>

                        <div class="node-container">
                            <div class="node">
                                <div class="neuro-dot"></div>
                                <div class="node-title">Jr Software
                                    Engineer</div>
                                <div class="node-org">Mediusware Ltd</div>
                                <button class="details-button"
                                    onclick="openModal('modal3')">See
                                    Journey</button>
                            </div>
                        </div>

                    </div>

                    <!-- Modal for Checkpoint 1 -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <span class="close-button"
                                onclick="closeModal('modal1')">&times;</span>
                            <h2>Web Developer at Onix Computers System</h2><hr>
                            <p><strong>Designation:</strong> Web Developer</p>
                            <p><strong>Organization:</strong> Onix Computers
                                System</p>
                            <p><strong>Duration:</strong> July 2021 - Sep
                                2022</p>
                            <ul>
                                <li>During My Journey With Onix Computers System
                                    I begun my Journey in the Pathway of
                                    Development. In my this Journey I worked on
                                    their Large Scale E-Commerce Web Application
                                    built in Laravel Framework.</li> <br>
                                <li>Tech: Laravel, Js, ajax, livewire</li>
                                <li>projects Type: E-commerce & Retailer</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Modal for Checkpoint 2 -->
                    <div id="modal2" class="modal">
                        <div class="modal-content">
                            <span class="close-button"
                                onclick="closeModal('modal2')">&times;</span>
                            <h2>Jr. Software Engineer at Nogor Solutions
                                Ltd</h2> <hr>
                            <p><strong>Designation:</strong> Jr. Software
                                Engineer</p>
                            <p><strong>Organization:</strong> Nogor Solutions
                                Ltd</p>
                            <p><strong>Duration:</strong> Sep 2022 - Feb
                                2024</p>
                            <ul>
                                <li>worked with 8 different types of Projects
                                    Including Government and Confedential
                                    Projects. During this Journey, I've
                                    developed myself in the Path of Software
                                    Engineering. This Office Provided me
                                    Professional Machine Learning
                                    Training.</li><br>
                                <li>Tech: Laravel, Vue, Js, RESTful API, vite,
                                    vuex, ajax, inertia.</li>
                                <li>Projects Type: Local | Government |
                                    Confedential.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Modal for Checkpoint 3 -->
                    <div id="modal3" class="modal">
                        <div class="modal-content">
                            <span class="close-button"
                                onclick="closeModal('modal3')">&times;</span>
                            <h2>Jr. Software Engineer at Mediusware Ltd</h2>
                            <p><strong>Designation:</strong> Jr. Software
                                Engineer</p>
                            <p><strong>Organization:</strong> Mediusware Ltd</p>
                            <p><strong>Duration:</strong> July 2024 -
                                Present</p>
                            <ul>
                                <li>By the grace of Almighty Allah i just
                                    started journey at Mediusware. Long way to
                                    go.</li>
                                <li>Tech: Laravel, Ajax, Js, Docker</li>
                                <li>Projects Type: Confedential</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="skills" class="content-section">
                    <div class="header">Skills</div>

                    <div class="skills-container">
                        <div class="skill-category">
                            <h2>Languages</h2>
                            <div class="skill-icons">
                                <img
                                    src="https://img.icons8.com/color/48/000000/php.png"
                                    alt="PHP" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/javascript.png"
                                    alt="JavaScript" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/python.png"
                                    alt="Python" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/html-5.png"
                                    alt="HTML5" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/css3.png"
                                    alt="CSS3" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/c-plus-plus-logo.png"
                                    alt="C++" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/c-programming.png"
                                    alt="C" class="skill-icon">
                            </div>
                        </div>

                        <div class="skill-category">
                            <h2>Expertise</h2>
                            <div class="skill-icons">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg"
                                    alt="Laravel" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original-wordmark.svg"
                                    alt="Livewire" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"
                                    alt="PHPUnit" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/vue-js.png"
                                    alt="Vue.js" class="skill-icon">
                                <img src="https://vitejs.dev/logo.svg"
                                    alt="Vite" class="skill-icon"
                                    style="width: 48px; height: 48px;">
                                <img
                                    src="https://img.icons8.com/external-outline-juicy-fish/60/000000/external-rest-api-cloud-computing-outline-outline-juicy-fish.png"
                                    alt="REST API" class="skill-icon">
                                <img
                                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/threejs/threejs-original.svg"
                                    alt="Three.js" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/bootstrap.png"
                                    alt="Bootstrap" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg"
                                    alt="Tailwind CSS" class="skill-icon">
                                <img
                                    src="https://avatars.githubusercontent.com/u/32372333?s=200&v=4"
                                    alt="Axios" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-plain.svg"
                                    alt="AJAX" class="skill-icon">
                            </div>
                        </div>

                        <div class="skill-category">
                            <h2>Backend</h2>
                            <div class="skill-icons">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg"
                                    alt="Laravel" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original-wordmark.svg"
                                    alt="Livewire" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg"
                                    alt="PHPUnit" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg"
                                    alt="MySQL" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/sqlite.png"
                                    alt="SQLite" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/firebase.png"
                                    alt="Firebase" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/cloudflare.png"
                                    alt="Cloudflare" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/external-outline-juicy-fish/60/000000/external-rest-api-cloud-computing-outline-outline-juicy-fish.png"
                                    alt="REST API" class="skill-icon">
                            </div>
                        </div>

                        <div class="skill-category">
                            <h2>Technical Skills</h2>
                            <div class="skill-icons">
                                <img
                                    src="https://img.icons8.com/color/48/000000/git.png"
                                    alt="Git" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/github.png"
                                    alt="GitHub" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/gitlab.png"
                                    alt="GitLab" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/bitbucket.png"
                                    alt="Bitbucket" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/docker.png"
                                    alt="Docker" class="skill-icon">
                                <img
                                    src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postman/postman-original-wordmark.svg"
                                    alt="Postman" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/external-flat-juicy-fish/60/000000/external-sanctum-programming-and-development-flat-flat-juicy-fish.png"
                                    alt="Sanctum" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/trello.png"
                                    alt="Trello" class="skill-icon">
                                <img
                                    src="https://img.icons8.com/color/48/000000/jira.png"
                                    alt="Jira" class="skill-icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="projects" class="content-section">
                    <div class="section-header">Projects</div>
                    <div class="cards-container">
                        <!-- Card 1 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Innovative Project Alpha</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-alpha" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Creative Project Beta</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-beta" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Advanced Project Gamma</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-gamma" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Dynamic Project Delta</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-delta" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Innovative Project Epsilon</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-epsilon" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Creative Project Zeta</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-zeta" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 7 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Advanced Project Eta</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-eta" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 8 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Dynamic Project Theta</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-theta" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                        <!-- Card 9 -->
                        <div class="neumo-card">
                            <div class="card-content">
                                <h3>Innovative Project Iota</h3>
                                <p>Technology: Laravel, Vue, Pinia, Docker</p>
                                <a href="https://github.com/KawsarAhmad43/project-iota" target="_blank" class="view-button">View</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="contact" class="content-section">
                    <div class="section-header">Contact</div>
                    <div class="envelopes-container">
                        <!-- Envelope 1 -->
                        <div class="envelope-card" onclick="window.location.href='mailto:kawsarahmad@example.com'">
                            <span class="envelope-label">Gmail</span>
                        </div>
                        <!-- Envelope 2 -->
                        <div class="envelope-card" onclick="window.location.href='https://linkedin.com/in/kawsarahmad43'">
                            <span class="envelope-label">LinkedIn</span>
                        </div>
                        <!-- Envelope 3 -->
                        <div class="envelope-card" onclick="window.location.href='https://github.com/KawsarAhmad43'">
                            <span class="envelope-label">GitHub</span>
                        </div>
                        <!-- Envelope 4 -->
                        <div class="envelope-card" onclick="window.location.href='https://www.kaggle.com/KawsarAhmad43'">
                            <span class="envelope-label">Kaggle</span>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('js/contact.js')}}"></script>
    </body>
</html>

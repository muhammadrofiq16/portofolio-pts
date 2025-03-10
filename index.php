<?php
include "config.php";
if (isset($_POST['message'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $pesan = $_POST['message'];

  $sql = "INSERT INTO contact (nama, email, pesan) VALUES ('$username','$email','$pesan')";

  if ($conn->query($sql)) {
    echo"<script>alert('berhasil kirim')</script>";
  } else {
      echo"<script>alert('gagal kirim')</script>";
  };
};
?>
<style>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <!-- header-->
     <header>
        <div class="main-countainer">
            <div class="nav">
                <div class="logo">
                    <a href="/">RQ</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="#services">service</a></li>
                        <li><a href="#portofolios">portofolio</a></li>
                        <li><a href="#skills">skills</a></li>
                        <li><a href="#contact">contact</a></li>
                        </a></li>
                    </ul>
                </nav>
    
                <div class="burger">
                    <div class="line"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </div>
            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title">My Name Is</h3>
                    <h1 class="hero-name">Muhammad <span>Rofiq</span></h1>
                    <p>
                        Creative front-end developer with more than +5 years of experience in enterprise companies and startups. Proficient in Javascript and React. Passionate about UI/UX
                    </p>
                </div>
                <div class="hero-right">
                    <img src="images/hero.png" alt="Person Standing">
                </div>
                
            </section>
        </div>
     </header>
     <!-- end header-->    

     
     <section id="services">
        <div class="secvices main-container">
            <h3 class="pre-title">Service</h3>
            <h1 class="section-title services-title">specialized In</h1>

            <div class="grid-3">
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 5c-3.923 3.265-5.623 4.716-7.15 4.716-2.44 0-3.681-3.675-4.85-7.716-1.165 4.028-2.41 7.715-4.853 7.715-1.513 0-3.168-1.404-7.147-4.715 3.321 7.018 3 14.292 3 17h18c0-1.718-.478-9.65 3-17zm-16.853 6.715c2.295 0 3.787-1.64 4.853-3.761 1.064 2.122 2.556 3.762 4.85 3.762 1.121 0 2.188-.43 3.126-1.042-.432 1.907-.68 3.72-.82 5.326h-14.322c-.138-1.617-.38-3.423-.808-5.324.927.607 2 1.039 3.121 1.039zm-2.14 8.285c-.003-.593-.016-1.267-.047-2h14.065c-.032.745-.046 1.422-.047 2h-13.971z"/></svg>
                    </div>
                <h4>UI/UX Design</h4>
                <p></p>
                 </div>
     <!-- service 2-->
                <div class="service">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 2c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm0-16c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm-1.577-1.721l-6.423-5.028v-3.352c-.323.066-.658.101-1 .101s-.677-.035-1-.101v3.352l-6.424 5.028c.695.233 1.323.602 1.844 1.093l5.58-4.372 5.579 4.373c.522-.492 1.15-.861 1.844-1.094z"/></svg>
                </div>
                <h4>aplications Development</h4>
                <p>Standart designig ng, buikding, and implementing your aplications with documentation</p>
            </div>

     <!-- service 3-->
                <div class="service">
                    <div class="service-icon">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12m2.557 16h-5.115c.546 2.46 1.441 4.114 2.558 5.744 1.194-1.741 2.041-3.41 2.557-5.744m-7.157 0h-4.567c1.236 2.825 3.704 4.972 6.755 5.716-1.048-1.733-1.783-3.658-2.188-5.716m13.767 0h-4.567c-.391 1.988-1.095 3.887-2.175 5.694 3.012-.763 5.517-2.895 6.742-5.694m-14.005-6h-4.962c-.267 1.313-.267 2.685 0 4h4.915c-.119-1.329-.101-2.672.047-4m7.661 0h-5.647c-.165 1.326-.185 2.672-.053 4h5.753c.133-1.328.111-2.673-.053-4m6.977 0h-4.963c.148 1.328.166 2.671.048 4h4.915c.26-1.285.273-2.648 0-4m-12.156-7.729c-3.077.732-5.567 2.886-6.811 5.729h4.653c.435-2.042 1.178-3.985 2.158-5.729m2.355-.048c-1.089 1.77-1.91 3.453-2.463 5.777h4.927c-.534-2.246-1.337-3.948-2.464-5.777m2.368.069c1.013 1.812 1.733 3.76 2.146 5.708h4.654c-1.232-2.816-3.762-4.958-6.8-5.708"/></svg>
                    </div>
                <h4>Web Development</h4>
                <p>creat and maintainyout website and also care of its performance and raffic capacity.</p>
            </div>
            </div>
        </div>
     </section>
     <!-- end of service -->

     <!--portofolio -->
     <section id="portfolios">
        <div class="portfolios main-container">
            <h3 class="pre-title">My Works</h3>
            <h1 class="section-title">Featured Portfolios</h1>

            <div class="grid-3">
                <!-- portfolio 1 -->
                <div class="portfolio">
                    <div class="portfolio-cover">
                        <img src="./images/foto2.jpg" alt="portfolio 1">
                    </div>

                    <div class="portfolio-info">
                        <div class="portfolio-title">  
                            <h4>Agency Website</h4>
                            <a href="/" class="portfolio-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                            </a>
                        </div>

                        <div class="portfolio-tags">
                            <div>react</div>
                            <div>tallwind</div>
                        </div>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia eligendi cupiditate asperiores nam, beatae repudiandae expedita fugit, quos dicta ut unde rerum vero repellat vitae.</p>
                    </div>
                </div>

                <!-- portfolio 2 -->
                <div class="portfolio">
                    <div class="portfolio-cover">
                        <img src="./images/foto1.png" alt="portfolio 3">
                    </div>

                    <div class="portfolio-info">
                        <div class="portfolio-title">
                            <h4>Agency Website</h4>
                            <a href="/" class="portfolio-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                            </a>
                        </div>

                        <div class="portfolio-tags">
                            <div>Vei</div>
                            <div>sontent full</div>
                        </div>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia eligendi cupiditate asperiores nam, beatae repudiandae expedita fugit, quos dicta ut unde rerum vero repellat vitae.</p>
                    </div>
                </div>
                <!-- portfolio 3 -->
                <div class="portfolio">
                    <div class="portfolio-cover">
                        <img src="./images/portfolio.jpg" alt="portfolio 3">
                    </div>

                    <div class="portfolio-info">
                        <div class="portfolio-title">
                            <h4>Dasboard admin</h4>
                            <a href="/" class="portfolio-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"/></svg>
                            </a>
                        </div>

                        <div class="portfolio-tags">
                            <div>reac</div>
                            <div>materialies</div>
                        </div>

                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia eligendi cupiditate asperiores nam, beatae repudiandae expedita fugit, quos dicta ut unde rerum vero repellat vitae.</p>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- end portofolio -->

     <!-- skills and education -->
    <section id="skills">
        <div class="skills main-container">
            <h3 class="pre-title">Learning path</h3>
            <h1 class="section-title">Skills & education</h1>

            <div class="skills-grid">
                <div class="skills-left">
                    <!-- education 1 -->
                    <div class="education">
                        <div class="line">
                            <div> </div>
                        </div>
                            <div>

                                <div class="education-info">
                                    <h4 class="education-title">SMK TELKOM PURWOKERTO</h4>
                                    <p>sekolah menengah kejuruan</p>
                                    <h4 class="education-years">2024-2027</h4>
                                </div>

                            </div>
                        
                    </div>
                    <!-- education 2 -->
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                            <div>

                                <div class="education-info">
                                    <h4 class="education-title">SMK TELKOM PURWOKERTO</h4>
                                    <p>sekolah menengah kejuruan</p>
                                    <h4 class="education-years">2024-2027</h4>
                                </div>
                            </div>
                        
                    </div>
                    <!-- education 3 -->
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                            <div>

                                <div class="education-info">
                                    <h4 class="education-title">SMK TELKOM PURWOKERTO</h4>
                                    <p>sekolah menengah kejuruan</p>
                                    <h4 class="education-years">2024-2027</h4>
                                </div>

                            </div>
                    </div>
                </div>
                <div class="skills-right">
                    <p>Kemampuan untuk bekerja dengan sistem manajemen basis data seperti MySQL, PostgreSQL, MongoDB, atau Firebase untuk menyimpan, mengelola, dan mengakses data dengan efisien.</p>

                    <div class="skills-list">
                        <ul>
                        <li>React JS</li>
                        <li>Node JS</li>
                        <li>MongoDB</li>
                        <li>HTML</li>
                        <li>Veu JS</li>
                        </ul>
                        
                        <ul>
                            <li>React JS</li>
                            <li>Node JS</li>
                            <li>MongoDB</li>
                            <li>HTML</li>
                            <li>Veu JS</li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- end of skills -->

      <!-- contack -->
       <section id="contact">
       <div class="contact">
        <div class="contack main-container">
            <div class="contact-left">
                <form class="contact-form" method="post" >
                    <div>
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div>
                        <textarea name="message" id="message" placeholder="message" cols="30" rows="10  "></textarea>
                    </div>
                    <div>
                    <input type="submit" value="send message" class="btn-submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-right">
                <!-- contact 1 -->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 1c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm12 14h-24l4-8h3.135c.385.641.798 1.309 1.232 2h-3.131l-2 4h17.527l-2-4h-3.131c.435-.691.848-1.359 1.232-2h3.136l4 8z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Address</h4>
                            <p>3424 Layanan Avenue, Fayeteville, NC</p>
                        </div>
                    </div>
                <!-- contact 2 -->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Address</h4>
                            <p>3424 Layanan Avenue, Fayeteville, NC</p>
                        </div>
                    </div>
                <!-- contact 3 -->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>
                        </div>
                        <div class="contact-item-detail">
                            <h4>Address</h4>
                            <p>3424 Layanan Avenue, Fayeteville, NC</p>
                        </div>
                    </div>
            </div>
       </div>
       </section>

      <!-- contack end -->
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $subject = $_POST['subject'];
  // $phone = $_POST['phone'];
  // $message = "Nombre: " . $name . "<br>
  //   Email: " . $email . "<br>
  //   Mensaje: " . $_POST['message'];

  // if (mail('emanuel15300135@gmail.com', $subject, $message)) {
  //   echo '<script type="text/javascript">
  //   alert("Mensaje enviado correctamente");
  //   </script>';
  // } else {
  //   echo '<script type="text/javascript">
  //   alert("Error al enviar el mensaje");
  //   </script>';
  // }

  include 'path/to/mailin-api/Mailin.php';
  $mailin = new Mailin('emanuel15300135@gmail.com', 'vcdk1TshMOxHyCXG');
  $mailin->addTo('emanuel15300135@gmail.com', 'Emanuel Jimenez')->setFrom('emanuel15300135@gmail.com', 'Emanuel Jimenez')->setReplyTo('emanuel15300135@gmail.com', 'Emanuel Jimenez')->setSubject('Escriba el asunto aquí')->setText('Hola')->setHtml('<strong>Hola</strong>');
  $res = $mailin->send();

  // // El mensaje de éxito será enviado de esta forma:
  // {'result' => true, 'message' => 'E-mail enviado'}
  if ($res['result'] === true) {
    echo '<script type="text/javascript">
    alert("Mensaje enviado correctamente");
    </script>';
  } else {
    echo '<script type="text/javascript">
    alert("Error al enviar el mensaje");
    </script>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emanuel's Portfolio</title>

  <!-- swiper css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- box icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- OPEN GRAPH -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Emanuel's Portfolio">
  <meta property="og:description" content="Web developer and nanotechnology engineer">
  <meta property="og:image" content="https://github.com/EmanuelJimenezSanchez/portfolio/blob/main/images/portfolio-image.jpg">
  <meta property="og:image:alt" content="A picture of my portfolio's home">
  <meta property="og:url" content="https://emanuel-portfolio.domcloud.dev/" />
</head>

<body>

  <!-- header design -->
  <header class="header">
    <a href="/" class="logo">Portfolio.</a>

    <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
    </nav>

    <div class="bx bx-moon" id="darkMode-icon"></div>

    <div class="bx bx-menu" id="menu-icon"></div>
  </header>

  <!-- home section design -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hello, I am</h3>
      <h1>Emanuel J.</h1>
      <p>
        A nanotechnology engineer who is passionate about web development.
      </p>
      <p>I just finished my career in nanotechnology and now I'm looking for a web development job.</p>

      <div class="social-media">
        <a href="https://github.com/EmanuelJimenezSanchez"><i class='bx bxl-github'></i></a>
        <!-- <a href="metamorfosissaludybelleza@gmail.com"><i class='bx bxl-gmail'></i></a> -->
        <a href="https://wa.link/wpcccv"><i class='bx bxl-whatsapp'></i></a>
        <a href="https://www.linkedin.com/in/emanuel-jimenez-sanchez-a0b905226/"><i class='bx bxl-linkedin'></i></a>
        <a href="mailto:emanuel.jimenez9123@alumnos.udg.mx"><i class='bx bxl-gmail'></i></a>
      </div>

      <a href="/src/Emanuel_JiménezSánchez_CV_3.pdf" class="btn">Download CV</a>
    </div>

    <div class="profession-container">
      <div class="profession-box">
        <div class="profession" style="--i:0;">
          <i class='bx bx-code-alt'></i>
          <h3>Web Developer</h3>
        </div>
        <div class="profession" style="--i:1;">
          <i class='bx bx-flask'></i>
          <h3>Nanotechnology engineer</h3>
        </div>
        <div class="profession" style="--i:2;">
          <i class='bx bx-code-alt'></i>
          <h3>Web Developer</h3>
        </div>
        <div class="profession" style="--i:3;">
          <i class='bx bx-flask'></i>
          <h3>Nanotechnology engineer</h3>
        </div>

        <div class="circle"></div>
      </div>

      <div class="overlay"></div>
    </div>

    <div class="home-img">
      <img src="images/home.png" alt="">
    </div>
  </section>

  <!-- about section design -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="images/about2.png" alt="">
    </div>

    <div class="about-content">
      <h2 class="heading">About <span>Me</span></h2>
      <p>
        I am a nanotechnology engineer who is passionate about web development.
      </p>
      <p>
        I just finished my career in
        nanotechnology and now I'm looking for a web development job. I have experience in HTML, CSS, JavaScript,
        React, NodeJS, MySQL, Git, GitHub, and more.
      </p>
      <p>
        I am a self-taught person who is always
        looking to learn new things and improve my skills. I am a person who likes to work in a team and I am
        always willing to help others.
      </p>
      <a href="https://www.linkedin.com/in/emanuel-jimenez-sanchez-a0b905226/" class="btn">Chat with me</a>
    </div>
  </section>

  <!-- services section design -->
  <section class="services" id="services">
    <h2 class="heading">My <span>Services</span></h2>

    <div class="services-container">
      <div class="services-box">
        <i class='bx bx-code-alt'></i>
        <h3>Web Development</h3>
        <p>Creation of websites that adapt to different devices and screen sizes for an optimal user experience.</p>
        <!-- <a href="#" class="btn">Read More</a> -->
      </div>
      <div class="services-box">
        <i class='bx bxs-paint'></i>
        <h3>Maintenance and Updates</h3>
        <p>Offering ongoing services to ensure the smooth operation and security of existing websites.</p>
        <!-- <a href="#" class="btn">Read More</a> -->
      </div>
      <!-- <div class="services-box">
                <i class='bx bx-bar-chart-alt'></i>
                <h3>UI/UX Design</h3>
                <p>Developing attractive user interfaces and intuitive user experiences to enhance usability.</p>
                <a href="#" class="btn">Read More</a>
            </div> -->
    </div>
  </section>

  <!-- portfolio section design -->
  <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>

    <div class="portfolio-container">
      <div class="portfolio-box">
        <img src="images/portfolio3.jpg" alt="">

        <div class="portfolio-layer">
          <h4>DevWebCamp</h4>
          <p>Page for an event with multiple conferences and various types of registrations including authentication, online payments, and event registrations.</p>
          <a href="https://emanuel-devwebcamp.domcloud.dev"><i class='bx bx-link-external'></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="images/portfolio1.jpg" alt="">

        <div class="portfolio-layer">
          <h4>UpTask</h4>
          <p>A task manager tool</p>
          <a href="https://uptask-emanuel.domcloud.dev"><i class='bx bx-link-external'></i></a>
        </div>
      </div>

      <div class="portfolio-box">
        <img src="images/portfolio2.jpg" alt="">

        <div class="portfolio-layer">
          <h4>AppSalon</h4>
          <p>A web application to schelude appointments for a hairdresser</p>
          <a href="https://appsalon-emanuel.domcloud.dev"><i class='bx bx-link-external'></i></a>
        </div>
      </div>

      <!-- <div class="portfolio-box">
        <img src="images/portfolio4.jpg" alt="">

        <div class="portfolio-layer">
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
          <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
      </div>
      <div class="portfolio-box">
        <img src="images/portfolio5.jpg" alt="">

        <div class="portfolio-layer">
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
          <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
      </div>
      <div class="portfolio-box">
        <img src="images/portfolio6.jpg" alt="">

        <div class="portfolio-layer">
          <h4>Web Design</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ipsam est.</p>
          <a href="#"><i class='bx bx-link-external'></i></a>
        </div>
      </div> -->
    </div>
  </section>

  <!-- testimonial design -->
  <!-- <div class="testimonial-container">
    <h2 class="heading">Valuable <span>Testimonial</span></h2>

    <div class="testimonial-wrapper">
      <div class="testimonial-box mySwiper">
        <div class="testimonial-content swiper-wrapper">
          <div class="testimonial-slide swiper-slide">
            <img src="images/testimonial1.jpg" alt="">
            <h3>Jackson Levi</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
              iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
              assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
              provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
              aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
              dolores.</p>
          </div>
          <div class="testimonial-slide swiper-slide">
            <img src="images/testimonial2.jpg" alt="">
            <h3>Flora Ocean</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
              iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
              assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
              provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
              aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
              dolores.</p>
          </div>
          <div class="testimonial-slide swiper-slide">
            <img src="images/testimonial3.jpg" alt="">
            <h3>Julian Grayson</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem dignissimos aliquid
              iure delectus corrupti impedit, beatae aperiam ad iusto nostrum possimus cum pariatur harum
              assumenda suscipit a, qui, tempora maxime nulla facere quo ipsum tempore. Atque libero
              provident ad aut officia pariatur voluptate quaerat delectus nesciunt, sequi eligendi
              aperiam fugit unde nihil, iste similique illum. Dignissimos enim officia consequuntur
              dolores.</p>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div> -->

  <!-- contact section design -->
  <!-- <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>

    <form method="POST">
      <div class="input-box">
        <input type="text" placeholder="Full Name" name="name">
        <input type="email" placeholder="Email Address" name="email">
      </div>
      <div class="input-box">
        <input type="number" placeholder="Mobile Number" name="phone">
        <input type="text" placeholder="Email Subject" name="subject">
      </div>
      <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" name="message"></textarea>
      <input type="submit" value="Send Message" class="btn">
    </form>
  </section> -->

  <!-- footer design -->
  <footer class="footer">
    <div class="footer-text">
      <p>Copyright &copy; 2023 | All Rights Reserved.</p>
    </div>

    <div class="footer-iconTop">
      <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
  </footer>


  <!-- scroll reveal -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- swiper js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- custom js -->
  <script src="js/script.js"></script>
</body>

</html>
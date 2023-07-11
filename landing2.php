<?php
require_once("db.php");
session_start();
$query = "SELECT * FROM user WHERE user_id='{$_SESSION['userid']}'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

     <!-- Bootstrap linksheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>FAB CARDS</title>
    
    <!-- Bootstrap core CSS -->
    <link href="static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="static/assets/css/fontawesome.css">
    <link rel="stylesheet" href="static/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="static/assets/css/owl.css">
    <link rel="stylesheet" href="static/assets/css/lightbox.css">


<style>.navbar-buttons {
  display: flex;
  flex-direction: row;
  position: absolute;
  font-weight: 700;
}

.login {
  position: absolute;
  left: 1120px;
  padding-top:10px;
  border: 5px solid transparent;
  font-size: 13px;
  padding: 10px 5px;
  text-transform:uppercase;
  letter-spacing: 1px; 
  transition: all 0.5s;
}

.class {
  position: absolute;
  left: 1240px;
  padding-top:5px;
  border: 2px solid transparent;
  font-size: 13px;
  padding: 10px 5px;
  text-transform:uppercase;
  letter-spacing: 0.5px;
}

div.class:hover {
  border: 5px 5px solid #f5a425;
}
</style>

  </head>
<body>

  <header class="main-header clearfix" role="header">
  <div class="logo">
    <a href="#"><em>FAB</em> CARD</a>
  </div>
  
  <div class="navbar-buttons">
    <div class="login" ><li><a href = "option.php">Dashboard</a></li></div>
    <div class="class" ><li><a href = ""><?php echo "Welcome ".$row['username']?></a></li></div>  
  </div>
  </header>
  

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="static/assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>An E-learning Edutainment Platform</h6>
              <h2><em>Your</em> Classroom</h2>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post first-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>All Courses</h4>
              </div>
              <div class="content-hide">
                <p>This platform is build to make students learn their subjects in an easy and effective way.Active recall method is the key here</p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Take tests</h4>
              </div>
              <div class="content-hide">
                <p>You will allowed to take tests in the flashcards thereby knowing the effect of learning by this method</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Know your progress</h4>
              </div>
              <div class="content-hide">
                <p>Get to know your performance by taking up tests and also contributing to this e-learning platform</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Flashcards?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Visual aids</a></li>
              <li><a href='#tabs-3'>Give your thoughts!</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="static/assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>Flashcards are often used to memorize vocabulary, historical dates, formulas or any subject matter that can be learned via a question-and-answer format.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="static/assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Visual Aids</h4>
                    <p>You can modify these flashcards by adding photos or videos for effective way of learning.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="static/assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Give Your thoughts</h4>
                    <p>You can build your own flashcards and let the world know too!</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Choose Your Course</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="static/assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Physics</h4>
              <p>Physics is the natural science that studies matter, its fundamental constituents, its motion and behavior through space and time, and the related entities of energy and force. </p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Chemistry</h4>
              <p>Chemistry is the scientific study of the properties and behavior of matter. It is a physical science under natural sciences that covers the elements that make up matter to the compounds made of atoms, molecules and ions</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Mathematics</h4>
              <p>Mathematics is an area of knowledge that includes the topics of numbers, formulas and related structures, shapes and the spaces in which they are contained, and quantities and their changes.</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Geography</h4>
              <p>the study of the physical features of the earth and its atmosphere, and of human activity as it affects and is affected by these, including the distribution of populations and resources and political and economic activities</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Botany</h4>
              <p> Botany is one of the world’s oldest natural sciences. Initially, Botany included all the plant-like organisms such as algae, lichens, ferns, fungi, mosses along with actual plants</p>
              <!-- <div class="author-image">
                <img src="static/assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div> -->
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-06.jpg" alt="">
            <div class="down-content">
              <h4>Zoology</h4>
              <p>Zoology is the branch of biology that studies the animal kingdom, including the structure, embryology, classification, habits, and distribution of all animals, both living and extinct, and how they interact with their ecosystems.</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-07.jpg" alt="">
            <div class="down-content">
              <h4>English</h4>
              <p>English is a West Germanic language in the Indo-European language family, with its earliest forms spoken by the inhabitants of early medieval England. It is named after the Angles, one of the ancient Germanic peoples that migrated to the island of Great Britain. </p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-08.jpg" alt="">
            <div class="down-content">
              <h4>French</h4>
              <p>French is a Romance language of the Indo-European family. It descended from the Vulgar Latin of the Roman Empire, as did all Romance languages. French evolved from Gallo-Romance, the Latin spoken in Gaul, and more specifically in Northern Gaul</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-09.jpg" alt="">
            <div class="down-content">
              <h4>Tamil</h4>
              <p>Tamil is a Dravidian language natively spoken by the Tamil people of South Asia. Tamil is an official language of the Indian state of Tamil Nadu, the sovereign nations of Sri Lanka and Singapore, and the Indian Union territory of Puducherry.</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-10.jpg" alt="">
            <div class="down-content">
              <h4>Computer Science</h4>
              <p>Computer science is the study of computation, automation, and information. Computer science spans theoretical disciplines (such as algorithms, theory of computation, information theory, and automation) to practical disciplines (including the design and implementation of hardware and software)</p>
            </div>
          </div>
          <div class="item">
            <img src="static/assets/images/courses-011.jpg" alt="">
            <div class="down-content">
              <h4>History</h4>
              <p>History (derived from Ancient Greek(historía) 'inquiry; knowledge acquired by investigation') is the systematic study and documentation of human activity. The time period of events before the invention of writing systems is considered prehistory. "History" is an umbrella term comprising past events</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our flashcards is for you</span>
            <h4>Flashcards are optimized for learning, testing, and training.</em></h4>
            <p> Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. 
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <figure>
                <img src="static/assets/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
         <form id="contact" action="contact.php" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2023 by Bhuvana , Athithyaa
          
           | Design: <a rel="sponsored" target="_parent">SEL</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
    <script src="static/vendor/jquery/jquery.min.js"></script>
    <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/assets/js/isotope.min.js"></script>
    <script src="static/assets/js/owl-carousel.js"></script>
    <script src="static/assets/js/lightbox.js"></script>
    <script src="static/assets/js/tabs.js"></script>
    <script src="static/assets/js/video.js"></script>
    <script src="static/assets/js/slick-slider.js"></script>
    <script src="static/assets/js/custom.js"></script>
    <script>
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };
        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>
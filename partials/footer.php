<!--================Footer Area =================-->
        <footer class="footer_area p_120">
          <div class="container">
            <div class="row footer_inner">
              <div class="col-lg-8 col-sm-8">

                <aside class="f_widget ab_widget">
                  <div class="f_title">
                    <h3>LES MOTS DE LA FIN</h3>
                  </div>
                  <!-- Carrousel Citations -->
                  <div id="citations" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-interval="10000">
                        <p class="text-justify">La question que je me pose presque tous les jours est : Suis-je en train de faire la chose la plus importante que je pourrais faire ? … Si je ne ressens pas que je suis en train de travailler sur le principal problème que je peux contribuer à résoudre, alors je ne suis pas fier de la façon dont je passe mon temps. <span class="font-italic">- Mark Zuckerberg / Facebook -</span></p>
                      </div>
                      <div class="carousel-item" data-interval="10000">
                        <p class="text-justify">Ceux qui réussissent, en général, ne font rien d’extraordinaire, mais prennent la peine de faire des choses qu’il est si facile de ne pas faire. <span class="font-italic">- Paul Dewandre -</span></p>
                      </div>
                      <div class="carousel-item" data-interval="10000">
                        <p class="text-justify">Tout le monde a une idée. Mais il s’agit surtout de la mettre à exécution et d’attirer d’autres personnes pour vous aider à travailler et améliorer cette idée. <span class="font-italic">- Jack Dorsey / Twitter -</span></p>
                      </div>
                    </div>
                  </div>
                </aside>

              </div>
              <div class="col-lg-2"></div>
              <div class="col-lg-2">

                <aside class="f_widget social_widget">
                  <div class="f_title ">
                    <h3>RETROUVER MOI</h3>
                    <p>sur les réseaux sociaux</p>
                  </div>
                  <ul class="list ">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                  </ul>
                </aside>

              </div>
            </div>
            <br>
            <div class="row footer_inner mt-5">
              <div class="col-12">
                <aside class="f_widget ab_widget">
                  <p class="text-center">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droits réservés | codé avec <i class="fas fa-heart"></i> par <a href="https://www.guillaume-couget.fr" target="">Guillaume COUGET</a>
                  </p>
                </aside>
              </div>
            </div>
          </div>
        </footer>
        <!--================End Footer Area =================-->





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>

            <!-- SCRIPT TYPING CAROUSEL -->
        <script type="text/javascript">
          var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
              this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
              this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          var that = this;
          var delta = 300 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
              delta = this.period;
              this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
              this.isDeleting = false;
              this.loopNum++;
              delta = 500;
          }

          setTimeout(function() {
              that.tick();
          }, delta);
        };

        window.onload = function() {
          var elements = document.getElementsByClassName('txt-rotate');
          for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-rotate');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtRotate(elements[i], JSON.parse(toRotate), period);
          }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #000 }";
        document.body.appendChild(css);
        };

      </script>

    </body>
</html>

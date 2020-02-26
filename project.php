<?php
require_once 'partials/header-princ.php';


?>

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Portfolio</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="project.php">Mes Projets</a>
						</div>

					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Projects Area =================-->
        <section class="projects_area p_120">
        	<div class="container">
        		<div class="main_title">
					<h2>Mes différents projets</h2>
					<p>vous découvrirez l'ensemble de mes projets</p>
				</div>
        		<div class="projects_fillter">
					<ul class="filter list">
						<li class="active" data-filter="*"><a href="#">Toutes les Categories</a></li>
						<li data-filter=".ecom"><a href="#">Ecommerce</a></li>
						<li data-filter=".vitr"><a href="#">Vitrine</a></li>
						<li data-filter=".web"><a href="#">Web Design</a></li>
						<li data-filter=".perso"><a href="#">Perso</a></li>
						<li data-filter=".pro"><a href="#">Pro</a></li>
						<li data-filter=".form"><a href="#">Formation</a></li>
					</ul>
				</div>

				<div class="projects_inner row">
					<div class="col-lg-4 col-sm-6 ecom web">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-1.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 ecom vitr perso">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-2.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 vitr pro perso">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-3.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 ecom web pro form">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-4.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 ecom vitr">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-5.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 brand vitr web">
						<div class="projects_item">
							<img class="img-fluid" src="img/projects/projects-6.jpg" alt="">
							<div class="projects_text">
								<a href=""><h4>3D Helmet Design</h4></a>
								<p>Client Project</p>
							</div>
						</div>
					</div>

				</div>
        	</div>
        </section>
        <!--================End Projects Area =================-->



<?php
 require_once 'partials/footer.php';
?>

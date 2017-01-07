@extends('landing.indexBase')

@section('title')
	Curiosity Educación | Videojuegos educativos
@stop

@section('menu')
	<li class="nav-item anc">
		<a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item anc">
		<a class="nav-link" href="#nosotros">{{--Lang::get('landingPage.menu.whatIs')--}}</a>
	</li>
	<li class="nav-item anc">
		<a class="nav-link" href="#funcionamiento">{{--Lang::get('landingPage.menu.howfunction')--}}</a>
	</li>
	 <li class="nav-item anc">
		<a class="nav-link" href="#video">{{--Lang::get('landingPage.menu.video')--}}</a>
	</li>
	<li class="nav-item anc">
		<a class="nav-link" href="#membresia">{{--Lang::get('landingPage.menu.paymentOption')--}}</a>
	</li>
	<li class="nav-item">
		<a href="#" data-toggle="modal" data-target="#modal-login" class="btn btn-outline-success btn-rounded waves-effect pull-right" style="color:#fff !important;">Iniciar Sesión{{--Lang::get('landingPage.menu.logIn')--}}</a>
	</li>
	<li class="nav-item">
		<a class="btn btn-warning btn-rounded pull-right" style="color:#fff; margin-left:10px;" href="/suscripcion">Registrarme{{--Lang::get('landingPage.menu.createAccount')--}}</a>
	</li>
@stop

@section('contenido')

<!-- Modal de login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Login</h3>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form2" class="form-control">
                    <label for="form2">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form3" class="form-control">
                    <label for="form3">Your password</label>
                </div>
                <div class="text-xs-center">
                    <button class="btn btn-primary btn-lg">Login</button>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- / Modal de login -->

<!-- Sección de imagen a pantalla completa -->
	<div class="view-entrada hm-black-strong" id="inicio">
		<div class="full-bg-img flex-center">
			<ul class="animated rubberBand"><br>
				<li class="container-fluid">
					<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12">
						<img src="/packages/assets/media/images/landing/nuevo_log.png" alt="logo_curiosity" class="img-responsive" id="logo_entrada" style="width:100%; height:;">
					</div>
				</li>
				<li class="container-fluid">
					<h1 class="h1-responsive font-curiosity white-text">{{Lang::get('landingPage.eslogan')}}</h1>
				</li>
				<div class="col-xs-1 col-md-2"></div>
				<div class="button-sm-access col-xs-10 col-md-8">
				  <a class="btn btn-block success-rounded-outline waves-effect pull-right" style="color:#fff;" href="/login">Iniciar sesión</a>
				  <a class="btn btn-block danger-rounded-outline waves-effect pull-right" style="color:#fff;" href="/suscripcion">Registrarse</a>
				</div>
				<div class="col-xs-1 col-md-2"></div>
				<br>
			</ul>
		</div>
	</div>
<!-- Fin de sección a pantalla completa -->

<!-- Sección ¿Qué es curiosity? -->
	<section id="nosotros" class="margen-dispositivo">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow zoomInUp">
			<h2 class="section-header h2-responsive">
				<img src="/packages/assets/media/images/landing/computing.png" alt="Curiosity" style="width:35px; height:35px;" class="">
				¿Qué es Curiosity?
			</h2>
		</div>
		<div class="container" id="content-nosotros">
			<div class="col-md-12">
				<div class="col-md-6 col-sm-12 elemento-nosotros" id="">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<img src="/packages/assets/media/images/landing/laptop.png" alt="plataforma" style="" class="wow bounceInLeft img-fluid">
					</div>
					<div class="col-md-9 col-sm-7">
                      <p class="text-justify"><b>Plataforma web </b> diseñada para mejorar la educación de los niños y aprender jugando.
                      </p>
					</div>
				</div>
				<div class="col-md-6">
				    <div class="col-md-12  col-sm-12 elemento-nosotros" id="">
                      <div class="col-md-3 col-sm-4">
                          <img src="/packages/assets/media/images/landing/equidad.svg" alt="equidad" style="" class="wow bounceInLeft img-fluid">
                      </div>
                      <div class="col-md-9 col-sm-7">
                          <p class="text-justify"><b>Equidad.</b> Acceso a los mejores profesores de diferentes escuelas para así evitar la desigualdad educativa.</p>
                      </div>
                  </div>
              </div>
				<div class="col-md-6 offset-md-3 col-sm-12 elemento-nosotros" id="content-elemento">
					<div class="col-md-3 col-sm-4">
						<img src="/packages/assets/media/images/landing/diversion.svg" alt="diversion" style="" class="img-responsive wow bounceInLeft img-fluid">
					</div>
					<div class="col-md-9 col-sm-7">
                      <p class="text-justify"><b>Diversión </b> en el mundo de la educación, para volver el aprendizaje uno de sus mejores momentos.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
<!-- Fin Sección ¿Qué es curiosity? -->

<!-- Sección ¿Cómo funciona curiosity? -->
	<section id="funcionamiento" class="margen-dispositivo">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow bounceIn">
				<h2 class="section-header h2-responsive">
					<img src="/packages/assets/media/images/landing/pencil.png" alt="como funciona curiosity" style="width:35px; height:35px;" class="">
					¿Cómo funciona?
				</h2>
			</div>
			<div class="container">
				<div class="col-md-12">
				    <div class="col-md-3 col-sm-6">
						<div class="view hm-zoom overlay hm-orange-strong">
							<img src="/packages/assets/media/images/landing/fun-game.jpg" alt="Juegos" class="img-thumbnail img-responsive img-fluid">
						<div class="mask flex-center">
							<h4 class="white-text">Juegos</h4>
						</div>
						</div>

  					<div class="funcionamiento-text"><p>Un tema, una aventura. <br> Diseñamos cada juego con el propósito de que el niño aprenda divirtiéndose y con cada tema viva una aventura </p></div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="view hm-zoom overlay hm-purple-strong">
							<img src="/packages/assets/media/images/landing/fun-video.jpg" alt="Videos" class="img-thumbnail img-responsive img-fluid">
						<div class="mask flex-center">
							<h4 class="white-text">Videos explicativos</h4>
						</div>
						</div>

  					<div class="funcionamiento-text"><p>¿Me lo explicas? <br> Desarrollamos videos animados con  explicaciones de los mejores profesores para comprender mejor cada tema. </p></div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="view hm-zoom overlay hm-blue-strong">
							<img src="/packages/assets/media/images/landing/fun-pdf.jpg" alt="PDF" class="img-thumbnail img-responsive img-fluid">
						<div class="mask flex-center">
							<h4 class="white-text">Documentos PDF</h4>
						</div>
						</div>

  					<div class="funcionamiento-text"><p>Algo que leer. <br>Documentos evaluados por expertos, que ayudarán a comprender mejor cada tema.</p></div>
					</div>
					<div class="col-md-3 col-sm-6" id="content-elemento">
						<div class="view hm-zoom overlay hm-yellow-strong">
							<img src="/packages/assets/media/images/landing/fun-feedback.jpg" alt="Retroalimentación" class="img-thumbnail img-responsive img-fluid">
						<div class="mask flex-center">
							<h4 class="white-text">Retroalimentación</h4>
						</div>
						</div>

  					<div class="funcionamiento-text"><p>¿Aprendió? <br> El desempeño de tu hijo a un solo click. Evaluamos y detectamos distintas áreas de oportunidad para que nunca deje de mejorar.</p></div>
					</div>
				</div>
			</div>
	</section>
<!-- Fin Sección ¿Cómo funciona curiosity? -->

<!-- Separador 1 -->
<div class="col-md-12 view hm-cyan-light" id="separador1">
	<div class="mask flex-center">
      	<center>
      		<h2 class="white-text h1-responsive">Aprendiendo de una manera DIVERTIDA <br>
      			<a href="/suscripcion" type="button" class="btn btn-secondary btn-rounded waves-effect">Registrarme ahora</a>
			</h2>
		</center>
  	</div>
</div>

<!-- Sección de Video -->
	<section id="video" class="">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow pulse">
				<h2 class="section-header h2-responsive">
					<img src="/packages/assets/media/images/landing/mortarboard.png" alt="Conoce mejor a curiosity" style="width:35px; height:35px;" class="">
					Conócenos mejor
				</h2>
			</div>
			<div class="container">
				<div class="col-md-12" id="">
					<div class="col-md-6">
						<img src="/packages/assets/media/images/landing/video-img.jpg" alt="construccion curiosity" class="img-fluid center-block animated zoomInRight" id="img-video">
					</div>
					<div class="col-md-6" id="content-iframe">
						<iframe width="100%" height="300px" id="videoCU" src="https://www.youtube.com/embed/9Ixi5LyyMuw" frameborder="0" allowfullscreen=""></iframe><br><br>
						<center>
							<button type="button" class="btn btn-fb btn-lg" id="shareFB"><small>compartir en <br></small><i class="fa fa-facebook left"></i> Facebook</button>
							<button type="button" class="btn btn-tw btn-lg" id="shareT"><small>compartir en <br></small><i class="fa fa-twitter left"></i> Twitter</button>
						</center>
					</div>
				</div>
			</div>
	</section>
<!-- Fin Sección de Video -->

<!-- Sección de Colaboradores -->
	<section id="colaboradores" class="margen-dispositivo">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow bounceInRight">
			<h2 class="section-header h2-responsive">
				<img src="/packages/assets/media/images/landing/school.png" alt="escuela" style="width:35px; height:35px;" class="">
				Colaboradores
			</h2>
		</div>
		<div class="container">
			<div class="col-md-12" id="carusel-colaboradores">
				<div class="col-md-12 col-md-offset-">
				<!--Carousel Wrapper-->
					<div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

						<!--Controls-->
						<div class="controls-top">
							<a class="btn-floating btn-small indicadores" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
							<a class="btn-floating btn-small indicadores" href="#multi-item-example2" data-slide="next"><i class="fa fa-chevron-right"></i></a>
						</div>
						<!--/.Controls-->
                          <?php $slide=0; $status="active"; $contador=0; $long = count($escuelas);?>
                          @foreach($escuelas as $escuela)
                             <?php $contador++; ?>
                              @if($contador == 3 || $contador == $long)
                                  <!--Indicators-->
                                  @if($slide == 0)
                                  <ol class="carousel-indicators">
                                  @endif

                                      <li data-target="#multi-item-example2" data-slide-to="{{$slide}}" class="{{$status}}" style="background-color:#65499d;"></li>
                                  <?php $status = ""; $slide++; $contador =0;?>

                              @endif
						@endforeach
						        </ol>
						<!--/.Indicators-->

						<!--Slides-->
						<div class="carousel-inner" role="listbox">

							<!--First slide-->
                                 <?php $contador_esc=0; $long = count($escuelas); $control=0;?>
                                  @foreach($escuelas as $escuela)
                                     @if($contador_esc == 0)
                                         @if($escuelas[0]->id == $escuela->id)
                                              <div class="carousel-item active">
                                         @else
                                              <div class="carousel-item">
                                         @endif
                                      @endif
                                      <div class="col-md-4 col-sm-4">
                                          <div class="card">
                                              {{HTML::image('/packages/assets/media/images/schools/'.$escuela->logotipo, 'alt', array('class' => 'img-fluid img-esc'))}}
                                          </div>
                                      </div>
                                      <?php $contador_esc+=1; $control+=1;?>
                                      @if($contador_esc == 3 || $control == $long)
                                          </div>
                                          <?php $contador_esc=0;?>
                                      @endif

                                  @endforeach

						</div>
						<!--/.Slides-->

					</div>
					<!--/.Carousel Wrapper-->
					</div>	<!-- Fin escuelas -->
		 		</div>
	  		</div>
		</div>
	</section>
<!-- Fin Sección de Colaboradores -->

<!-- Separador 2 -->
<div class="col-md-12 view hm-blue-light" id="separador2">
	<div class="mask flex-center">
      	<center>
      		<h2 class="white-text h1-responsive">Juega y aprende en cualquier dispositivo <br>
      			<a type="button" class="btn btn-warning btn-rounded waves-effect" href="/suscripcion">Comenzar</a>
			</h2>
		</center>
  	</div>
</div>

<!-- Sección de Membresías -->
	<section id="membresia" class="">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow rotateInUpLeft">
			<h2 class="section-header h2-responsive">
				<img src="/packages/assets/media/images/landing/attachment.png" alt="membresia" style="width:35px; height:35px;" class="">
				Membresía
			</h2>
		</div>
		<div class="container">
			<div class="col-md-12" id="content-elemento">



					<!--Section: Pricing v.1-->
					<section class="section">

						<!--First row-->
						<div class="row">

							<!--First column-->
							<div class="col-md-4 offset-md-2 mb-r">

								<!--Pricing card-->
								<div class="card pricing-card">
									<!--Price-->
									<div class="price header blue">
										<h1>10</h1>
										<div class="version">
											<h5>Basic</h5>
										</div>
									</div>
									<!--/.Price-->

									<!--Features-->
									<div class="card-block striped text-xs-center">
										<ul>
											<li>
												<p><i class="fa fa-check"></i> 20 GB Of Storage</p>
											</li>
											<li>
												<p><i class="fa fa-check"></i> 2 Email Accounts</p>
											</li>
											<li>
												<p><i class="fa fa-times"></i> 24h Tech Support</p>
											</li>
											<li>
												<p><i class="fa fa-times"></i> 300 GB Bandwidth</p>
											</li>
											<li>
												<p><i class="fa fa-times"></i> User Management </p>
											</li>
										</ul>

										<button class="btn btn-primary">Buy now</button>
									</div>
									<!--/.Features-->

								</div>
								<!--/.Pricing card-->

							</div>
							<!--/First column-->

							<!--Second column-->
							<div class="col-md-4 mb-r">

								<!--Pricing card-->
								<div class="card pricing-card">
									<!--Price-->
									<div class="price header indigo">
										<h1>20</h1>
										<div class="version">
											<h5>Pro</h5>
										</div>
									</div>
									<!--/.Price-->

									<!--Features-->
									<div class="card-block striped text-xs-center">
										<ul>
											<li>
												<p><i class="fa fa-check"></i> 20 GB Of Storage</p>
											</li>
											<li>
												<p><i class="fa fa-check"></i> 4 Email Accounts</p>
											</li>
											<li>
												<p><i class="fa fa-check"></i> 24h Tech Support</p>
											</li>
											<li>
												<p><i class="fa fa-times"></i> 300 GB Bandwidth</p>
											</li>
											<li>
												<p><i class="fa fa-times"></i> User Management </p>
											</li>
										</ul>

										<button class="btn btn-primary">Buy now</button>
									</div>
									<!--/.Features-->

								</div>
								<!--/.Pricing card-->

							</div>
							<!--/Second column-->

						</div>
						<!--/First row-->

					</section>
					<!--/Section: Pricing v.1-->


			</div> <!-- Cierre de conyenedor -->
		</div>
	</section>
<!-- Fin Sección de Membresías -->

<!-- Sección con el Apoyo -->

	<section id="apoyo" class="margen-dispositivo">
		<div class="col-md-6 offset-md-3 divider-new z-depth-1 wow fadeInUpBig">
			<h2 class="section-header h2-responsive">
				<img src="/packages/assets/media/images/landing/compass.png" alt="Apoyo_icono" style="width:35px; height:35px;" class="">
				Con el Apoyo:
			</h2>
		</div>
		<div class="container">
			<div class="col-md-12" id="content-elemento">
				<div class="col-md-3 col-sm-6">
					<img src="/packages/assets/media/images/landing/SUM.png" alt="sum" class="img-fluid  hoverable z-depth-1 wow zoomInUp img-thumbnail"><br><br>
					<img src="/packages/assets/media/images/landing/incubadora_laguna.png" alt="incubadora laguna" class="img-fluid hoverable z-depth-1 wow zoomInUp img-thumbnail">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="/packages/assets/media/images/landing/logoFunBanorte.png" alt="fundacion banorte" class="img-fluid hoverable z-depth-1 wow zoomInUp img-thumbnail"><br><br>
					<img src="/packages/assets/media/images/landing/Work_St.jpg" alt="work st" class="img-fluid hoverable z-depth-1 wow zoomInUp img-thumbnail">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="/packages/assets/media/images/landing/penoles.png" alt="peñoles" class="img-fluid hoverable z-depth-1 wow zoomInUp img-thumbnail">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="/packages/assets/media/images/landing/logo-fs.jpg" alt="facebook start" class="img-fluid hoverable z-depth-1 wow zoomInUp img-thumbnail">
				</div>

			</div>
		</div>
	</section>

<!-- Fin Sección con el Apoyo -->

<!-- Sección de Noticias -->
	<section id="noticias">
		<div class="bg-noticias">
			<div class="flex-center container">
				<ul class="animated ">
					<li class="container-fluid">
						<h2 class="h1-responsive" style="color:white;">¿Quieres saber más sobre Curiosity?</h2>
					</li>
					<li class="container-fluid hidden-xs-down">
						<h4 class="h4-responsive" style="color:white;">Estemos en contacto y hagamos juntos de la educación una experiencia divertida.</h4>
					</li>
					<li class="container-fluid">
						<h4 class="h4-responsive" style="color:white;">Por favor, escribe tu email aquí:</h4>
					</li>
					<div class="col-md-8 offset-md-2">
						<form class="form-inline form-control" action="mail_noticia" method="post" id="mail_noticia" name="mail_noticia"
						 style="padding-top:20px; padding-left:20px; border:1px solid #fff;">
						<div class="md-form form-group">

							<input type="email" id="correo_noticia" class="form-control validate">
							<label for="correo_noticia" data-error="no válido" data-success="correcto">@ escribe tu email</label>
						</div>
						<div class="md-form form-group">
							<a href="" class="btn btn-primary btn-lg">Enviar</a>
						</div>
					</form>
					</div>
				</ul>
			</div>
		</div>
	</section>
<!-- Fin Sección de Noticias -->
@stop

@section('footer')
<!--Footer-->
<footer class="page-footer center-on-small-only" id="footer">

	<!--Footer Links-->
	<div class="container-fluid">
		<div class="row">

			<!--First column-->
			<div class="col-md-3 offset-md-1">
				<h4 class="h4-responsive font-italic font-curiosity">Porque una educación divertida es posible.</h4>

			</div>
			<!--/.First column-->

			<hr class="hidden-md-up">

			<!--Second column-->
			<div class="col-md-2 offset-md-1">
				<h5 class="title"><i class="fa fa-users"></i> nosotros</h5>
				<ul class="ul-content">
					<li><a href="/nuestro-equipo">- Nuestro equipo</a></li>
					<li class="separacion"><a href="/mentores">- Mentores</a></li>
				</ul>
			</div>
			<!--/.Second column-->

			<hr class="hidden-md-up">

			<!--Third column-->
			<div class="col-md-2">
				<h5 class="title"><i class="fa fa-info-circle"></i> apoyo</h5>
				<ul class="ul-content">
					<li><a href="#">- Preguntas frecuentes</a></li>
					<li class="separacion"><a href="/terminos-y-condiciones">- Términos y Condiciones</a></li>
					<li class="separacion"><a href="/aviso-privacidad">- Aviso de privacidad</a></li>
				</ul>
			</div>
			<!--/.Third column-->

			<hr class="hidden-md-up">

			<!--Fourth column-->
			<div class="col-md-2">
				<h5 class="title"><i class="fa fa-comments-o"></i> contacto</h5>
				<ul>
					<li>- (871)455-2887</li>
				</ul>
			</div>
			<!--/.Fourth column-->

		</div>
	</div>
	<!--/.Footer Links-->

	<hr>

	<!--Call to action-->
	<div class="call-to-action">
		<ul>
			<li>
				<h5>¡ Vamos, que esperas para formar parte de la familia Curiosity !</h5></li>
			<li><a class="btn btn-danger" href="/suscripcion">¡Únete!</a></li>
		</ul>
	</div>
	<!--/.Call to action-->

	<hr>

	<!--Social buttons-->
	<div class="social-section">
		<ul>
			<li><a href="https://www.facebook.com/curiosity.mx/" class="btn-floating btn-small btn-fb" target="_blank"><i class="fa fa-facebook" > </i></a></li>
			<!-- <li><a href="" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li> -->
			<li><a href="https://www.youtube.com/channel/UCucy9_laT18ac4DN8qosoEQ" class="btn-floating btn-small btn-gplus" target="_blank"><i class="fa fa-youtube"> </i></a></li>
		</ul>
		<!--- Boton Like fb desde la landing -->
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fcuriosity.mx%2F&width=214&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId=847478262051734" width="214" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	</div>
	<!--/.Social buttons-->

	<!--Copyright-->
	<div class="footer-copyright">
		<div class="container-fluid">
			© {{Date('Y')}} Todos los derechos reservados: Curiosity.com.mx
		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->
@stop
<?php get_header(); ?>
<!--Présentation Espace Soutine-->
		<div id="gpresentation" class="col-xs-12">
			<div class="row">
				<div class="description col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
			<?php
 $id = 40;
 $billet = get_post($id);
 $title = $billet->post_title;
 $contenu = $billet->post_content;
 $contenu = apply_filters('the_content', $contenu);
 $contenu = str_replace(']]>', ']]&gt;', $contenu);
?>

 <div id="billet">
 <?php echo "<h1>$title</h1><p>$contenu</p><strong>$date</strong>"; ?>
 </div>
				</div>	
			</div>
			<div class="row header11">
				<div class="col-xs-6 col-md-2 col-md-offset-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/business_b.png" alt="logo Repas d'affaire">
					<p>Repas d'affaires</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/coloc_b.png" alt="Colloque">
					<p>Colloques</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/people_b.png" alt="Seminaire">
					<p>Séminaires</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/cocktail_b.png" alt="Cocktail">
					<p>Cocktails</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-2 col-md-offset-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/music_b.png" alt="Concert">
					<p>Concerts</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/rings_b.png" alt="Mariage">
					<p>Mariages</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/reveillon_b.png" alt="Réveillon">
					<p>Réveillons</p>
				</div>
				<div class="col-xs-6 col-md-2 pic_line">
					<img src="./wp-content/themes/espace_soutine/img/ico/theatre_b.png" alt="Spectacle">
					<p>Spectacles</p>
				</div>
			</div>
		</div>
<!--Nos prestations-->
		<div class="col-md-12">
			<div class="row">
				<div id="gprestation" class="col-xs-12 col-md-12">
					<div class="row marge1">
						<div class="col-xs-12 col-md-6 img_prestation marge-presta1">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Grande salle configuration tribune</h3>
								<p class="textimg5"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 340 personnes</p>
								<img class="prestation imgrefund" src="./wp-content/themes/espace_soutine/img/02.jpg" alt="Grande_salle">
								<div class="overflow_text">
									<h3 class="textimg4">Grande salle configuration tribune</h3>
									<p class="nbr"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 340 personnes</p>
									<p class="bli">Disponible avec ou sans les tribunes.</p>
								
										<?php
											if(have_posts()) : 
												while(have_posts()) : the_post(); 
										?>
												<div class="news" id="post-<?php the_ID(40); ?>">
													<h2><?php the_title(); ?></h2>
													<p><?php the_content(); ?></p>
												</div>
										<?php
												endwhile;
											endif;
										?>
									
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 img_prestation marge-presta2">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Grande salle configuration repas</h3>
								<p class="textimg5"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 220 personnes</p>
								<img class="prestation imgrefund" src="./wp-content/themes/espace_soutine/img/01.jpg" alt="Grande_salle">
								<div class="overflow_text">
									<h3 class="textimg4">Grande salle configuration repas</h3>
									<p class="nbr"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 220 personnes</p>
									<p class="bli">do eget nisi. Ut auctor sodales laoreet.</p>
									<ul>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row marge2">
						<div class="col-xs-12 col-md-6 img_prestation marge-presta3">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Salle de réunions</h3>
								<p class="textimg5"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 50 personnes</p>
								<img class="prestation imgrefund" src="./wp-content/themes/espace_soutine/img/06.jpg" alt="Salle_de_reunion">
								<div class="overflow_text">
									<h3 class="textimg4">Salle de réunions</h3>
									<p class="nbr"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 50 personnes</p>
									<p class="bli">do eget nisi. Ut auctor sodales laoreet.</p>
									<ul>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 img_prestation marge-presta4">
							<div class="overflow">
								<div class="bandeau"></div>
								<h3 class="textimg">Hall d'accueil</h3>
								<p class="textimg5"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 100 personnes</p>
								<img class="prestation imgrefund" src="./wp-content/themes/espace_soutine/img/03.jpg" alt="Hall_d_accueil">
								<div class="overflow_text">
									<h3 class="textimg4">Hall d'accueil</h3>
									<p class="nbr"><img src="./wp-content/themes/espace_soutine/img/ico/cap.png" alt="capacité"> 100 personnes</p>	
									<p class="bli">do eget nisi. Ut auctor sodales laoreet.</p>
									<ul>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
										<li>Lorem ipsum</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-12 blanc invite_telecharger">
			<div class="col-md-offset-4 col-md-6">
				<a href="#" download="#">
					<p class="float-left">Téléchargez nos prestations et tarifs</p>
				</a>
				<a class="btn-header btn-default padding-left-20px" href="#" download="#">
	        		<span class="dl glyphicon glyphicon-download-alt telecharger "><span>
	        	</a>
	        </div>
		</div>
<!--Galerie-->
		<div id="galerie" class="galerie col-md-12">
			<h2>Galerie</h2>
			<div class="row">
				<div id="carousel-example-generic" class="col-md-12 carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="./wp-content/themes/espace_soutine/img/01.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="./wp-content/themes/espace_soutine/img/02.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="./wp-content/themes/espace_soutine/img/03.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="./wp-content/themes/espace_soutine/img/04.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="./wp-content/themes/espace_soutine/img/05.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
						<div class="item">
							<img src="./wp-content/themes/espace_soutine/img/06.jpg" alt="">
							<div class="carousel-caption"></div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div id="gnous_contacter"></div>
		</div>
<!--Nous contacter-->
		<div class="col-md-12 blue-area">
			<div class="gnous_contacter col-xs-12 col-md-12">
				<div class="row">
				<h2>Nous contacter</h2>
					<div class="col-xs-12 col-md-6 info">
						<div class="row">
							<div class="col-xs-12 col-md-11 col-md-offset-1">
								<div class="adresse">
									<div class="row">
										<div class="col-xs-6 col-md-5 white">
											<p><span class="glyphicon glyphicon-map-marker"></span><span> </span>41 rue de la Chacatière</p>
											<p>28300 Lèves</p>
											<p><span class="glyphicon glyphicon-earphone"> </span> 02.37.180.180</p>
											<p><img class="car" src="./wp-content/themes/espace_soutine/img/ico/car.png" alt="capacité">Parking gratuit</p>
										</div>
										<div class="col-xs-6 col-md-5 white">
											<p><img class="bus" src="./wp-content/themes/espace_soutine/img/ico/transport.png" alt="capacité"><span>Bus ligne 8</span></p>
											<div class="row">
												<div class="col-xs-6">
													<p class="horaires"><span class="glyphicon glyphicon-time"></span><span> Horaires :</span></p>
												</div>
												<div class="col-xs-6">
													<a href="http://www.filibus.fr/presentation/?rub_code=89" title="filibus"><img class="filibus" src="./wp-content/themes/espace_soutine/img/ico/filibus.png" title="filibus"></a>
												</div>
											</div>
											<div class="col-xs-12 no-padding-left">
												<p>Gare de Chartres à 5mn</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-md-11 col-md-offset-1">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10581.353360933439!2d1.4737741!3d48.4692235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab3428056b369dae!2sEspace+Soutine!5e0!3m2!1sfr!2sfr!4v1459979008375" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 formulaire">
	                    <div class="row">
	                            <div id ="contact" class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1 center form_padding">
	                            <form method="post">
	                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center form_padding">
	                                    <div class="col-xs-6 col-md-6 col-lg-6 form_padding_l">
	                                         <div class="form-group white">
	                                              <label class="control-label requiredField" for="name">NOM</label>
	                                              <input class="form-control" id="name" name="name" type="text"/>
	                                          </div>
	                                      </div>
	                                      <div class="col-xs-6 col-md-6 col-lg-6 form_padding_r">
	                                         <div class="form-group white">
	                                              <label class="control-label requiredField" for="name">Prénom</label>
	                                              <input class="form-control" id="name" name="name" type="text"/>
	                                          </div>
	                                      </div>
	                                  </div>
	                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center form_padding">
	                                      <div class="col-lg-6 form_padding-l2">
	                                         <div class="form-group white">
	                                              <label class="control-label requiredField" for="email">Email</label>
	                                              <input class="form-control" id="email" name="email" type="text"/>
	                                         </div>
	                                     </div>
	                                    <div class="col-lg-6 form_padding-r2">
	                                         <div class="form-group white">
	                                              <label class="control-label requiredField" for="email">Téléphone</label>
	                                              <input class="form-control" id="name" name="name" type="text"/>
	                                         </div>
	                                     </div>
	                                 </div>
	                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center form_padding">
	                                      <div class="col-lg-6 form_padding-l2">
	                                         <div class="form-group white">
	                                              <label class="control-label requiredField" for="name">Code postal</label>
	                                              <input class="form-control" id="name" name="name" type="text"/>
	                                         </div>
	                                     </div>
	                                     <div class="col-lg-6 form_padding-r2">
	                                         <div class="form-group white">
	                                             <label class="control-label " for="select">Vous êtes</label>
	                                             <select class="select form-control" id="select" name="select">
	                                                 <option value="First Choice">Entreprise</option>
	                                                 <option value="Second Choice">Institutionnel</option>
	                                                 <option value="Third Choice">Association</option>
	                                                 <option value="Fourth Choice">Particulier</option>
	                                                 <option value="fifth Choice">Autre</option>
	                                             </select>
	                                         </div>
	                                     </div>
	                                 </div>
	                                 <div class="form-group white">
	                                      <label class="control-label requiredField" for="subject">Objet</label>
	                                      <input class="form-control" id="subject" name="subject" type="text"/>
	                                 </div>
	                                 <div class="form-group white">
	                                     <label class="control-label" for="message">Message</label>
	                                      <textarea class="form-control" cols="40" id="message" name="message" rows="4"></textarea>
	                                  </div>
	                                  <div class="form-group">
	                                      <div>
	                                          <button class="btn btn-default " name="submit" type="submit">Envoyez</button>
	                                      </div>
	                                  </div>
	                              </form>
	                          </div>
	                    </div>
	                </div>
				</div>
			</div>
		</div>
<!--Evenements-->
		<div id="gevenement" class="col-xs-12 col-md-12 event-area">
			<h2>Événements à venir</h2>
			<div class="col-xs-12 col-md-4 col-lg-4 containimg">
				<div class="card">
					<img class="eventimg" src="./wp-content/themes/espace_soutine/img/events/mon-faux-sapin.jpg" alt="mon-faux-sapin">
					<div class="padding">
						<p class="padding-top"><b>Théâtre</b></p>
						<p>Mon faux sapin, par La Compagnie des 12 Portes</p>
						<div class="datee">
							<p><span class="glyphicon glyphicon-calendar"></span>Samedi 23 avril 20h30</p>
						</div>
						<a class="boutonbas" href="http://www.leves.fr/slider-homepage" title="En savoir plus">
							En savoir plus
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-4 containimg">
				<div class="card">
					<img class="eventimg" src="./wp-content/themes/espace_soutine/img/events/Gerard-de-Botton.jpg" alt="Gerard-de-Botton">
					<div class="padding">
						<p class="padding-top"><b>Concert</b></p>
						<p>Gérard de Botton avec l'école de musique de Lèves</p>
						<p class="datee"><span class="glyphicon glyphicon-calendar"></span>Samedi 30 avril 20h30</p>
						<a class="boutonbas" href="http://www.leves.fr/slider-homepage" title="En savoir plus">
							En savoir plus
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-lg-4 containimg">
				<div class="card">
					<img class="eventimg" src="./wp-content/themes/espace_soutine/img/events/becket.jpg" alt="becket">
					<div class="padding">
						<p class="padding-top"><b>Théâtre</b></p>
						<p>Becket ou l'honneur de Dieu</p>
						<p class="datee"><span class="glyphicon glyphicon-calendar"></span>Vendredi 17 juin 20h30 </p>
						<a class="boutonbas" href="http://www.leves.fr/slider-homepage" title="En savoir plus">
							En savoir plus
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer(); ?>
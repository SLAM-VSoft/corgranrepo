<?php
    require_once 'header.php';
?>
	<!-- /HEADER -->
<div class="w-screen d-block hidden-sm-down mb-3">
    
</div>
	<div class="container-fluid">
		<!-- CONTENIDO PRINCIPAL -->
		<div class="row mb-3">
			<div class="col-md-9">
			    <h5>Mi cuenta</h5>
			    <hr>
			    <h6 class="mb-3">Pedro Pérez</h6>
			    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cuotascol" role="tab" aria-controls="cuotascol" aria-selected="true">Cuotas Colegiado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#colegiacion" role="tab" aria-controls="colegiacion" aria-selected="false">Colegiación</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="cuotascol" role="tabpanel" aria-labelledby="cuotascol-tab">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cta N°</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Fecha Pago</th>
                                    <th scope="col">Interés</th>
                                    <th scope="col">Pago Adel.</th>
                                    <th scope="col">ID Cuota</th>
                                    <th scope="col">ID Colegiado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>Pagada</td>
                                    <td>03/01/2018</td>
                                    <td>$ 200,-</td>
                                    <td>07/01/2018</td>
                                    <td>$ 00,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                                <tr>
                                    <th scope="row">02</th>
                                    <td>Pagada</td>
                                    <td>02/02/2018</td>
                                    <td>$ 200,-</td>
                                    <td>05/02/2018</td>
                                    <td>$ 00,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                                <tr>
                                    <th scope="row">03</th>
                                    <td>Pagada</td>
                                    <td>04/03/2018</td>
                                    <td>$ 200,-</td>
                                    <td>08/03/2018</td>
                                    <td>$ 00,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                                <tr>
                                    <th scope="row">04</th>
                                    <td>Pagada</td>
                                    <td>02/04/2018</td>
                                    <td>$ 200,-</td>
                                    <td>06/04/2018</td>
                                    <td>$ 00,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                                <tr>
                                    <th scope="row">05</th>
                                    <td>Vencida</td>
                                    <td>03/05/2018</td>
                                    <td>$ 200,-</td>
                                    <td>--/--/--</td>
                                    <td>$ 132,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                                <tr>
                                    <th scope="row">06</th>
                                    <td>Pendiente</td>
                                    <td>05/06/2018</td>
                                    <td>$ 200,-</td>
                                    <td>--/--/--</td>
                                    <td>$ 00,-</td>
                                    <td>NO</td>
                                    <td>1234567</td>
                                    <td>1234567</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="colegiacion" role="tabpanel" aria-labelledby="colegiacion-tab">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Cta N°</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Fecha Pago</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>Pagada</td>
                                    <td>03/01/2018</td>
                                    <td>$ 3000,-</td>
                                    <td>07/01/2018</td>
                                </tr>
                                <tr>
                                    <th scope="row">02</th>
                                    <td>Pagada</td>
                                    <td>02/02/2018</td>
                                    <td>$ 2000,-</td>
                                    <td>05/02/2018</td>
                                </tr>
                                <tr>
                                    <th scope="row">03</th>
                                    <td>Pagada</td>
                                    <td>04/03/2018</td>
                                    <td>$ 1900,-</td>
                                    <td>08/03/2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
			<!-- SIDEBAR -->
			<div class="col-md-3">
			    <h5>Publicidades</h5>
			    <hr>
			    <img class="img-fluid mb-3" src="img/2017-02-23-PHOTO-00000082.jpg">
			    <img class="img-fluid mb-3" src="img/publi_aca.jpg">
			    <img class="img-fluid mb-3" src="img/pastedImage.png">
				<h5>Links de interés</h5>
			    <hr>
			    <div class="accordion" id="accordionExample">
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            AANEP
                            </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Asociación Argentina de Nutrición Enteral y Parenteral</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            SAOTA
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Sociedad Argenina de Obesidad y Trastornos Alimenarios</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            MINISTERIO DE SALUD
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Ministerio de Salud de Río Ngro</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            FAO
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Organización de las Nacions Unidas para la Alimentación y la Agricultura</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            OMS
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Organiación Mundial de la Salud</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            MINISTERIO DE AGROINDUSTRIA
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Ministerio de Agroindustria de la Nación Argentina</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            MINITERIO DE SALUD
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Miniterio de Salud de la Nación</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            SUPERINTENDENCIA DE SALUD
                            </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Superintenencia de Servicios de Salud</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            F.A.D.
                            </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Federación Argentina de Diabetes</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingTen">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                            A.N.M.A.T.
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Administración Nacional de Medicamenos, Alimentos y Tecnología Médica</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingEleven">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                            OPS OMS
                            </button>
                            </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Organización Panamericana de Salud - Organización Mundial de la Salud América</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingTwelve">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                            MEDLINE
                            </button>
                            </h5>
                        </div>
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>MEDLINE - PubMed Resources Guide</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingThirteen">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                            SCIELO
                            </button>
                            </h5>
                        </div>
                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Scientific Electronic Library Online</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingFourteen">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                            FIC ARGENTINA
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Fundación Interamericana del Corazón Argentina</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingFifteen">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                            FAGRAN
                            </button>
                            </h5>
                        </div>
                        <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>Federación Argentina de Graduados en Nutrición</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0 card-background">
                        <div class="card-header" id="headingSixteen">
                            <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                            CONGRESO DE NUTRICION
                            </button>
                            </h5>
                        </div>
                        <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>XIII Congreso Argenino de Graduados en Nutrición</p>
                            <a href="#" class="btn btn-primary rounded-0 mb-3">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<!-- /SIDEBAR -->
		</div>
		<!-- /CONTENIDO PRINCIPAL -->
		<!-- FOOTER -->
		<div class="row footer">
		    <!-- DESTACADOS -->
    		<div class="row mb-3 mx-1">
    			<div class="col-sm-4 mb-3">
    				<!-- DESTACADO1 -->
    				<div class="card text-center border-0 mb-3">
    					<div class="card-body blanco red">
        					<h5 class="card-title">Colegiate!</h5>
        					<p class="card-text">Instrucciones y archivos necesarios para realizar el trámite</p>
        					<a href="#" class="btn btn-light rounded-0">Mas información</a>
      					</div>
    				</div>
    				<!-- /DESTACADO1 -->
    			</div>
    			<div class="col-sm-4 mb-3">
    				<!-- DESTACADO2 -->
    				<div class="card text-center border-0 mb-3">
    					<div class="card-body blanco red">
        					<h5 class="card-title">Profesionales habilitados</h5>
        					<p class="card-text">Conozca los profesionales habilitados por el Colegio Rionegrino de graduados en nutrición en la provincia de Rio Negro</p>
        					<a href="#" class="btn btn-light rounded-0">Ingresar</a>
      					</div>
    				</div>
    				<!-- /DESTACADO2 -->
    			</div>
    			<div class="col-sm-4 mb-3">
    				<!-- DESTACADO3 -->
    				<div class="card text-center border-0 mb-3">
    					<div class="card-body blanco red">
        					<h5 class="card-title">Consulte su cuenta</h5>
        					<p class="card-text">Desde nuestro portal de servicios podra informarse sobre el estado de su cuenta</p>
        					<a href="#" class="btn btn-light rounded-0">Ingresar</a>
      					</div>
    				</div>
    				<!-- /DESTACADO3 -->
    			</div>
    		    <!-- /DESTACADOS -->
        		<div class="col-sm-4 mb-3">
        		    <h5>Colegio Rionegrino de Graduados en Nutrición</h5>
    			    <hr class="blanca">
    			    <p>Ley. Nro. 4793</p>
    			    <p>Sarmiento Nº505</p>
    			    <p>Viedma. R.N.</p>
    			    <a href="mailto:info@corgran.org">info@corgran.org</a>
        		</div>
        		<div class="col-sm-4 mb-3">
        		    <h5>Últimas noticias</h5>
    			    <hr class="blanca">
    			    <a class="footer-noticias" href="#">Diplomatura en Estudios Avanzados en Diabetes Mellitus</a>
    			    <p class="rojo">marzo 13, 2018</p>
    			    <a class="footer-noticias" href="#">XIII Congreso Argentino de Graduados en Nutrición SORTEO BECAS</a>
    			    <p class="rojo">febrero 24, 2018</p>
    			    <a class="footer-noticias" href="#">Inscripción para el curso de Formación de Cuidadores Domiciliarios</a>
    			    <p class="rojo">febrero 24, 2018</p>
    			    <a class="footer-noticias" href="#">Diplomatura en Diabetes y Nutrición</a>
    			    <p class="rojo">febrero 24, 2018</p>
        		</div>
        	    <div class="col-sm-12">
        	        <hr class="blanca">
        	        <div class="card border-0 footer">
            	        <p>Copyright acá</p>
                    </div>
        	    </div>
        	</div>
    	</div>
		<!-- /FOOTER -->
    </div>
</body>
</html>
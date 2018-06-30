<?php
    require_once 'header.php';
?>
<!-- /HEADER -->
    <div class="w-screen d-block hidden-sm-down mb-3">
        
    </div>
	<div class="container-fluid">
		<!-- CONTENIDO PRINCIPAL -->
		<div class="row mb-3">
			<div class="col-lg-9">
			    <h5>Administración de Datos personales</h5>
			    <hr>
			    <div id="misdatos" class="col-md-12 pt-3">
    			    <form>
                        <div class="row">
                            <div class="form-group col-sm-9">
                                <label for="rolSelect">Rol</label>
                                <select class="form-control" id="rolSelect">
                                    <option>Consejo Directivo Provincial</option>
                                    <option>Comisión Revisora de Cuenta</option>
                                    <option>Tribunal de Ética y Disciplina</option>
                                    <option>Colegiados</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="numeroColegiado">Número de Colegiado</label>
                                <input type="text" class="form-control" id="numeroColegiado" placeholder="010100301155362">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="delegacionSelect">Delegación</label>
                                <select class="form-control" id="delegacionSelect">
                                    <option>Atlántica</option>
                                    <option>Valle Medio</option>
                                    <option>Andina</option>
                                    <option>Alto Valle Oeste</option>
                                    <option>Alto Valle Este y Línea Sur</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="localidadSelect">Localidad</label>
                                <select class="form-control" id="localidadSelect">
                                    <option>Viedma</option>
                                    <option>General Conesa</option>
                                    <option>Guardia Mitre</option>
                                    <option>San Antonio Oeste</option>
                                    <option>Sierra Grande</option>
                                    <option>Valcheta</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="mesSelect">Mes</label>
                                <select class="form-control" id="mesSelect">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="añoSelect">Año</label>
                                <select class="form-control" id="añoSelect">
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                    <option>2025</option>
                                    <option>2026</option>
                                    <option>2027</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Suarez">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="nombres">Nombres</label>
                                <input type="text" class="form-control" id="nombres" placeholder="Adriana Edith">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="dni">DNI</label>
                                <input type="text" class="form-control" id="dni" placeholder="21619785">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="cuit">CUIT / CUIL</label>
                                <input type="text" class="form-control" id="cuit" placeholder="27-21619785-8">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="mp">MP</label>
                                <input type="text" class="form-control" id="mp" placeholder="5362">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="fechNac">Fecha de Nacimiento</label>
                                <input type="text" class="form-control" id="fechNac" placeholder="05/09/1970">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="numRes">N° Resolución</label>
                                <input type="text" class="form-control" id="numRes" placeholder="1">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="fechRes">Fecha Resolución</label>
                                <input type="text" class="form-control" id="fechRes" placeholder="17/09/2015">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="resolBaja">Resolución Baja</label>
                                <input type="text" class="form-control" id="resolBaja" placeholder="0">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="FechResolBaja">Fecha Resolución Baja</label>
                                <input type="text" class="form-control" id="FechResolBaja" placeholder="--">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="fechMat">Fecha Matrícula</label>
                                <input type="text" class="form-control" id="fechMat" placeholder="02/08/2012">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="vencMat">Vencimiento Matrícula</label>
                                <input type="text" class="form-control" id="vencMat" placeholder="02/08/2017">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" placeholder="Lic. en Nutrición">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="expedido">Expedido por</label>
                                <input type="text" class="form-control" id="expedido" placeholder="Univ. Nacional de Cordoba">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="egreso">Fecha de Egreso</label>
                                <input type="text" class="form-control" id="egreso" placeholder="03/03/2006">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="domicilio">Domicilio personal</label>
                                <input type="text" class="form-control" id="domicilio" placeholder="Choele Choel 1312">
                            </div>
                             <div class="form-group col-sm-6">
                                <label for="telefono">Teléfonos</label>
                                <input type="text" class="form-control" id="telefono" placeholder="(2920) 15596099">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">E-Mail</label>
                                <input type="text" class="form-control" id="email" placeholder="lic.adrianasuarez@gmail.com">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="emailAlt">E-Mail Alternativo</label>
                                <input type="text" class="form-control" id="emailAlt" placeholder="">
                            </div>
                            <div class="form-group col-sm-12">
                                <a class="btn btn-secondary rounded-0" href="index.php">Cancelar</a>
                                <button type="submit" class="btn btn-primary rounded-0">Aceptar</button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
			<!-- SIDEBAR -->
			<div class="col-lg-3">
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
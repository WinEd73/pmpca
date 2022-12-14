
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. PATRICIA JULIO MIRANDA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/PatriciaJulioMiranda.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000 Ext. 9218<br>
            patricia.julio@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <!--<a target="_blank" href="#">Webpage</a>-->
            <a target="_blank" href="{{asset('storage/CV/Julio_Miranda_Patricia.pdf')}}">Curriculum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/oEQAAA==">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8379-4528"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=15729187700"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
        </div>
        </div>
    </div>
    </div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              <strong>Actividad académica</strong>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ol>
                <li><strong>Cursos</strong></li>
                    <p>TSCA: Amenazas Naturales, Desastres, Evaluación y Gestión de Riesgo<br>
                    TSCA: Medioambiente y reducción del riesgo de desastres (ECO-DRR)</p>

                <li><strong>LGAC</strong></li>
                <p>Estudios multidisciplinarios de los desastres
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Peñaloza Guerrero Cynthia Marisol. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_penalozaguerrero.pdf">Flood resilience assessment, a case study at Ciudad Valles, San Luis Potosí, Mexico.</a><br>
                  Arce Mojica Teresa de Jesús. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_arcemojica.pdf">Developing a methodological approach for a national risk index for Mexico.</a><br>
                  Butz Katharina. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_butzkatharina.pdf">Drought vulnerability assessment in northern-central Chile.</a><br>
                  Taller Daniela. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_tallerdaniela.pdf">Visiones para la rehabilitación y gestión de paisajes degradados en la mata atlántica de Río de Janeiro, Brasil.</a><br>
                  Meza Rodríguez María Isabel. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4516/MCA1MRM201701.pdf?sequence=1&amp;isAllowed=y">Drought risk index in Rio de Janeiro state.</a><br>
                  Nuñez Ramírez Santiago. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4520/MCA1NRS201701.pdf?sequence=1&amp;isAllowed=y">Lessons learned from the 2011 landslide event in Nova Friburgo, Brazil? - A resilience study on the community and municipality levels.</a>
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Stevens Vázquez Guillermo Sigfrido. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2012_pmpca_stevensvazquez.pdf">Análisis espacial de la vulnerabilidad hídrica en la zona metropolitana de la ciudad de San Luis Potosí-Soledad de Graciano Sánchez, México.</a><br>
                  Ortiz Liñán Mónica Elena. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2012_pmpca_ortizlinan.pdf">Propuesta de un sistema de información geográfica, como instrumento de gestión del agua en la ciudad de San Luis Potosí, México.</a><br>
                  Herrera Pérez Iván Leonardo. 2012. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/3640/MCA1SUB01201.pdf?sequence=1&amp;isAllowed=y">Análisis de la susceptibilidad a la subsidencia en el estado de San Luis Potosí (México) como herramienta para la gestión ambiental.</a><br>
                  León Rojas Gloria Isabel. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2014_pmpca_leonrojas.pdf">Evaluación de la susceptibilidad a incendios forestales en San Luis Potosí, México, una contribución a la gestión del riesgo.</a> (Co-dirección)<br>
                  Navarro Flores Diana Elizabeth. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2014_pmpca_navarroflores.pdf">Propuesta de un programa de comunicación de riesgos por subsidencia del terreno en la zona metropolitana de San Luis Potosí-Soledad de Graciano Sánchez, México.</a>
                </p>
                <!--<br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>

                </p>
              </ol>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <strong>Publicaciones</strong>
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Artículos científicos</strong><br><br>
              <p>

              </p>
              <strong>Libros</strong><br><br>
              <p>

              </p>
              <strong>Capítulos en libros</strong><br><br>
              <p>

              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <strong>Vinculación</strong>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin
              adds the appropriate classes that we use to style each element. These classes control the overall
              appearance,
              as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or
              overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>-->
      </div>
    </div>
    </div>
    <br><br><br>
</div>

@endsection
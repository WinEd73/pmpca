
@extends('base')

@section('maincontent')

<div id="p-container" class="container px-lg-8.5 px-md-5">
    <div id="professor-description" class="row mb-4">
    <div class="col-12 col-sm-12">
      <br>
        <h1><strong>DRA. MARÍA GUADALUPE GALINDO MENDOZA</strong></h1><br>
    </div>
    <div class="col-12 col-sm-3 ">
        <img class="mx-auto d-block" src="{{asset('storage/images/Antonio_Cardona_Benavides.png')}}" alt="">
    </div>
    <div class="col-12 col-sm-9">
        <div>
        <h4><strong>Profesor Investigador de Tiempo Completo Nivel VI.</strong></h4>
        <h5><strong>Facultad de Ciencias Sociales y Humanidades</strong></h5>
        <h5><strong>SNI nivel I.</strong></h5>
        <br>
        <p>
            Av. Industrias #101-A Fracc. Talleres <br>
            C.P. 78399, San Luis Potosí, S. L. P., México <br> <br>
            Teléfono: +52 (444) 832-1000<br>
            ggm@uaslp.mx <br>
        </p>

        <div class="enlacesprof">
            <a target="_blank" href="http://langif.uaslp.mx/">Webpage 1</a>
            <a target="_blank" href="http://lages.uaslp.mx/">Webpage 2</a>
            <a target="_blank" href="storage/CV/Galindo_Mendoza_MariaGuadalupe.pdf">Curriculum Vitae </a>
            <a target="_blank" href="https://investigadores.uaslp.mx/InvestigadorProfile/3zoAAA%3d%3d">Directorio de Investigadores</a>
            <a target="_blank" href="https://orcid.org/0000-0001-8775-5120"><img src="{{asset('storage/images/orcid.png')}}" alt=""></a>
            <a target="_blank" href="https://www.scopus.com/authid/detail.uri?authorId=24481192500"> <img src="{{asset('storage/images/scopus.png')}}" alt=""></a>
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
                    <p>Naturaleza y Sociedad una Introducción a las Posiciones Teóricas Recientes<br>
                    TSCA: Evaluación Ambiental y Análisis Espacial Apoyados en PR y SIG</p>

                <li><strong>LGAC</strong></li>
                <p>Estudios multidisciplinarios de los desastres<br>
                   Metodologías para la gestión ambiental
                </p>
                <li><strong>Dirección de Tesis</strong></li><br>
                <p><em>Maestría en Ciencias Ambientales (Doble titulación), Co-Dirección</em></p>
                <p>
                  Cote Navarro Fabian Dario. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202009-08/2011_pmpca_cotenavarro.pdf">Analysis of a hydrological modelling tool for water resources management in the Valles River Basin, Mexico.</a><br>
                  Volmer Ann Kathrin. 2014. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202012-08/2014_pmpca_volmerann.pdf">Evaluation of agricultural policies for small and middle scale farmers in México: the case of Villa de Arriaga.</a><br>
                  Cobs Muñoz Víctor Oscar Leandro. 2017. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4126/MCA1CMV201701.pdf?sequence=3&amp;isAllowed=y">Análisis espacial de cambio de uso de suelo en reserva de la Biosfera La Campana-Lago Peñuelas, Chile.</a><br>
                  Gámez Hidalgo Saúl Alfredo. 2020. Mapping chagas disease transmission risk using vector and reservoir distribution models in San Luis Potosí, México.
                </p>
                <br>
                <p><em>Maestría en Ciencias Ambientales</em></p>
                <p>
                  Aceves de Alba Jorge. 2009. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202005-08/2009_pmpca_acevesdealba.pdf">Evaluación del riesgo por la presencia de la langosta centroamericana (Schistocerca piceifrons piceifrons W.) en la Huasteca Potosina apoyado en SIG y evaluación multicriterio.</a><br>
                  Vargas Mergold Angélica Violeta. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2010_pmpca_vargasmergold.pdf">La reserva de la biosfera Sierra del Abra Tanchipa: las áreas naturales protegidas de lo internacional a lo local.</a><br>
                  Olvera Vargas Luis Alberto. 2010. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202007-08/2010_pmpca_olveravargas.pdf">Análisis espacial y temporal de la propagación de la broca de café hypothenemus hampei (Ferrari) en la Huasteca Potosina.</a><br>
                  Arreola Martínez Beatriz Estrella. 2012. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202010-08/2012_pmpca_arreolamartinez.pdf">Determinación de paratión metílico por espectrofotometría en suelo de zonas gregarígenas de <em>Schistocerca piceifrons piceifrons</em> y su probable efecto en la apicultura.</a><br>
                  Chávez Porras Paulina. 2013. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202011-08/2013_pmpca_chavezporras.pdf">Respuestas locales ante desafíos globales. Implicaciones del modelo de desarrollo en las relaciones socio ambientales de una comunidad indígena de la Huasteca Potosina.</a><br>
                  Galicia Castillo Juan Javier. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Mae/Gen%202013-08/2015_pmpca_galiciacastillo.pdf">Distribución geográfica del riesgo de rabia humana transmitida por el murciélago vampiro (Desmodus rotundus) en el estado de San Luis Potosí.</a>
                </p>
                <br>
                <p><em>Doctorado en Ciencias Ambientales</em></p>
                <p>
                  Aguilar Rivera Noé. 2011. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2007-08/2011_pmpca_aguilarrivera.pdf">Competitividad de la agroindustria azucarera de la Huasteca México.</a><br>
                  Ramírez Guevara Sonia Judith. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2011-02/2015_pmpca_ramirezguevara.pdf"> El manejo de los residuos sólidos urbanos un asunto de justicia ambiental en México. Estudio de caso zona metropolitana de San Luis Potosí.</a><br>
                  Robayo Avendaño Angélica. 2015. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2011-08/2015_pmpca_robayoavendano.pdf">Bioseguridad en el campo agrícola mexicano. Análisis de estudios de caso.</a><br>
                  Olvera Vargas Luis Alberto. 2016. <a href="http://ambiental.uaslp.mx/pmpca/tesis/Doc/Gen2012-08/2016_pmpca_olveravargas.pdf">Variabilidad espacial de las enfermedades de la caña de azúcar en la región Huasteca: implicaciones para su monitoreo por percepción remota.</a>  (Co-Dirección).<br>
                  Arreola Martínez Beatriz Estrella. 2018. <a href="https://ninive.uaslp.mx/xmlui/bitstream/handle/i/4548/DCA1AMB201801.pdf?sequence=1&amp;isAllowed=y">Especies exóticas invasoras en México. Aplicación de SIG en la prevención de las especies invasoras.</a>
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
                Robayo Avendaño, A., <b>Galindo Mendoza, M.G.</b> (2019). <a href="http://langif.uaslp.mx/documentos/publicaciones/archivos/pdf/universitarios_potosinos_220.pdf">Organismos genéticamente modificados: ¿qué sabemos?</a>. Universitarios Potosinos, Año 14, Número 220, Febrero 2018. Pág: 12-15.<br><br>
                Robayo Avendaño, A., <b>Galindo Mendoza, M.G.</b>, Yañez Estrada, L., Aldama Aguilera, C. (2018). <a href="http://www.scielo.org.mx/scielo.php?script=sci_arttext&pid=S1405-31952018000500767 ">Medición de la percepción pública de los OGM con una escala tipo Likert</a>. Revista Agrociencia. Volumen 52, Número 5, Págs. 767-781. Editor: Colegio De Posgraduados. Versión on-line ISSN: 2521-9766, Versión impresa ISSN: 1405-3195.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b>, Ramírez Guzmán, M.E. y Medina Garza, H. (2016). <a href="https://www.researchgate.net/publication/324993911_PROBABILIDAD_DE_INTERCEPCIONES_DE_PLAGAS_CUARENTENARIAS_EN_OFICINAS_DE_INSPECCION_DE_SANIDAD_AGROPECUARIA_Probability_of_intersection_of_quarantine_pests_in_offices_of_agricultural_health_inspection">Probabilidad de intercepciones de plagas cuarentenarias en oficinas de inspección de sanidad agropecuaria</a>. Revista Entomología Mexicana,  ISSN: 2448-475x Volumen 3, Páginas 287-293.<br><br>
                Olvera Vargas, L., <b>Galindo Mendoza, M. G.</b>, Aguilar Rivera, N., Yañez Espinosa, L. (2016). <a href="https://www.researchgate.net/publication/321641958_Characterization_of_Diatraea_saccharalis_in_Sugarcane_Saccharum_officinarum_with_Field_Spectroradiometry ">Characterization of Diatraea saccharalis in Sugarcane (Saccharum officinarum) With Field Spectroradiometry</a>. International Journal Of Environmental and Agriculture Research. ISSN: 2454-1850. Vol-2, Issue-7, July- 2016.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b>, Ramírez Guzmán, M.E., Medina Garza, H. (2015). <a href="https://scholar.google.com/citations?view_op=view_citation&hl=es&user=5pPyzKsAAAAJ&pagesize=80&citation_for_view=5pPyzKsAAAAJ:jL-93Qbq4QoC">Riesgo de detección de una plaga cuarentenaria a través de importaciones utilizando los modelos lineales generalizados mixtos</a>. Memorias SELPER XXI México-UACJ 2015.<br><br>
                Guevara Ramírez, S. J., <b>Galindo Mendoza, M.G.</b>, y Contreras Servín, C. (2015). <a href="https://www.researchgate.net/publication/290996026_Justicia_ambiental_Entre_la_utopia_y_la_realidad_social">Justicia ambiental. Entre la utopía y la realidad social</a>. Culturales 3.1: 225-250. ISSN: 1870-1191. Págs. 225-250.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b>, Medina Garza, H., Oliva Hurtado, M. (2015). <a href="https://www.researchgate.net/publication/325023541_LA_VIGILANCIA_FITOSANIATARIA_EXTERNA_EN_MEXICO_EL_CASO_DE_Grapholita_molesta_BUSCK_1916">La vigilancia fitosanitaria externa en México: El caso de Grapholita molesta (Busck, 1916)</a> Entomología Mexicana Vol. 13, Tomo 2.<br><br>
                Olvera Vargas, L.A., <b>Galindo Mendoza, M.G.</b>, Aguilar Rivera, N., Yañez Espinosa, L. (2015). <a href="https://www.researchgate.net/publication/321641958_Characterization_of_Diatraea_saccharalis_in_Sugarcane_Saccharum_officinarum_with_Field_Spectroradiometry">Characterization of Diatraea saccharalis in Sugarcane (Saccharum officinarum) with Field Spectroradiometry.</a> International Journal of Engineering And Applied Sciencies.<br><br>
                Robayo Avendaño, A., <b>Galindo Mendoza, M.G.</b> (2014). <a href="https://www.researchgate.net/publication/270052617_Analisis_de_la_probabilidad_de_dispersion_de_polen_de_maiz_geneticamente_modificado_usando_el_modelo_HYSPLIT">Análisis de la probabilidad de dispersión de polen de maíz genéticamente modificado usando el modelo Hysplit</a>. Revista Agrociencia, Vol. 48, Pp 511-523. Revistas Indizadas ISSN: 1405-3195<br><br>
                Ramírez Guevara, S.L., <b>Galindo Mendoza, M.G.</b>, Contreras Servin, C., Costero Garbarino, C. (2014). <a href="https://www.researchgate.net/publication/315757380_Los_sistemas_de_informacion_geografica_y_la_justicia_ambiental">Los sistemas de informacion geográfica y la justicia ambiental.</a> XX Reunión Nacional SELPER-México UASLP-UNAM, Vol.2, Págs.165-171, Memorias de Congresos ISBN: 978-607-9343-25-5<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza,M.G.</b>, Yáñez Espinoza, L. (2013). <a href="https://www.researchgate.net/publication/353247237_DETERMINACION_DE_AREAS_SUSCEPTIBLES_A_LA_DEPOSICION_DE_PLAGUICIDAS_ORGANOFOSFORADOS_EN_ZONAS_GREGARIGENAS_DE_LANGOSTA_CENTROAMERICANA"> Determinación de áreas susceptibles a la deposición de plaguicidas organofosforados en zonas gregarígenas de langosta centroamericana</a>.  XX Reunión Nacional SELPER-México UASLP-UNAM, Vol.2, Págs.86-100, Memorias de congresos ISBN: 978-607-9343-25-5.<br><br>
                Robayo Avendaño, A., <b>Galindo Mendoza, M.G.</b> (2014). <a href="https://scholar.google.com/citations?view_op=view_citation&hl=es&user=5pPyzKsAAAAJ&cstart=20&pagesize=80&citation_for_view=5pPyzKsAAAAJ:IjCSPb-OGe4C">Organismos genéticamente modificados como alternativa de adaptación al cambio climático</a>. XX Reunión Nacional SELPER-México UASLP-UNAM, Vol.2, Págs.86-100, Memorias de congresos ISBN: 978-607-9343-25-5.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b> (2013). <a href="https://www.researchgate.net/publication/353247331_PROPUESTA_PARA_DETECCION_TEMPRANA_DE_ESPECIES_INVASORAS">Propuesta para detección temprana de especies invasoras</a>. XX Reunión Nacional SELPER-México UASLP-UNAM, Vol.2, Págs.86-100, Memorias De Congresos ISBN: 978-607-9343-25-5.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b> (2013). <a href="https://www.researchgate.net/publication/325023530_PLAGAS_DEVASTADORAS_EN_LA_AGRICULTURA"> Plagas devastadoras en la agricultura</a>. Entomologia Mexicana, Vol.12, Tomo 2, Págs.1077-1082. ISBN: 978-607-715-109-8.<br><br>
                Aguilar Rivera, N., Olvera Vargas L.A., <b>Galindo Mendoza, M.G.</b> (2013). <a href="https://www.researchgate.net/publication/262737500_Evaluacion_de_aptitud_de_tierras_al_cultivo_de_cana_de_azucar_en_la_Huasteca_potosina_Mexico_por_tecnicas_geomaticas"> Evaluación de aptitud de tierras al cultivo de caña de azúcar en la Huasteca potosina, México, por técnicas geomáticas</a>. Revista de geografía Norte Grande ISNN: 07183402.<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J. (2012). <a href="">Evaluación agroindustrial del cultivo de caña de azúcar (Saccharum officinarum L.) mediante imágenes SPOT 5 HRV En La Huasteca México.</a> Revista de la Facultad de Agronomía, La Plata, Vol.111, Págs.64-74. Revistas Indizadas. ISSN 0041-8676 Y (online) 1669-9513.<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J. (2012). <a href="https://scholar.google.com/citations?view_op=view_citation&hl=es&user=5pPyzKsAAAAJ&citation_for_view=5pPyzKsAAAAJ:-_dYPAW6P2MC"> Enfoque metodológico de diversificación y reconversión de ingenios azucareros</a>. Ingeniería e Investigación, Vol.32, Págs.23-27. Revistas indizadas ISSN: 0120-5609 Impreso y 2248-8723. En línea.<br><br>
                Aguilar Rivera, N. <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C., Fortanelli Martínez, J. (2012). <a href="https://www.researchgate.net/publication/262752979_A_methodological_approach_to_sugar_mill_diversification_and_conversion">A methodological approach to sugar mill diversification and conversion</a>. Universidad Nacional de Colombia. Ingeniería e Investigación. Vol. 32 No. 2. Pp. 23-27. ISSN: 0120-5609.<br><br>
                >Olvera Vargas, L.A., Nuñez Gonzali, A., <b>Galindo Mendoza, M.G.</b>, Aldama Aguilera, C. (2012).  <a href="https://www.researchgate.net/publication/325023104_MODELO_DE_SITRIBUCION_POTENCIAL_PARA_EL_PRONOSTICO_DE_PLAGAS_AGRICOLAS">Modelos de distribucion potencial para el pronóstico de plagas agrícolas.</a>  Entomología Mexicana, Vol.11, Tomo I, Págs.370-374. Revistas Arbitradas ISBN: 978-607-7553-99-3.<br><br>
                <b>Galindo Mendoza, M.G.</b>, Aguilar Rivera, N., Ibarra Zapata, E., Mata Cuellar, F. (2011). <a href="https://www.researchgate.net/publication/325020384_VIGILANCIA_EPIDEMIOLOGICA_AL_ATAQUE_DEL_BARRENADOR_DE_LA_CANA_DE_AZUCAR_Diatraea_saccharalis_EN_LA_REGION_HUASTECA_POTOSINA_APOYADOS_EN_METODO_MULTICRITERIO_Y_NOAA-AVHRR">Vigilancia epidemiológica al ataque del barrenador de la caña de azúcar (Diatraea saccharalis) en la gegión Huasteca potosina apoyados en método multicriterio y Noaa-Avhrr.</a>  Entomología Mexicana, Vol.10, Págs.370-374</li>. Revistas Arbitradas ISBN: 978-607-7553-99-3.<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2011). <a href="https://www.researchgate.net/publication/260769649_Factores_de_competitividad_de_la_agroindustria_de_la_cana_de_azucar_en_Mexico">Factores de competitividad de la agroindustria de la caña de azúcar en México.</a>Región y Sociedad del Colegio de Sonora, Año XXIII, No. 52, Págs.63-78.  Revistas Arbitradas ISSN: 1870-3925<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2011). <a href="https://www.researchgate.net/publication/292983301_Indice_normalizado_de_vegetacion_en_cana_de_azucar_en_la_Huasteca_Potosina"> Índice normalizado de vegetación en caña de azúcar en la Huasteca Potosina.</a>Avances de Investigación Agropecuaria. Págs.63-76. Revistas Arbitradas ISSN: 0188-7890<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2010). <a href="https://www.researchgate.net/publication/292982741_COMPETITIvIDAD_INTERNACIONAL_DE_LA_INDuSTRIA_AzuCARERA_DE_MexICO_iNtErNatioNaL_coMPEtitiVENEss_oF_MEXico's_suGar_iNDustrY">Competitividad internacional de la industria azucarera de México.</a>  Theoria, Vol.19, Págs.70-30.  Revistas Indizadas ISSN: 0717-196x<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2010). <a href="https://www.researchgate.net/publication/262647862_Zonificacion_productiva_canera_en_Huasteca_Potosina_Mexico">Zonificación productiva cañera en Huasteca Potosina, México.</a>  Agronomía Tropical, Vol.60, Págs.139-154. Revistas indizadas ISSN: 0002-192x<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2010). <a href="https://www.researchgate.net/publication/292983353_Evaluacion_multicriterio_y_aptitud_agroclimatica_del_cultivo_de_cana_de_azucar_en_la_region_de_Huasteca_Mexico">Evaluación multicriterio y aptitud agroclimática del cultivo de caña de azúcar en la región de Huasteca (México)</a>.  Corpoica. Ciencia y Tecnología Agropecuaria, Vol.11, Págs.144-154.  Revistas Indizadas ISSN: 0122-8706.<br><br>
                Aguilar Rivera, N., <b>Galindo Mendoza, M.G.</b>, Fortanelli Martínez, J., Contreras Servin, C. (2009).<a href="https://www.researchgate.net/publication/292983614_Por_que_diversificar_la_agroindustria_azucarera_en_Mexico"> ¿Por qué diversificar la agroindustria azucarera en México?</a>.  GCG Georgetown University - Universia, Vol.3, Págs.62-75. Revistas Arbitradas ISSN: 1998-7116.<br><br>
                Olvera Vargas, L.A., <b>Galindo Mendoza, M.G.</b> (2008). <a href="https://www.researchgate.net/publication/324994181_PROPUESTA_METODOLOGICA_PARA_LA_LOCALIZACION_DE_ZONAS_VULNERABLES_A_LA_BROCA_DE_CAFE_Hypothenemus_hampei_Ferrari_EN_LA_HUASTECA_POTOSINA">Propuesta metodológica para la localización de zonas vulnerables a la broca del café (Hypothenemus hampei (Ferrari) en la Huasteca potosina</a>.  Entomología Mexicana, Vol.7, Págs.314-317. Revistas Arbitradas ISBN: 968-839-357-6
              </p>
              <strong>Libros</strong><br><br>
              <p>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C., Hernández Hernández, C.L. (2018). <a href="https://www.researchgate.net/publication/328462186_Geomedicina_y_tecnologia_satelital_aplicada_a_la_vigilancia_en_salud_publica_y_control_de_enfermedades_transmisibles_por_vector_pp15-42_En_Ma_Guadalupe_Galindo_Mendoza_y_Carlos_Contreras_Servin_coord_" target="_blank">Geomedicina y la Tecnología Espacial aplicada al caso de los vectores en salud humana.</a> Primera Edición.  AEM-CONACYT-UASLP-CIACYT-LANGIF-LAGES. ISBN: 978-607-535-065-3. 205 Pág.<br><br>
                Peralta Rivero, C., Contreras Servín, C., <b>Galindo Mendoza, M.G.</b> y Bernal Jácome, L. A. (2017). <a href="https://www.researchgate.net/publication/316734742_Topicos_Ambientales_y_Conservacion_de_Ecosistemas_Naturales" target="_blank">Tópicos ambientales y conservación de ecosistemas naturales. UASLP-CIACYT-LANGIF.</a> ISBN: 987-607-9453-81-7. 180 Págs. Versión Digital. DOI: <a href="https://doi.org/10.13140/RG.2.2.32679.65440" target="_blank">10.13140/RG.2.2.32679.65440</a><br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C. (2017). <a href="https://www.researchgate.net/profile/Carlos-Contreras-Servin-2/publication/324706754_La_Sanidad_Vegetal_en_Mexico_Memoria_Historica/links/5ade6ef6458515c60f616d36/La-Sanidad-Vegetal-en-Mexico-Memoria-Historica.pdf" target="_blank"> La sanidad vegetal en México</a> 2a Edición 2017.  Universidad Autónoma de San Luis Potosí, Coordinación para la Innovación y Aplicación de la Ciencia y la Tecnología, Laboratorio Nacional de Geoprocesamiento de Información Fitosanitaria. 255 Págs. ISBN: 978-607-9453-82-4<br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C. (2014). <a href="https://www.researchgate.net/publication/299813692_HUANGLONGBING_Y_PSILIDO_ASIATICO_DE_LOS_CITRICOS_UN_ACERCAMIENTO_METODOLOGICO_MULTIDISCIPLINARIO" target="_blank">Huanglongbing y Psílido Asiático de los cítricos: Un acercamiento metodológico multidisciplinario.</a>  UASLP-SENASICA-SAGARPA ISBN: 978-607-9343-49-1<br><br>
                <b>Galindo Mendoza, M.G.</b>, Casiano Domínguez, M. (2014). <a href="https://www.researchgate.net/publication/299813797_Manual_de_radiometria_de_campo_para_la_vigilancia_y_proteccion_fitosanitaria_Caso_de_aplicacion_para_HLB" target="_blank">Manual de radiometria de campo para la vigilancia y protección fitosanitaria. Caso de aplicación para HLB.</a> UASLP-SENASICA-SAGARPA. ISBN: 978-607-9343-80-8<br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C. (2014). <a href="https://www.researchgate.net/publication/327118488_Atlas_Nacional_Fitosanitario" target="_blank"> Atlas Nacional Fitosanitario Multimedia.</a> UASLP-SENASICA-SAGARPA. ISBN: 978-607-9343-15-6<br><br>
                Santana Juárez, M.V., <b>Galindo Mendoza, M.G.</b>, Do Carmo Lima, S., Santana Castañeda, G., Contreras Servin, C., Amancio Pickenhayn, J., Cadena Rivera, I. (2014). <a href="https://www.researchgate.net/profile/Carlos-Contreras-Servin-2/publication/312280433_Geografia_de_la_salud_sin_fronteras_desde_Iberoamerica/links/58782d2a08ae6eb871d191c7/Geografia-de-la-salud-sin-fronteras-desde-Iberoamerica.pdf" target="_blank">Geografía de la salud: sin fronteras desde Iberoamérica.</a> UAEM-UASLP-CIACYT-LANGI ISBN:978-607-9343-67-5 Págs. 243<br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servin, C., Mass Caussel, J.F. (2013). <a href="https://www.researchgate.net/publication/299813821_La_plaga_de_langosta_Shistocerca_piceifrons_piceifrons_Walker_Una_vision_multidisciplinaria_desde_la_perspectiva_del_riesgo_fitosanitario_en_Mexico" target="_blank">La plaga de langosta, Shistocerca piceifrons piceifrons (Walker). Una visión multidisciplinaria desde la perspectiva del desastre fitosanitario en México.</a>  UASLP-SENASICA-SAGARPA, ISBN: 978-607-9343-03-3<br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servin, C., Ibarra Zapata, E. (2011). <a href="https://www.researchgate.net/publication/299813785_LA_VIGILANCIA_EPIDEMIOLOGICA_FITOSANITARIA_EN_MEXICO" target="_blank">La vigilancia epidemiológica y fitosanitaria en México: Un acercamiento metodológico.</a> UASLP-SENASICA-SAGARPA, ISBN: 978-607-7856-40-5 Vol. I, Págs. 209
              </p>
              <strong>Capítulos en libros</strong><br><br>
              <p>
                Volmer A. K., <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C., Torrico Albino, J.C. (2020). <a href="https://www.researchgate.net/publication/339350133_Evaluation_of_agricultural_policy_implementation_on_a_local_level_in_Mexico">Evaluation of agricultural policy implementation on a local level in Mexico.</a>  En: Environment and resources management in Latin America, medio ambiente y gestión de los recursos naturales en América Latina.   Primera Edición 2020, San Luis Potosí, Págs: 59-62, ISBN: 978-607-535-132-2.<br><br>
                Olvera Vargas, L., <<b>Galindo Mendoza, M.G.</b>, Aguirre Gómez, R., Aguilar Rivera, N., Yañez Espinosa, L. (2016). <a href="https://www.researchgate.net/publication/311709367_SPATIAL_VARIABILITY_OF_SUGARCANE_BORER_AND_DETECTION_BY_REMOTE_SENSING_IN_THE_HUASTECA_REGION">Variabilidad espacial del barrenador de la caña de azúcar y su detección a través de sensores remotos en la región Huasteca</a>. En:  Tópicos ambientales y conservación de ecosistemas naturales. Peralta Rivero, C., Contreras Servín, C., Galindo Mendoza, M.G. y  Bernal Jácome, L.A.,  Coordinadores, 2016,  UASLP-CIACYT-PMPCA. ISBN: 978-607-9453-81-7. 180 Pág.<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b>, González Montero, R., Medina Garza, H., González Canuto, A.G. (2016). <a href="https://www.researchgate.net/publication/327209808_12_SITUACION_FITOSANITARIA_DE_SAN_LUIS_POTOSI_2000-2015_PHYTOSANITARY_STATUS_OF_SAN_LUIS_POTOSI_2000-2015">Situación fitosanitaria de San Luis Potosí, 200-2015</a>. En:  Tópicos ambientales y conservación de ecosistemas naturales.  Peralta Rivero, C., Contreras Servín, C., Galindo Mendoza, M.G. y  Bernal Jácome, L.A.,  Coordinadores, 2016,  UASLP-CIACYT-PMPCA. ISBN:   978-607-9453-81-7. 180 Pág<br><br>
                Olvera Vargas, L., <b>Galindo Mendoza, M.G.</b> (2014).<a href="https://www.researchgate.net/publication/319515665_NODOS_ESPACIALES_PARA_EL_ANALISIS_DEL_HUANGLONGBING_Y_EL_PSILIDO_ASIATICO_DE_LOS_CITRICOS"> Propuesta para el establecimiento de nodos espaciales para el análisis de Huanglongbing y el psílido asiático de los cítricos</a>. Capítulo 7. En: Huanglongbing y psílido asiático de los cítricos: Un acercamiento metodológico multidisciplinario. Galindo Mendoza, Contreras-Servin, Coordinadores., UASLP-SENASICA-SAGARPA. ISBN: 978-607-9343-49-1<br><br>
                Arreola Martínez, B.E., <b>Galindo Mendoza, M.G.</b>, Yañez Estrada, L.G. (2013). <a href="https://www.researchgate.net/publication/319517917_USO_DE_PARATION_METILICO_EN_EL_COMBATE_A_LA_LANGOSTA_CENTROAMERICANA_Schistocerca_piceifrons_piceifrons_Walker_EN_TIZIMIN_YUCATAN"> Uso de parathion metílico en el combate a la langosta centroamericana Schistocerca Piceifrons Piceifrons (Walker) En Tizimin, Yucatán</a>. Capitulo 3.  En: La plaga de langosta, Shistocerca piceifrons piceifrons (Walker). Una visión multidisciplinaria desde la perspectiva del desatre fitosanitario en México, María Guadalupe Galindo Mendoza, Carlos Contreras Servin, Enrique Ibarra Zapata, Coordinadores. UASLP-SENASICA-SAGARPA. ISBN: 978-607-9343-03-3. Págs. 254.<br><br>
                Olvera Vargas, L.A., <b>Galindo Mendoza, M.G.</b>, Lara y Bretón, L.E. (2013). <a href="https://www.researchgate.net/publication/327209240_10_EVOCANDO_EL_CONOCIMIENTO_ESPACIAL_DE_LOS_CANEROS_MEDIANTE_CARTOGRAFIA_PARTICIPATIVA_PARA_LOCALIZAR_ZONAS_VULNERABLES_A_LA_PLAGA_DE_LA_LANGOSTA_CENTROAMERICANA_Schistocerca_Piceifrons_Piceifrons_WAL"> Evocando el conocimiento espacial de los cañeros mediante cartografía participativa para localizar zonas vulnerables a la plaga de langosta Centroamericana Schistocerca piceifrons piceifrons (Walker), en la Huasteca Potosina</a>. Capitulo 10. En: La plaga de langosta, Shistocerca piceifrons piceifrons (Walker). Una visión multidisciplinaria desde la perspectiva del desastre fitosanitario en México, María Guadalupe Galindo Mendoza, Carlos Contreras Servín y Enrique Ibarra Zapata, Coordinadores. UASLP-SENASICA-SAGARPA. ISBN: 978-607-9343-03-3, Págs. 254.<br><br>
                <b>Galindo Mendoza, M.G.</b>, Contreras Servín, C., Olvera Vargas, L.A. (2010). <a href="https://www.researchgate.net/publication/283712061_Metodologia_para_determinar_zonas_de_peligro_al_ataque_de_la_plaga_de_langosta_centroamericana_Schistocerca_piceifrons_piceifrons_Walter_1970_apoyados_en_sensores_de_alta_resolucion_y_SIG_Estudio_de_c"> Metodología para determinar zonas de peligro al ataque de la plaga de langosta Centroamericana (Shistocerca piceifrons piceifrons Walter, 1870) apoyados en sensores de alta resolución y SIG. Estudio de caso: La Huasteca potosina, México. Capítulo 13. En: Conceptos de geomática y estudios de caso en México.  Instituto de Geografía-UNAM-Geografía Para el siglo XXI, UNAM. Vol. 5, Págs. 236.
              </p>
            </div>
          </div>
        </div>
        <!--<div class="accordion-item">
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
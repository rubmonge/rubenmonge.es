<?php
require('../Library/Functions/Core.php');
require('../Library/Functions/Utils.php');
$feed = file_get_contents_curl('http://rubmonge.tumblr.com/rss');
preg_match_all("/http\:\/\/[a-zA-Z0-9\-\.\:\_\/]+\.jpg/", $feed, $imgs, PREG_PATTERN_ORDER);
?>
<!DOCTYPE html>
<html lang="es">
    <head>		
        <!--base href="http://www.rubenmonge.es/" /-->
        <meta charset="utf-8" />
        <meta name="rating" content="General" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="google-site-verification" content="BSFG3trxFMrwPqhQqk2o728i4DjK5cUmPtWUkSsWq7w" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />				
        <link rel="stylesheet" type="text/css" href="css/1140.css" media="screen">				
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Mako|Bad+Script' rel='stylesheet' type='text/css'>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta name="viewport" content="width=device-width,user-scalable=no" />
        <title>rubenmonge.es</title>
    </head>
    <body>
        <div class="container" id='mainheader'>
            <header class="row">
                <hgroup class="twelvecol last">
                    <h1>rubenmonge.es</h1>
                    <h2>Ingeniero informático, programador, web dev, productor musical y padre</h2>
                </hgroup>
            </header>
        </div>
        <div class=container>

            <section class="row">
                <header>								
                    <h3>Proyectos <small>en los que he estado/estoy relacionado</small></h3>								
                </header>
                <dl class="threecol">
                    <dt>En proceso</dt>
                    <dd>exterpark</dd>										
                    <dd>principalmodels</dd>																				
                    <dd>rcd espanyol merchandising</dd>																				
                                     
                    <dt>2013</dt>
					<dd><a href="http://www.granrecapte.com//" rel="external">granrecapte.com</a></dd>
                    <dd><a href="http://www.elmejorlocalparaelmejornegocio.com/" rel="external">elmejorlocalparaelmejornegocio.com</a></dd>
                    <dd><a href="http://www.dagatroninstruments.com/" rel="external">dagatroninstruments.com</a></dd>
                    <dd><a href="http://www.cocosuites.es/" rel="external">cocosuites.es</a></dd>
                    <dd><a href="http://www.finquesfinad.com/" rel="external">finquesfinad.com</a></dd>
                    <dd><a href="http://www.salviahotel.com/" rel="external">salviahotel.com</a></dd>
                    <dd><a href="http://www.webonlineoffice.com/" rel="external">webonlineoffice.com</a></dd>
                    <dd><a href="http://www.depilacionbarcelona.com/" rel="external">depilacionbarcelona.com</a></dd>
                    <dd><a href="http://www.fripan.com/" rel="external">fripan.com</a></dd>
                    <dd><a href="http://www.sala-apolo.com/" rel="external">sala-apolo.com (fase 2)</a></dd>
                    <dd><a href="http://www.api.cat/" rel="external">api.cat (fase 1)</a></dd>
					<dd><a href="http://www.intradei.com/web" rel="external">intradei.com</a></dd>	
                </dl>	
                <dl class="threecol">
                    <dt>2012</dt>										
                    <dd><a href="http://www.suoficinavirtual.com/" rel="external">suoficinavirtual.com</a></dd>
                    <dd><a href="http://www.sala-apolo.com/" rel="external">sala-apolo.com (fase 1)</a></dd>
                    <dd><a href="http://entradas.stsbeautybarcelona.com/" rel="external">entradas.stsbeautybarcelona.com</a></dd>
                    <dd><a href="http://www.cinetools.es/" rel="external">cinetools.es</a></dd>
                    <dd><a href="http://m.hotelcanfisa.com/" rel="external">m.hotelcanfisa.com</a></dd>
                    <dd><a href="http://www.planetlook.com/" rel="external">planetlook.com</a></dd>
                    <dd><a href="http://www.planetlookshop.com/" rel="external">planetlookshop.com</a></dd>
                    <dd><a href="http://www.postharvest.biz/" rel="external">postharvest.biz</a></dd>
                    <dd><a href="http://www.blancabeltz.com/" rel="external">blancabeltz.com</a></dd>
                    <dd><a href="http://www.camasapilables.com/" rel="external">camasapilables.com</a></dd>
                    <dd><a href="http://www.juegosdepatio.es/" rel="external">juegosdepatio.es</a></dd>
                    <dd><a href="http://www.finquesferrer.com/" rel="external">finquesferrer.com</a></dd>
                    <dd><a href="http://lopd.ezone.net/" rel="external">lopd.ezone.net</a></dd>										
                    <dd><a href="http://www.signia.es/" rel="external">signia.es</a></dd>
                    <dd><a href="http://www.calcalsot.com/" rel="external">calcalsot.com</a></dd>
                    <dd><a href="http://www.dagatron.es/" rel="external">dagatron.es</a></dd>
                    <dd><a href="http://m.apartmentsinbarcelona.net/" rel="external">m.apartmentsinbarcelona.net</a></dd>
                    <dd><a href="http://www.ramblasapartmentsinbarcelona.com" rel="external">ramblasapartmentsinbarcelona.com</a></dd>
                    <dd><a href="http://www.gestnom.com" rel="external">gestnom.com</a></dd>																													
                    <dd><a href="http://www.copersa.com" rel="external">copersa.com</a></dd>
                    <dd><a href="http://www.faderson.com" rel="external">faderson.com</a></dd>
                    <dd><a href="http://www.finquesgrau.com" rel="external">finquesgrau.com</a></dd>
                    <dd><a href="http://m.finquesgrau.com" rel="external">m.finquesgrau.es</a></dd>
                </dl>
                <dl class="threecol">
                    <dt>2011</dt>										
                    <dd><a href="http://www.zombiestudio.es/djshockcompetition" rel="external">zombiestudio.es/djshockcompetition</a></dd>
                    <dd><a href="http://m.fundaciovilacasas.com" rel="external">m.fundaciovilacasas.com</a></dd>
                    <dd><a href="http://www.fundaciovilacasas.com" rel="external">fundaciovilacasas.com</a></dd>
                    <dd><a href="http://www.boldupla.com" rel="external">boldupla.com</a></dd>	
                    <dd><a href="http://www.sebap.com" rel="external">sebap.com</a></dd>
                    <dd><a href="http://www.aprofarm.org" rel="external">aprofarm.org</a></dd>
                    <dd><a href="http://www.parkmobel.es" rel="external">parkmobel.es</a></dd>
                    <dd><a href="http://eso.editorialcasals.com" rel="external">eso.editorialcasals.com</a></dd>
                    <dd><a href="http://www.logisnet.com" rel="external">logisnet.com</a></dd>
                    <dd><a href="http://www.elitemodellook.es" rel="external">elitemodellook.es</a></dd>
                    <dd><a href="http://www.pisosestudiantesbarcelona.com" rel="external">pisosestudiantesbarcelona.com</a></dd>
                    <dd><a href="http://www.navascusi.com" rel="external">navascusi.com</a></dd>
                    <dd><a href="http://www.themailcompany.es" rel="external">themailcompany.es</a></dd>
                    <dd><a href="http://hotelcanfisa.com/" rel="external">hotelcanfisa.com</a></dd>
                    <dd><a href="http://www.thecookers.es/" rel="external">thecookers.es</a></dd>										
                </dl>

                <dl class="threecol last">
                    <dt>2010</dt>
                    <dd><a href="http://www.universocanibal.com" rel="external">universocanibal.com</a></dd>
                    <dd><a href="http://www.medicinaesteticalago.com" rel="external">medicinaesteticalago.com</a></dd>
                    <dd><a href="http://www.estil9.com" rel="external">estil9.com</a></dd>
                    <dd><a href="http://www.youvote.info" rel="external">youvote.info</a></dd>
                    <dd><a href="http://www.barcelonaresidencias.com" rel="external">barcelonaresidencias.com</a></dd>
                    <dd><a href="http://www.americandent.com" rel="external">americandent.com</a></dd>
                    <dd><a href="http://www.gaes.es" rel="external">gaes.es</a></dd>
                    <dd><a href="http://www.marhuenda.cat" rel="external">marhuenda.cat</a></dd>
                    <dt>Anteriores</dt>
                    <dd><a href="http://tattoo.derbilive.com" rel="external">tattoo.derbilive.com</a></dd>
                    <dd><a href="http://www.barnacargo.es" rel="external">barnacargo.es</a></dd>
                    <dd><a href="http://www.condonalbuzon.com" rel="external">condonalbuzon.com</a></dd>
                    <dd><a href="http://www.guiasnaranjas.com" rel="external">guiasnaranjas.com</a></dd>
                    <dd><a href="http://www.demoplazas.com" rel="external">demoplazas.com</a></dd>
                    <dd><a href="http://www.yeguadasalvatella.com" rel="external">yeguadasalvatella.com</a></dd>
                    <dd><a href="http://millennium.savor.es/" rel="external">millennium.savor.es</a></dd>
                    <dd><a href="http://www.turismeperatothom.com/" rel="external">turismeperatothom.com</a></dd>
                    <dd><a href="http://www.gabarro.com/" rel="external">gabarro.com</a></dd>
                    <dd><a href="http://www.iese.edu" rel="external">iese.edu</a></dd>
                </dl>								
            </section>
            <section class="row">								
                <dl class="threecol">
                    <dt>Otras cosas</dt>
                    <dd><a href="http://blog.rubenmonge.es" rel="external">blog.rubenmonge.es</a></dd>
                    <dd><a href="http://www.michellelourdes.com" rel="external">michellelourdes.com</a></dd>
                    <dd><a href="http://www.millalucia.com" rel="external">millalucia.com</a></dd>
                    <dd><a href="http://www.rubenhit.com" rel="external">rubenhit.com</a></dd>
                    <dd><a href="http://www.rubensicilia.com" rel="external">rubensicilia.com</a></dd>
                </dl>

                <dl class="threecol last">
                    <dt>Redes</dt>										
                    <dd><a href="http://twitter.com/rubmonge" rel="external">Twitter</a></dd>
                    <dd><a href="http://rubmonge.tumblr.com" rel="external">Tumblr</a></dd>
                    <dd><a href="http://instagram.com/rubmonge" rel="external">Instagram</a></dd>
                    <dd><a href="http://pinterest.com/rubmonge/" rel="external">Pinterest</a></dd>
                    <dd><a href="http://www.linkedin.com/pub/rub%C3%A9n-monge-p%C3%A9rez/27/6/4a3" rel="external">Linkedin</a></dd>
                    <dd><a href="https://soundcloud.com/rubenhit" rel="external">Soundcloud</a></dd>
                    <dd><a href="http://www.mixcloud.com/rubensicilia/" rel="external">Mixcloud</a></dd>
                </dl>
            </section>
            <? if (is_array($imgs) && count($imgs[0])): ?>						
                <section class="row">
                    <dl>
                        <dt>Últimas instagrams</dt>																	
                        <dd class="sixcol" style='margin-right:3%;'>								
                            <img src="<?= $imgs[0][0] ?>" id='largeimage'/>									
                        </dd>
                        <? foreach ($imgs[0] as $k => $img): ?>
                            <dd class="enlarge onecol <?= (($k + 1) % 6 == 0) ? "last" : "" ?>" >								
                                <img src="<?= $img ?>" />									
                            </dd>
                        <? endforeach ?>								
                    </dl>
                </section>
            <? endif ?>
            <footer class="row">
                <p><a href="http://www.linkedin.com/pub/rub%C3%A9n-monge-p%C3%A9rez/27/6/4a3" title="linkedin" rel="external">[contactar]</a></p>
                <p>&reg; Ruben Monge'2011</p>
            </footer>
        </div>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-6697818-3']);
            _gaq.push(['_setDomainName', '.rubenmonge.es']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="js/public.js"></script>
    </body>
</html>

<?php
session_start();

$lingua="ita";

if(isset($_SESSION['lingua']))
{
    $lingua=$_SESSION['lingua'];
}
?>
<!doctype html>
<html lang="it">

<head>
    <title>Educazione civica</title>
    
    <?php
    include_once("head.php");
    ?>

</head>
<body onload="traduzione('<?php echo $lingua; ?>')">
    <?php
        include("menu.php");
    ?>

<div class="fluid-container">
    <div class="ita">
        <div class="row sfondo">
            <div class="col-1">

            </div>
            <div class="col-10">
                <!--<hr>-->
                <div class="row section" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                            <h1>SHARESPACE</h1>
                            <p>
                                La ShareSpace è la software house dell'omonimo social network <strong>ShareSpace</strong>. <br><br>
                                ShareSpace dà la possibilità ai suoi utenti di condividere foto e video e di scegliere con chi condividerli (con tutto il mondo o solo con gli amici).
                                Ogni foto o video può ottenere like e ricevere commenti da chi lo visualizza.
                                Inoltre dà la possibilità di fare chiamate e videochiamate con gli amici o semplicemente chattare con il resto del mondo e stringere nuove amicizie.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="div center">
                            <img src="img/logo_transparent.png" width="100%" alt="" class="d-inline-block align-text-top responsive sharespace">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="col-1">

            </div>
        </div>
        <div class="row sfondo">
            <div class="col-1">

            </div>
            <div class="col-10">
                
                <div class="row section" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                            <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                                <h1>ETICA DIGITALE</h1>
                                <p>
                                    Nello sviluppo e nella gestione del social sono stati sempre applicati quei principi etici 
                                    che sono fondamentali per l'uso responsabile delle tecnologie digitali 
                                    per garantire il benessere individuale e collettivo nella società odierna.
                                    Qui di seguito sono elencati i nostri principi.
                                </p>
                            </div>
                       
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/etica_digitale.jpg" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
                <div class="col-1">

            </div>
        </div>
        <div class="divider" style="padding-top: 40px; padding-bottom: 40px;">
            <!-- <div class="custom-shape-divider-top-1684783783">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                </svg>
            </div> -->
            <div class="custom-shape-divider-top-1684784063">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
        </div>
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                            <h1>PRIVACY</h1>
                            <p>
                                ShareSpace garantisce la riservatezza delle informazioni e il rispetto della privacy degli utenti 
                                lasciando loro un controllo su di essi.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="div center">
                            <img src="img/ed_civ/privacy.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>SICUREZZA</h1>
                            <p>
                                ShareSpace garantisce la sicurezza dei sistemi e dei dati
                                da eventuali attacchi informatici che potrebbero mettere a rischio le informazioni sensibili degli utenti.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/sicurezza.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>INCLUSIONE</h1>
                            <p>
                                ShareSpace promuove l'inclusione di tutte le persone, 
                                indipendentemente dalla provenienza economica, geografica o sociale, 
                                per evitare fenomeni di discriminazioni.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/inclusione.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>TRASPARENZA</h1>
                            <p>
                                ShareSpace garantisce la trasparenza sul come le informazioni degli utenti vengono raccolte
                                e sul come vengono utilizzate.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/trasparenza.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>IMPATTO AMBIENTALE</h1>
                            <p>
                                ShareSpace promuove l'adozione di tecnologie sostenibili 
                                per l'utilizzo di risorse per lo svolgimento delle attività.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/imp_amb.png" alt=""  class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up" data-aos-anchor-placement="top-center"s>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                    <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                        <h1>MANIFESTO</h1>
                        <p>
                            Per saperne di più dei principi che l'azienda segue per il benessere di tutti consultare il manifesto.
                        </p>
                        <a class="button" href="pdf/Manifesto.pdf" target="_blank">Manifesto</a>
                    </div> 
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                
            </div>
            <div class="col-1">
                
            </div>
        </div>
    </div>
        <!-- inglese -->
    <div class="eng">
                <div class="row sfondo">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            <!--<hr>-->
                            <div class="row section" data-aos="fade-up" data-aos-anchor-placement="top-center">
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                                    <h1>SHARESPACE</h1>
                                    <p>
                                        The company we thought up for this civic education project is called <strong>ShareSpace</strong>.<br><br>
                                        ShareSpace is the software house of the homonymous social network <strong>ShareSpace</strong> giving its users the possibility to share photos and videos and to choose with whom to share them (with the whole world or just with friends).
                                        Each photo or video can get likes and receive comments from those who view it.
                                        It also gives you the ability to make calls and video calls with friends or just chat with the rest of the world and make new friends.
                                    </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div data-aos="fade-out" data-aos-duration="3000" class="div center">
                                        <img src="img/logo_transparent.png" width="100%" alt="" class="d-inline-block align-text-top responsive sharespace">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                        <div class="col-1">

                        </div>
                    </div>
                    <div class="row sfondo">
                        <div class="col-1">

                        </div>
                        <div class="col-10">
                            
                            <div class="row section" data-aos="fade-up" data-aos-anchor-placement="top-center">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                                        <h1>DIGITAL ETHICS</h1>
                                        <p>
                        In developing and managing the social, those ethical principles have always been applied that are fundamental to the responsible use of digital technologies to ensure individual and collective well-being in today's society. Listed below are our principles.
                                        </p>
                                        </div>
                                
                                    <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                                        <img src="img/ed_civ/etica_digitale.jpg" alt="" class="d-inline-block align-text-top responsive">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>
                            <div class="col-1">

                        </div>
                    </div>
                    <div class="divider" style="padding-top: 40px; padding-bottom: 40px;">
                        <!-- <div class="custom-shape-divider-top-1684783783">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                            </svg>
                        </div> -->
                        <div class="custom-shape-divider-top-1684784063">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-10">
                
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                            <h1>PRIVACY</h1>
                            <p>
                  ShareSpace ensures the confidentiality of information and respect for users' privacy by leaving them in control of it.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="div center">
                            <img src="img/ed_civ/privacy.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>SECURITY</h1>
                            <p>
                                ShareSpace ensures the security of systems and data from cyber attacks that could put users' sensitive information at risk.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/sicurezza.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>INCLUSION</h1>

                            <p>
 ShareSpace promotes the inclusion of all people, regardless of economic, geographic or social background, to avoid phenomena of discrimination.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/inclusione.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>TRANSPARENCY</h1>

                            <p>
                                ShareSpace provides transparency about how user information is collected and how it is used.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/trasparenza.png" alt="" class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div data-aos="fade-in" data-aos-duration="3000" class="divf1 center">
                            <h1>ENVIRONMENTAL IMPACT</h1>
                            <p>
                                ShareSpace promotes the adoption of sustainable technologies for the use of resources to carry out activities.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div data-aos="fade-out" data-aos-duration="3000" class="divf2 center">
                            <img src="img/ed_civ/imp_amb.png" alt=""  class="d-inline-block align-text-top responsive">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                <div class="row box" data-aos="fade-up"
     data-aos-anchor-placement="top-center"s>
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                    <div data-aos="fade-in" data-aos-duration="3000" class="div center">
                        <h1>MANIFESTO</h1>
                        <p>
                            Read more about the principles the company follows for the welfare of all in the manifesto.
                        </p>
                        <a class="button" href="pdf/Manifesto.pdf" target="_blank">Manifesto</a>
                    </div> 
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <!--<hr>-->
                
            </div>
            <div class="col-1">
                
            </div>
        </div>
    </div>
    </div>
    
    <div class="input-group mb-3" id="gruppo_lingua">
    
    <select id="lingua" name="lingua" style="border-radius:5px;margin-left:5px; width:100px;" onchange="traduzione(this.value);">
        <option value="ita" <?php if($lingua == "ita") echo "selected" ?>>Italiano</option>
        <option value="eng" <?php if($lingua == "eng") echo "selected" ?>>English</option>
    </select>
    <div class="input-group-prepend" style="margin: 2px; margin-right:5px;">
     <img src="img/lingua/italiano.png"  style="width:25px; "  class="ita">
      <img src="img/lingua/inglese.png" style="width:25px; " class="eng">
   </div>
  
   
     
 </div>
    <?php
        include("footer.php");
    ?>
    
    
    <?php
        include("js.php");
    ?>
</body>
</html>
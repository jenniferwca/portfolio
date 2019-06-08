<?php
    include "header.php";
?>

<section class="webdesign">
    <div class="projecttitle1">
        <h2>WEB<p>DESIGN</p></h2>
        <?php
            include "svg/diamond_line.php";
        ?>
    </div>
    <div class="webprojects">
        <div class="llbpro">
            <div class="projectpic">
                <img id="llbview" src="images/laidbackbride_preview.png" alt="Link to Laid Back Bride" title="Link to Laid Back Bride"/>
                <a href="https://laidbackbride.000webhostapp.com/" target="_blank">
                <div class="overlay">
                    <div class="overlay_text"><i class="fas fa-link"></i></div>
                </div>
                </a>
            </div>
             <h3>Laid Back Bride</h3>
             <p>A tool to help bride-to-be organizing wedding timeline and budget.</p>
             <p>A side project of my own to practice styling and coding.</p>
             <p><b>Programs: </b>HTML/CSS/JS/PHP/MySQL/AI/PS</p>
             <p><a href="https://github.com/jenniferwca/laidbackbride" target="_blank">[ GitHub ]</a></p>
        </div>
        <div class="getpro">
            <div class="projectpic">
                <img id="gtview" src="images/gettogether_preview.png" alt="Link to Get Together" title="Link to Get Together"/>
                <a href="http://get-together.gq/" target="_blank">
                    <div class="overlay">
                        <div class="overlay_text"><i class="fas fa-link"></i></div>
                    </div>
                </a>
            </div>
            <h3>Get Together</h3>
            <p>Management tool for people to organize a small event.</p>
            <b>Group project - contribution:</b>
            <ul>
                <li>Branding and Logo Design</li>
                <li>Slogan animation on landing page using SVG</li>
                <li>RSVP feature - send invitations to guests</li>
            </ul>
            <p><b>Programs: </b>HTML/CSS/jQuery/MySQL/AI/PS</p>
            <p><a href="https://github.com/jenniferwca/get-together" target="_blank">[ GitHub ]</a></p>
        </div>
        <div class="dreampro">
            <div class="projectpic">
            <img id="djview" src="images/dreamerjourney_preview.png" alt="Link to Dreamer's Journey" title="Link to Dreamer's Journey"/>
            <a href="http://dreamerjourney.000webhostapp.com/" target="_blank">
                <div class="overlay">
                    <div class="overlay_text"><i class="fas fa-link"></i></div>
                </div>
            </a>
            </div>
            <h3>Dreamer's Journey</h3>
            <p>A blog for dreamers to type out the journey of their achievement.<p>
            <p>Building the webiste from scratch, cooperating with 'Image of the day' with NASA API.</p>
            <p><b>Programs: </b>HTML/CSS/jQuery/PHP/MySQL</p>
            <p><a href="https://github.com/jenniferwca/dreamerjourney" target="_blank">[ GitHub ]</a></p>
        </div>
        <div class="underpro">
            <div class="projectpic">
                <img id="uwview" src="images/underwater_preview.png" alt="Link to Underwater" title="Link to Underwater"/>
                <a href="http://www.underwater.tk/" target="_blank">
                    <div class="overlay">
                        <div class="overlay_text"><i class="fas fa-link"></i></div>
                    </div>
                    </a>
            </div>
            <h3>Underwater</h3>
            <p>Design a high-end restaurant website that’s located an aquarium.</p>
            <b>Group project - contribution:</b>
            <ul>
                <li>Branding and Logo Design</li>
                <li>Homepage with JS slideshow</li>
                <li>Menu</li>
            </ul>
            <p><b>Programs: </b>HTML/CSS/JS/AI/PS</p>
            <p><a href="https://github.com/mndk0076/Underwater" target="_blank">[ GitHub ]</a></p>
            </div>
        </div>
    </div>
</section>

    <section class="graphicdesign">
        <div class="layout_container">
            <div class="projecttitle2">
                <h2>GRAPHIC<p>DESIGN</p></h2>
                <?php
                    include "svg/diamond_line.php";
                ?>
            </div>
            <div class="graprointro">
            <div class="arrowbtn_container">
                <button id="grapro1"><i class="fas fa-circle"></i></button>
                <button id="grapro2"><i class="fas fa-circle"></i></button>
                <button id="grapro3"><i class="fas fa-circle"></i></button>
                <button id="grapro4"><i class="fas fa-circle"></i></button>
            </div>
            <div id="macsush_text">
                <h3>Mac's Sushi</h3>
                <p>A school project to re-brand food packaging. Creating a more dynamic style to the logo and packaging design. With the knowledge of industrial design, I was able to customize the container within the limitations of production.</p>
            </div>
            <div id="petabites_text">
                <h3>Petabites</h3>
                <p>A collaboration with graphic designer, Candace Correia. We simplified the packaging by using only two imprint colors to reduce the cost of production.</p>
            </div>
            <div id="NuGoFree_text">
                <h3>NuGoFree</h3>
                <p>Redefining the brand identity for NuGoFree healthy snacks. The original brand identity seemed dated and unappealing, which was out-of-step to how exciting their foods were in reality. Using brighter colours, it is easier to bring out a positive reaction to organic food.</p>
            </div>
            <div id="cream_text">
                <h3>Cream</h3>
                <p>Another collaboration with graphic designer, Candace Correia, for a coffee shop. We made sure that the packaging is made with clear plastic in order to draw attention from other, potential customers as one customer carries the product.</p>
            </div>
            </div>
            <div class="graslides_container">
                <div class="graproim" id="img1">  
                    <img src="images/macsushi.jpg" alt="macsushi" title="macsushi design"/>
                </div>  
                <div class="graproim" id="img2"> 
                    <img src="images/petabites.jpg" alt="petabites" title="petabites design"/>
                </div>  
                <div class="graproim" id="img3"> 
                    <img src="images/NuGoFree.jpg" alt="NuGoFree" title="NuGoFree design"/>
                </div>  
                <div class="graproim" id="img4"> 
                    <img src="images/cream.jpg" alt="cream" title="cream design"/>
                </div>
            </div>
        </div>

    </section>
<?php
    include "footer.php";
?>
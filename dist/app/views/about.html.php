<div class="readable">
    <p>Liltha, was auf elbisch Tanz bedeutet, wurde aus dem Bedürfnis heraus gegründet, einen Tanztag anzubieten, an dem sowohl an der Technik wie auch am Ausdruck gefeilt werden kann. Dies setzen wir mit einem breiten Angebot an Modern-Folk-, Ballett-, Modern-Dance-, sowie Tangostunden und Übungsmöglichkeiten um. Ansprechen möchten wir alle tanzfreudige junge und jung gebliebene Leute. Jeder kann selbst entscheiden, welche Kurse ihn von unserem Angebot ansprechen.</p>
    <p>Uns ist es wichtig, dass die Kurse für alle zugänglich sind, die Freude am tanzen haben und den ganzen Tag durchtanzen möchten. Das ist ab jetzt durch Liltha in Luzern möglich. Die Leidenschaft und nicht der Profit steht bei uns im Vordergrund, weshalb wir Vieltänzern finanziell entgegenkommen.  Wir empfinden dies als sinnvoll und wissen auch aus eigener Erfahrung, dass oft das Geld ein Hindernis sein kann.</p>
    <?php foreach ( $teachers as $teacher ) : ?>
        <?php if ( $teacher->getBio() ) : ?>
            <article id="<?php echo bookmark( $teacher->getFirstName() . '-' . $teacher->getLastName() ) ?>" class="teacher">
                <?php if ( $teacher->getPortraitImage() ) : ?>
                    <img src="<?php echo site() . $teacher->getPortraitImage() ?>">
                <?php endif ?>
                <h3><?php echo $teacher->getFirstName() ?></h3>
                <?php echo $teacher->getBio() ?>
                <?php if ( $teacher->getURL() ) : ?>
                    <p class="teacher-link"><a href="<?php echo $teacher->getURL() ?>">Persönliche Website</a></p>
                <?php endif ?>
            </article>
        <?php endif ?>
    <?php endforeach ?>
</div>
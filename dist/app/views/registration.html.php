<?php echo price_table( $lessons ) ?>
<div class="readable">
    <p>Nach der erfolgreichen Anmeldung erhälst du eine E-Mail mit deinen ausgewählten Kursdaten. Bitte bewahre diese E-Mail auf, bist du eine definitive Kursbestätigung erhälst.</p>
    <form id="form" class="form" method="post" action="<?php echo site() . 'courses' ?>" autocomplete="on">
        <label for="name">Name<span>*</span></label>
        <input type="text" id="name" name="name" required>
        <label for="student">Student</label>
        <input type="checkbox" id="student" name="student">Ja, ich bin Student.
        <label for="email">E-Mailadresse<span>*</span></label>
        <input type="email" id="email" name="email" required>
        <?php foreach ( $lessons as $lesson ) : ?>
            <input type="hidden" id="lesson-<?php echo $lesson->getID() ?>" name="lessonID[]" value="<?php echo $lesson->getID() ?>">
        <?php endforeach ?>
        <div class="submit-wrapper">
            <input class="filled button" type="submit" value="Anmelden">
        </div>
    </form>
</div>
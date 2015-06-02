<form id="form" class="readable" method="post" action="<?php echo site() . 'contact' ?>" autocomplete="on">
    <label for="name">Name<span>*</span></label>
    <input type="text" id="name" name="name" required>
    <label for="email">E-Mailadresse<span>*</span></label>
    <input type="email" id="email" name="email" required>
    <label for="subject">Betreff</label>
    <input type="text" id="subject" name="subject">
    <label for="message">Nachricht<span>*</span></label>
    <textarea id="message" name="message" required></textarea>
    <div class="submit-wrapper">
        <input class="filled button" type="submit" value="Senden">
    </div>
</form>
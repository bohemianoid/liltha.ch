<form method="post" action="<?php echo site() . 'registration' ?>">
    <nav class="sub navigation">
        <ul>
            <?php foreach ( $courses as $course ) : ?>
                <li><a href="#<?php echo bookmark( $course->getName() ) ?>"><?php echo $course->getName() ?></a></li>
            <?php endforeach ?>
            <li><a class="empty button" href="<?php echo site() ?>prices">Preise</a></li>
            <li><input class="filled button" type="submit" value="Anmelden"></li>
        </ul>
    </nav>
    <div class="courses">
        <?php foreach ( $courses as $course ) : ?>
            <article id="<?php echo bookmark( $course->getName() ) ?>">
                <div class="medium-1-2">
                    <h3><?php echo $course->getName() ?></h3>
                    <?php if ( $course->getDescription() ) : ?>
                        <p><?php echo $course->getDescription() ?></p>
                    <?php endif ?>
                </div>
                <div>
                    <?php $lessons = $course->getLessons() ?>
                    <?php foreach ( $lessons as $lesson ) : ?>
                        <div class="lesson">
                            <div class="small-1-5 medium-1-3 column">
                                <?php if ( $lesson->getRegistrationURL() ) : ?>
                                    &nbsp;
                                <?php else : ?>
                                    <input type="checkbox" class="checkbox" id="lesson-<?php echo $lesson->getID() ?>" name="lessonID[]" value="<?php echo $lesson->getID() ?>">
                                    <label for="lesson-<?php echo $lesson->getID() ?>"></label>
                                <?php endif ?>
                            </div>
                            <div class="small-4-5 small-break medium-1-3 column date">
                                <p class="day"><?php echo $lesson->getDay()->getName() ?></p>
                                <p class="time"><?php echo $lesson->getTimeStart() ?>&mdash;<br><?php echo $lesson->getTimeEnd() ?></p>
                                <?php if ( period( $lesson ) ) : ?>
                                    <p class="period"><?php echo period( $lesson, true ) ?></p>
                                <?php endif ?>
                            </div>
                            <div class="small-4-5 small-offset-1-5 medium-1-3 column">
                                <p class="place"><span><?php echo $lesson->getPlace()->getName() ?></span><br><?php echo $lesson->getPlace()->getAddress() ?></p>
                                <?php if ( $lesson->getPrice() ) : ?>
                                    <p class="price">CHF <span><?php echo $lesson->getPrice() ?></span>/8 Lektionen</p>
                                <?php endif ?>
                                <h4>Leitung</h4>
                                <?php $teachers = $lesson->getTeachers() ?>
                                <?php foreach ( $teachers as $teacher ) : ?>
                                    <p class="teacher"><a href="<?php echo $teacher->getBio() ? site() . 'about#' . bookmark( $teacher->getFirstName() . '-' . $teacher->getLastName() ) : $teacher->getURL() ?>"><?php echo $teacher->getFirstName() ?></a></p>
                                <?php endforeach ?>
                                <?php if ( $lesson->getRegistrationURL() ) : ?>
                                    <p><a class="filled button" href="<?php echo $lesson->getRegistrationURL() ?>">Zur Anmeldung</a></p>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </article>
        <?php endforeach ?>
    </div>
    <nav class="sub navigation">
        <ul>
            <?php foreach ( $courses as $course ) : ?>
                <li><a href="#<?php echo bookmark( $course->getName() ) ?>"><?php echo $course->getName() ?></a></li>
            <?php endforeach ?>
            <li><a class="empty button" href="<?php echo site() ?>prices">Preise</a></li>
            <li><input class="filled button" type="submit" value="Anmelden"></li>
        </ul>
    </nav>
</form>
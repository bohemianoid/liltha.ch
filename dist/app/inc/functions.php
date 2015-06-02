<?php

function get_header_images( $return = 'array' ) {
    $headerImages = glob( 'media/headers/*' );
    shuffle( $headerImages );

    if ( $return == 'image' ) {
        return $headerImages[ 0 ];
    } else {
        return $headerImages;
    }
}

function bookmark( $anchor ) {
    $anchor = strtolower( $anchor );
    $anchor = str_replace( array( ' ', 'ä', 'ö', 'ü' ), array( '-', 'ae', 'oe', 'ue' ), $anchor );

    return $anchor;
}

function period( $lesson, $linebreak = false ) {
    $html = '';

    if ( $lesson->getPeriodStart() && ! $lesson->getPeriodEnd() ) {
        $html .= 'Ab ';
    }

    if ( $lesson->getPeriodStart() ) {
        $html .= $lesson->getPeriodStart();
    }

    if ( $lesson->getPeriodEnd() ) {
        $html .= '&mdash;';

        if ( $linebreak ) {
            $html .= '<br>';
        }

        $html .= $lesson->getPeriodEnd();
    }

    return $html;
}

function price_table( $lessons, $student = false ) {
    $course = 0;
    $sum = 0;

    $html =  '<table class="readable" cellpadding="8">
                  <caption>Ausgewählte Kurse</caption>
                  <tbody>';

    foreach ( $lessons as $lesson ) {
        $html .=     '<tr>
                          <td class="heading">' . $lesson->getCourse()->getName() . '</td>
                          <td class="date">' . $lesson->getDay()->getName() . ', ' . $lesson->getTimeStart() . '&mdash;' . $lesson->getTimeEnd();

        if ( period( $lesson ) ) {
            $html .=         '<br>' . period( $lesson );
        }

        $html .=         '</td>
                          <td class="price">';

        if ( $lesson->getPrice() ) {
            $course += 1;
            $sum += $lesson->getPrice();

            $html .=         'CHF <span>' . $lesson->getPrice() . '</span>';
        }

        $html .=         '</td>
                      </tr>';

        if ( $lesson->getPrice() && $course > 1 ) {
            if ( $course == 2 ) {
                $discount = 0.3 * $lesson->getPrice();
            } elseif ( $course > 2 ) {
                $discount = 0.5 * $lesson->getPrice();
            }

            $discount = ceil( $discount );

            $sum -= $discount;

            $html .= '<tr class="discount">
                          <td></td>
                          <td>Rabatt</td>
                          <td class="price">CHF <span>' . $discount . '</span></td>
                      </tr>';
        }
    }

    $html .=     '</tbody>';

    if ( $sum > 0 ) {
        $html .= '<tfoot>';

        if ( $student ) {
            $discount = $sum * 0.15;
            $discount = ceil( $discount );
            $sum -= $discount;

            $html .= '<tr class="discount">
                          <td></td>
                          <td>Studenten-Rabatt</td>
                          <td class="price">CHF <span>' . $discount . '</span></td>
                      </tr>';
        }

        $html .=     '<tr>
                          <td></td>
                          <td></td>
                          <td class="price">CHF <span>' . $sum . '</span></td>
                      </tr>
                  </tfoot>';
    }

    $html .= '</table>';

    return $html;
}

function registration() {
    $name = params( 'name' );
    $student = params( 'student' );
    $email = params( 'email' );
    $lessonID = params( 'lessonID' );

    $lessons = LessonQuery::create()
        ->joinWith( 'Lesson.Course' )
        ->filterByID( $lessonID )
        ->find();

    $clientTo = $name . ' <' . $email . '>';
    $clientFrom = config( 'site.title' ) . ' <' . config( 'site.mail' ) . '>';
    $clientSubject = 'Anmeldung bei Liltha';
    $clientMessage = '<p>Hallo ' . $name . ',</p>
                      <p>du hast dich bei Liltha für folgende Kurse angemeldet:</p>
                      ' . price_table( $lessons, $student ) . '
                      <p>Bitte beachte, dass diese E-Mail nicht als Kursbestätigung gilt. Du erhälst in den nächsten Tagen eine definitive Kursbestätigung.</p>
                      <p>Bis bald,</p>
                      <p>Claudia und Franziska</p>';

    html_mail( $clientTo, $clientFrom, $clientSubject, $clientMessage, 'Deine Anmeldung wurde erfolgreich übermittelt.', 'Bei der Anmeldung ist ein Fehler aufgetreten.' );

    $lilthaTo = config( 'site.title' ) . ' <' . config( 'site.mail' ) . '>';
    $lilthaFrom = $name . ' <' . $email . '>';
    $lilthaSubject = 'Neue Anmeldung bei Liltha';
    $lilthaMessage = '<p>' . $name . ' hat sich bei Liltha für folgende Kurse angemeldet:</p>
                     ' . price_table( $lessons, $student );

    html_mail( $lilthaTo, $lilthaFrom, $lilthaSubject, $lilthaMessage, 'Deine Anmeldung wurde erfolgreich übermittelt.', 'Bei der Anmeldung ist ein Fehler aufgetreten.' );
}

function contact() {
    $name = params( 'name' );
    $email = params( 'email' );
    $subject = params( 'subject' );
    $message = nl2br( params( 'message' ), false );

    $to = config( 'site.title' ) . ' <' . config( 'site.mail' ) . '>';
    $from = $name . ' <' . $email . '>';

    if ( $subject == '' ) {
        $subject = 'Liltha - Kontakt';
    }

    html_mail( $to, $from, $subject, $message, 'Die Nachricht wurde erfolgreich gesendet.', 'Beim Senden der Nachricht ist ein Fehler aufgetreten.' );
}

function html_mail( $to, $from, $subject, $message, $successMessage, $errorMessage ) {
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers .= 'From: ' . $from . "\r\n";

    $html = '<html>
                 <head>
                     <title>' . $subject . '</title>
                 </head>
                 <body>
                     ' . $message . '
                 </body>
             </html>';

    $success = mail( $to, $subject, $html, $headers );

    if ( $success ) {
        flash( 'success', $successMessage );
    } else {
        flash( 'error', $errorMessage );
    }
}

function not_found() {
    error( 404, render( '404', null, false ) );
}
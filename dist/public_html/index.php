<?php

// DEBUGGING
ini_set( 'display_errors', 'On' );
ini_set( 'display_startup_errors', 'On' );
ini_set( 'error_reporting', -1 );

// Composer autoloader
require '../app/vendor/autoload.php';

// Include functions
require '../app/inc/functions.php';

// Load configuration file
config( 'source', '../app/config.ini' );

// Initialize propel
require_once '../app/vendor/propel/propel1/runtime/lib/Propel.php';
Propel::init( '../app/build/conf/liltha-conf.php' );
set_include_path( '../app/build/classes' . PATH_SEPARATOR . get_include_path());



// ==========================================================================
// Front page
// ==========================================================================

on( 'GET', '', function () {
    render( 'home', array(
        'title' => config( 'site.title' ) . ' &mdash; ' . config( 'site.slogan' ),
        'isFrontPage' => true,
        'bodyClass' => 'front-page'
    ), 'front-page' );
} );



// ==========================================================================
// Courses
// ==========================================================================

// on( 'GET', 'courses', function () {
//     $courses = CourseQuery::create()
//         ->joinWith( 'Course.Lesson' )
//         ->joinWith( 'Lesson.Day' )
//         ->joinWith( 'Lesson.Place' )
//         ->orderBy( 'ID' )
//         ->find();
//
//     render( 'courses', array(
//         'title' => 'Tanzkurse bei ' . config( 'site.title' ),
//         'pageTitle' => 'Tanzkurse',
//         'pageTagline' => 'Tango für Anfänger und Studenten, Practica, Ballett für erwachsene Anfänger, Modern Dance für alle Stufen.',
//         'courses' => $courses
//     ) );
// } );

// on( 'POST', 'courses', function() {
//     registration();
//     redirect( site() . 'courses' );
// } );



// ==========================================================================
// Registration
// ==========================================================================

// on( array( 'GET', 'POST' ), 'registration', function () {
//     $lessonID = params( 'lessonID' );
//
//     if ( ! $lessonID ) {
//         flash( 'error', 'Du hast keine Lektionen zur Anmeldung ausgewählt!' );
//         redirect( site() . 'courses' );
//     } else {
//         $lessons = LessonQuery::create()
//             ->joinWith( 'Lesson.Course' )
//             ->filterByID( $lessonID )
//             ->find();
//
//         render( 'registration', array(
//             'title' => 'Anmeldung &mdash; ' . config( 'site.title' ),
//             'pageTitle' => 'Anmeldung',
//             'lessons' => $lessons
//         ) );
//     }
// } );



// ==========================================================================
// Prices
// ==========================================================================

// on( 'GET', 'prices', function () {
//     render( 'prices', array(
//         'title' => 'Preise bei ' . config( 'site.title' ),
//         'pageTitle' => 'Preise'
//     ) );
// } );



// ==========================================================================
// About
// ==========================================================================

on( 'GET', 'about', function () {
    $teachers = TeacherQuery::create()
        ->orderByID( 'desc' )
        ->find();

    render( 'about', array(
        'title' => 'About ' . config( 'site.title' ),
        'pageTitle' => 'About',
        'teachers' => $teachers
    ) );
} );



// ==========================================================================
// Contact
// ==========================================================================

// on( 'GET', 'contact', function () {
//     render( 'contact', array(
//         'title' => config( 'site.title' ) . ' &mdash; Kontakt',
//         'pageTitle' => 'Kontakt'
//     ) );
// } );
//
// on( 'POST', 'contact', function () {
//     contact();
//     redirect( site() . 'contact' );
// } );



// ==========================================================================
// Nothing found to display
// ==========================================================================

on( 'GET', '.*', function () {
    not_found();
} );

dispatch();

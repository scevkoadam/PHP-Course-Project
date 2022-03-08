<?php
/*/****************************
 * 1.0 Podaci za mail server
 *
 * Ispod upiši podatke za SMTP server.
 * Ove podatke možeš preuzeti iz cPanela,
 * ili, ukoliko ne postoji cPanel, zatražiti od hosting provajdera ili ih dobiti od klijenta.
 */

// SMTP host je uglavnom sa poddomenom mail., na primer mail.example.com
$mail_host = 'mail.eskoljkica.com';

// Može bilo koji email, ali ako imaš pristup cPanelu - lično ga napravi.
$mail_username = 'noreply@eskoljkica.com';

// Ovde upiši lozinku koja je postavljena prilikom kreiranja email-a u cPanelu.
$mail_password = 'OLv1U@5.U]EI';

// Port (Uuglavnom je 587, osim ako nije drugačije navedeno).
$mail_port = 587;

/*/****************************
 * 2.0 Email podaci
 *
 * Osnovni podaci za email
 */

// Na koju adresu treba da stigne email? (To:)
$to_email = 'eskoljkica@gmail.com';

// Naslov (Subject) za email
$subject = 'Poruka sa sajta SWD';


//////////////// KRAJ ////////////////////
/////////////////////////////////////////
include 'phpmailer/mailer.php';

<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 **/

// your Google reCAPTCHA keys here
$siteKey = '6Le6CjoUAAAAAFwrgt0yTT0qQWklid4Z1jnhhHY_';
$secret = '6Le6CjoUAAAAAOs1Aub5gm7CYh-ciTss-MW0alGL';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["mail@email.com" => "Recipient Name"];
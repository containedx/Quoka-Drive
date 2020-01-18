<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('register new user');
$I->amOnPage("/");
$I->seeInTitle("Elobox Drive");


$I->wantTo("have empty database when visiting homepage");
$I->seeNumRecords(0, "users");


$I->wantTo("see login and register links");
//$I->seeLink("Login", "/drive");
$I->see("Login");
$I->seeLink("Register", "/register");
$I->click("Register");

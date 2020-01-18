<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('register new user');

$I->amOnPage("/");

$I->click("Register");

$I->seeInCurrentUrl("/register");
$I->seeInTitle("Elobox Drive");

$I->see("Register", "button");


$name = "adrian";
$email = "ad@bla.com";
$password = "blabla123";
$password_confirmation = "blabla123";


$I->fillField("name", $name);
$I->fillField("email", $email);
$I->fillField("password", $password);
$I->fillField("password_confirmation", $password);

$I->dontSeeInDatabase("users", ["name" => "adrian", "email" => "ad@bla.com"]);

$I->click("Register");

$I->seeInDatabase("users", ["name" => "adrian", "email" => "ad@bla.com"]);

$get_email = $I->grabFromDatabase("users", "email", ["name" => "adrian"]);
$get_name = $I->grabFromDatabase("users", "name", ["email" => "ad@bla.com"]);

$assertEquals = $I->assertEquals($email, $get_email);
$I->assertEquals($name, $get_name);

$get_password = $I->grabFromDatabase("users", "password", ["name" => "adrian"]);

$I->amGoingTo("make sure that password was securely hashed");

$I->assertTrue(password_verify($password, $get_password));


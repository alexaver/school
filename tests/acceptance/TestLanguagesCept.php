<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform site languages');
$I->amOnPage('/');
$I->see('Video School');

$I->amOnPage('/en');
$I->see('Welcome!');
$I->dontSee('Добро пожаловать!');
$I->see('Русский','a');

$I->amOnPage('/ru');
$I->see('Добро пожаловать!');
$I->dontSee('Welcome!');
$I->see('English','a');

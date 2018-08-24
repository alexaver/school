<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform site languages');
$I->amOnPage('/');
$I->see('Video School');

$I->amOnPage('/en');
$I->see('Welcome!');
$I->see('Русский','a');

$I->amOnPage('/ru');
$I->see('Добро пожаловать!');
$I->see('English','a');

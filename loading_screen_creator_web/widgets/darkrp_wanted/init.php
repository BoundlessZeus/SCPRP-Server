<?php

use App\Widgets;

$widget = new App\Widget();

$widget->setName("(DarkRP) Current Wanted");

$widget->extend("Text");

Widgets::getInstance()->add($widget);
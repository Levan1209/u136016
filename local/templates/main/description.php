<?php
/**
 * Created by PhpStorm.
 * User: Лева
 * Date: 18.12.2015
 * Time: 23:58
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
$arTemplate = Array(
    "NAME" => GetMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => GetMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>

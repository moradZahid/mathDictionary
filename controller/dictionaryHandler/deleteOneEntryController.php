<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');

try
{
	include_once(dirname(__FILE__).'/deleteOneEntry.php');
}
catch(ServiceIsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}
catch(IsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from='.$service;
	header('Location:'.$url);
}
catch(UnexpectedValue $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from='.$service;
	header('Location:'.$url);
}

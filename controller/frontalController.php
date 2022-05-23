<?php
session_start();
$url = $_SESSION['index'];

if (!filter_has_var(INPUT_GET,"from"))
{
	$_SESSION['service']=NULL;
	if (isset($_SESSION['lang']) && $_SESSION['lang']=='english')
	{
		include(dirname(__FILE__,2).'/view/homeEnglishTemplate.php');
	}
	else
	{
		include(dirname(__FILE__,2).'/view/homeFrenchTemplate.php');
	}
}
else
{
	$call=filter_input(INPUT_GET,'from',FILTER_SANITIZE_SPECIAL_CHARS);
	switch ($call)
	{
	case 'translation query':

		$_SESSION['service'] = NULL;
		header('Location:'.$url.'/controller/dictionary/dictionaryController.php');
		break;


	case 'cv':

		$_SESSION['service']=NULL;
		$_SESSION['msg']=NULL;
		include(dirname(__FILE__).'/cv/cv.php');
		break;


	case 'functionalView':

		$_SESSION['service']=NULL;
		$_SESSION['msg']=NULL;
		include(dirname(__FILE__).'/functionalView/functionalView.php');
		break;


	case 'staticView':

		$_SESSION['service']=NULL;
		$_SESSION['msg']=NULL;
		include(dirname(__FILE__).'/staticView/staticView.php');
		break;

	case 'dynamicView':

		$_SESSION['service']=NULL;
		$_SESSION['msg']=NULL;
		include(dirname(__FILE__).'/dynamicView/dynamicView.php');
		break;


	case 'change lang':

		$_SESSION['service']=NULL;
		$_SESSION['msg']=NULL;
		include(dirname(__FILE__).'/changeLang/changeLangController.php');
		break;


	case 'manage entries services':

		include(dirname(__FILE__).'/authorisationSystem/authorisationSystemController.php');
		break;


	case 'add entries service':

		include(dirname(__FILE__).'/authorisationSystem/authorisationSystemController.php');
		break;


	case 'modify entries service':

		include(dirname(__FILE__).'/authorisationSystem/authorisationSystemController.php');
		break;


	case 'delete entries service':

		include(dirname(__FILE__).'/authorisationSystem/authorisationSystemController.php');
		break;


	case 'authentication interface':

		include(dirname(__FILE__).'/authorisationSystem/authenticationController.php');
		break;


	case 'authorisation system':

		header('Location:'.$url.'/controller/dictionaryHandler/dictionaryHandlerController.php');
		break;


	case 'logout':
		include(dirname(__FILE__).'/authorisationSystem/logout.php');
		break;
	

	case 'createUserAccount':
		$_SESSION['service'] = 'createUserAccount';
		header('Location:'.$url.'/controller/userAccountHandler/userAccountController.php');
		break;
	}
}

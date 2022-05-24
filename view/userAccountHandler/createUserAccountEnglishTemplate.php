<?php 
// set $url, $fonts, $img, $msg, $login, $password1, $password2, $email
include(dirname(__FILE__).'/setCreateUserAccountVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/createUserAccountHead.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Sign up</h1>
			
			<div id="main-container">
                <div id="secondary-container">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/createUserAccountFormEnglish-Template.php') ?>
                    <div id="captcha">
                        <img alt="Image of captcha" id="imgCaptcha" 
                             class="<?= $img ?>" >
                        <button>New</boutton>
                    </div>
                    <p class="error"><?= $msg ?></p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>
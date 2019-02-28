<?php

include "includes/helpers/helpers.php";

$patterns['start']['title'] = 'Users';
$patterns['focus']['title'] = 'Users';




?>

<style>

</style>


	<?=createSiteStart($patterns['start']);?>
		<?=createHeader($patterns['header']);?>
			<?=createFocus($patterns['focus']);?>

				<div class="layout layout-search">
					<div class="container">
						<section class="section section-main section-box">

							<div class="text-center assess-users empty-state-message">
								<h2>Create your first user to get started!</h2>
								<section class="section">
								<img src="./content/images/add-user.svg">
									</section>
								<div> 
									<a class="btn btn-success">Create User</a>
								</div>

							</div>

						</section>


					</div>
					<!-- /container -->
				</div>
				<!-- /layout -->




				<?=createFooter($patterns['footer']);?>
					<?=createPrototypeNav();?>
						<?=createSiteScripts();?>



							<?=createSiteEnd();?>
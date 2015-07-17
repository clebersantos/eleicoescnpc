<div class="form-step-content">
	<div class="grid__item one-whole">

		<?php if( $subscription_number ) : ?>
			<p class="textcenter">
				<?php echo nl2br( get_theme_option( 'txt_candidato_step4' ) ); ?>
			</p>
			<p id="protocol-number">
				&mdash; Inscrição Número &mdash;
				<strong id="js-protocol-number"><?php echo substr($subscription_number, 0, 8);?></strong>
			</p>
			<p class="step__advance alignleft">
				<a class="button" href="<?php print "?step=step-2"; ?>">Voltar para etapa anterior</a>
			</p>
		<?php elseif(get_theme_option('inscricoes_abertas')): ?>

			<p class="step-text step__box">
				<?php echo nl2br(get_theme_option('txt_candidato_step3')); ?>
			</p>

			<p class="step__advance alignleft">
				<a class="button" href="<?php print "?step=step-2"; ?>">Voltar para etapa anterior</a>
			</p>
			
			<p id="submit-button" class="enabled button alignright">Inscrever candidatura</p>
		<?php else: ?>
			

			<div class="form__item--inline alignright">

				<p id="submit-button" class="button">Inscrever candidatura</p>
				
			</div>
		<?php endif; ?>	

	</div>
</div>

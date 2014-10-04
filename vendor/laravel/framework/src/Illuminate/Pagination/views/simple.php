<?php
	$presenter = new Illuminate\Pagination\BootstrapPresenter($paginator);

	$trans = $environment->getTranslator();
?>

<?php if ($paginator->getLastPage() > 1): ?>
	<ul class="pager">
		<?php
			//echo $presenter->getPrevious($trans->trans('pagination.previous'));

			//echo $presenter->getNext($trans->trans('pagination.next'));

		echo $presenter->getPrevious($trans->trans('xem lại'));
		echo $presenter->getNext($trans->trans('xem thêm'));
		?>
	</ul>
<?php endif; ?>

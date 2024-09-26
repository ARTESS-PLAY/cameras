<?php
/*
Template Name: Шаблон страницы пдф
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Предварительный расчет стоимости</title>
	<link rel="stylesheet" href="styles.css">
</head>
<style>
	body {
		font-family: DejaVu Sans, sans-serif;
		margin: 0;
		padding: 0;
		background-color: #f4f4f4;
	}

	.container {
		width: 80%;
		margin: 20px auto;
		background-color: #fff;
		padding: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}

	header {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	header>h1,
	h2,
	div {
		display: inline-block;
	}

	header>h1 {
		margin-block-end: 0;
		margin-block-start: 0;
		font-size: 20px;
	}

	header>h2 {
		display: inline-block;
		margin-block-end: 0;
		margin-block-start: 0;
		font-size: 16px;
		font-weight: normal;
	}

	header>div>p {
		display: block;
		margin-block-start: 0;
		margin-block-end: 0;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
	}

	header>img {
		width: 150px;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 20px;
	}

	table,
	th,
	td {
		border: 1px solid #ddd;
	}

	th,
	td {
		padding: 10px;
		text-align: left;
	}

	th {
		background-color: #f2f2f2;
	}
</style>

<body>
	<div class="container">
		<header>
			<img src="<?php the_field('logo', 'options'); ?>" alt="Логотип">
			<h1>Автономные Системы Безопасности</h1>
			<div>

				<p>Дата: <?php echo get_the_date('j-n-Y'); ?></p>
				<p>Номер: П-13652870</p>
			</div>
			<h2>Предварительный расчет стоимости <br> установки системы видеонаблюдения</h2>
		</header>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Наименование</th>
					<th>Кол-во</th>
					<th>Ед.</th>
					<th>Цена</th>
					<th>Стоимость</th>
				</tr>
			</thead>
			<tbody>

				<?php $total_price = 0; ?>
				<?php if (have_rows('calc_blocks', 'options')): ?>
					<?php while (have_rows('calc_blocks', 'options')): the_row() ?>
						<?php
						$block_price = 0;
						$counter = 1;

						?>
						<?php if (get_sub_field('created_products')): ?>
							<?php foreach (get_sub_field('created_products') as $product): ?>
								<?php $product_id = $product['created_products_group']['product']->ID ?>
								<?php $quantity = $product['created_products_group']['quantity'] ?>
								<?php $_product = wc_get_product($product_id); ?>
								<tr>
									<td><?php echo $counter ?></td>
									<td><?php echo get_the_title($product_id) ?></td>
									<td><?php echo asb_get_product_unit($product_id) ? $quantity : '' ?></td>
									<td><?php echo asb_get_product_unit($product_id) ?></td>
									<td><?php asb_echo_price($_product) ?></td>
									<td><?php echo wc_price($_product->get_price() * $quantity) ?></td>
								</tr>
								<?php $block_price += $_product->get_price() * $quantity ?>
								<?php $counter++ ?>

							<?php endforeach ?>
							<tr>
								<td colspan="5">Всего за оборудование</td>
								<td><?php echo wc_price($block_price) ?></td>
							</tr>
						<?php endif; ?>


						<?php if (get_sub_field('not_created_products')): ?>
							<?php foreach (get_sub_field('not_created_products') as $product): ?>
								<tr>
									<td><?php echo $counter ?></td>
									<td><?php echo $product['product_title'] ?></td>
									<td><?php echo $product['product_unit'] ? $product['product_quantity'] : '' ?></td>
									<td><?php echo $product['product_unit'] ?></td>
									<td><?php echo wc_price($product['product_price']) ?></td>
									<td><?php echo wc_price($product['product_price'] * $product['product_quantity']) ?></td>
								</tr>

								<?php $block_price += $product['product_price']  * $quantity ?>

							<?php endforeach ?>
						<?php endif; ?>
						<tr>
							<td colspan="5">Всего за монтажное оборудование</td>
							<td><?php echo wc_price($block_price) ?></td>
						</tr>

					<?php endwhile ?>
				<?php endif; ?>



			</tbody>
		</table>
	</div>
</body>

</html>
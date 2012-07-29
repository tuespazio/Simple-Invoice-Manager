<? 	include('./config.php');	?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><? echo $l10n['TITLE']; ?></title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="license" href="http://www.opensource.org/licenses/mit-license/">
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script src="js/script.js"></script>
	</head>
	<body>
		<header>
			<address>
				<p>Jonathan Neal</p>
				<p>101 E. Chapman Ave<br>Orange, CA 92866</p>
				<p>(800) 555-1234</p>
			</address>
			<span><img alt="" src="logo.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>Some Company<br>c/o Some Guy</p>
			</address>
			<table class="meta">
				<tr>
					<th><span><? echo $l10n['INVOICE'] ?></span></th>
					<td><span contenteditable class="invoice_n">101138</span></td>
				</tr>
				<tr>
					<th><span><? echo $l10n['DATE'] ?></span></th>
					<td><span contenteditable class="invoice_date">January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span><? echo $l10n['AMOUNT_DUE'] ?></span></th>
					<td><span id="prefix" contenteditable><? echo $config['prefix']; ?></span><span id="total">600.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span><? echo $l10n['ITEM'] ?></span></th>
						<th><span><? echo $l10n['RATE'] ?></span></th>
						<th><span><? echo $l10n['QUANTITY'] ?></span></th>
						<th><span><? echo $l10n['PRICE'] ?></span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span contenteditable>150.00</span></td>
						<td><span contenteditable>4</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span>600.00</span></td>
					</tr>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span contenteditable></span></td>
						<td><span contenteditable>0</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span></span></td>
					</tr>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span contenteditable></span></td>
						<td><span contenteditable>0</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span></span></td>
					</tr>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span contenteditable></span></td>
						<td><span contenteditable>0</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span></span></td>
					</tr>
					<tr>
						<td><a class="cut">-</a><span contenteditable></span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span contenteditable></span></td>
						<td><span contenteditable>0</span></td>
						<td><span data-prefix><? echo $config['prefix']; ?></span><span></span></td>
					</tr>
				</tbody>
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
					<th><span><? echo $l10n['TAX'] ?></span></th>
					<td><span contenteditable id="value_tax">21</span>%</td>
				</tr>
				<tr>
					<th><span><? echo $l10n['TAXED_IMPORT'] ?></span></th>
					<td><span data-prefix><? echo $config['prefix']; ?></span><span>0.00</span></td>
				</tr>
				<tr>
					<th><span><? echo $l10n['ORIGINAL_IMPORT'] ?></span></th>
					<td><span data-prefix><? echo $config['prefix']; ?></span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span><? echo $l10n['TOTAL'] ?></span></th>
					<td><span data-prefix><? echo $config['prefix']; ?></span><span>600.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span><? echo $l10n['NOTE'] ?></span></h1>
			<div contenteditable class="invoice_note">
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
		<div class="toolbar">
			<img src="icons/childish_Floppy-Disk.png" class="save" />
		</div>
	</body>
</html>
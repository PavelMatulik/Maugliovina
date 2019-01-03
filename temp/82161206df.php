<?php
// source: index.latte

use Latte\Runtime as LR;

class Template82161206df extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<head>
    <title>Maugliho web</title>
</head>

<body background="pozadi.gif" bgcolor="black" text="#adff2f">

<h1>Mauglího "programovací" okénko</h1>
<p>
    <h3>Dnes je <?php echo LR\Filters::escapeHtmlText($numberDay) /* line 9 */ ?>.<?php echo LR\Filters::escapeHtmlText($thisMonth) /* line 9 */ ?> a je <?php
		echo LR\Filters::escapeHtmlText($today) /* line 9 */ ?> </h3>
</p>
<p><b><?php echo LR\Filters::escapeHtmlText($today) /* line 11 */ ?></b> = <?php echo LR\Filters::escapeHtmlText($greetings) /* line 11 */ ?></p>
<br>
<p>
<h3>Zkusme ten TODO fist</h3>
    <form method="post" action="#">
        <label for="imputNote">Poznámka</label>
        <input type="text" name="Note" id="imputNote">
        <input type="submit" value="Odeslat">
    </form><br>
</p>
Poznámky:
<?php
		if (isset($errorFileMsg)) {
			?><div "Poznámky:"><?php echo LR\Filters::escapeHtmlText($errorFileMsg) /* line 25 */ ?></div>
<?php
		}
?>
<div class="custom-select" style="width:200px;">
    <select>
<?php
		$iterations = 0;
		foreach ($data as $key =>$row) {
			?>            <option value=<?php echo LR\Filters::escapeHtmlAttrUnquoted($key) /* line 29 */ ?>><?php
			echo LR\Filters::escapeHtmlText($row) /* line 29 */ ?></option>
<?php
			$iterations++;
		}
?>
    </select>
</body><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['key'])) trigger_error('Variable $key overwritten in foreach on line 28');
		if (isset($this->params['row'])) trigger_error('Variable $row overwritten in foreach on line 28');
		
	}

}

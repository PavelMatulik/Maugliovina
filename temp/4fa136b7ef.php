<?php
// source: calculator.latte

use Latte\Runtime as LR;

class Template4fa136b7ef extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<head>
    <title>Maugliho web</title>
</head>

<body>

<h1>Mauglího "kalkulovací" okénko</h1>


<p>
<h3>Výpočet obsahu obdelníku</h3>
    <form method="post" action="#">
        <label for="inputWidth">Šířka(v cm)</label>
        <input type="number" step=0.01 min="0" name="rectangleWidth" id="inputWidth">
        <label for="inputLength">Délka(v cm)</label>
        <input type="number" step=0.01 min="0" name="rectangleLength" id="inputLength">
        <input type="submit" value="Odeslat"><br>
    </form>
    Zadané parametry obdelníku: Šířka: <b><?php echo LR\Filters::escapeHtmlText($rectangleWidth) /* line 19 */ ?></b> Délka: <b><?php
		echo LR\Filters::escapeHtmlText($rectangleLength) /* line 19 */ ?></b> <br>
    Obsah obdelníku je: <b><?php echo LR\Filters::escapeHtmlText($rectangleResult) /* line 20 */ ?> cm2</b><br><br>

</p>
<p>
<h3>Výpočet obsahu čtverce</h3>
    <form method="post" action="#">
        <label for="inputSquareWidth">Šířka(v cm)</label>
        <input type="number" step=0.01 min="0" name="squareWidth" id="inputSquareWidth">
        <input type="submit" value="Odeslat"><br>
    </form>
    Obsah čtverce je: <b><?php echo LR\Filters::escapeHtmlText($squareResult) /* line 30 */ ?> cm2</b><br><br>
        </p>

</p>
<p>
<h3>Výpočet obsahu kružnice</h3>
<form method="post" action="#">
    <label for="inputRingRadius">Poloměr kružnice(v cm)</label>
    <input type="number" step=0.01 min="0" name="ringRadius" id="inputRingRadius">
    <input type="submit" value="Odeslat"><br>
</form>
Obsah kruhu je: <b><?php echo LR\Filters::escapeHtmlText($ringResult) /* line 41 */ ?> cm2</b><br><br>
</p>


        <ol>
</ol>

</body><?php
		return get_defined_vars();
	}

}

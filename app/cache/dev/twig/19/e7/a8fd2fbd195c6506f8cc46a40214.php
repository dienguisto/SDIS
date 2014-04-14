<?php

/* ProyectoPrincipalBundle:Principal:historia.html.twig */
class __TwigTemplate_19e7a8fd2fbd195c6506f8cc46a40214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:base.html.twig");

        $this->blocks = array(
            'info' => array($this, 'block_info'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoPrincipalBundle:Helpers:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_info($context, array $blocks = array())
    {
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:info.html.twig")->display(array_merge($context, array("info" => $this->getContext($context, "info"))));
    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header widget-header-flat\">
\t\t\t\t<h4>&Iacute;ndice de Saturación de Langelier (LSI)</h4>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEl índice de Saturación de Langelier (LSI) es un modelo de equilibrio derivado del concepto teórico de saturación y proporciona un indicador  del grado de saturación del agua con respecto al carbonato de calcio. Fué desarrollado por el ingeniero químico Wilfred F. Langelier, (nacido en 1886 en Nashua, New Hampshire, Estados Unidos y falleció en Berkeley, California, Estados Unidos, el 13 de septiembre de 1981) en el año 1936. Se puede mostrar que el Índice de Saturación de Langelier (LSI) se aproxima al logaritmo en base 10 del nivel de saturación de calcita. El nivel de saturación de Langelier usa el concepto de saturación basado en el pH como variable principal. El LSI puede ser interpretado como el cambio requerido para llevar el agua a equilibrio.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAgua con Índice de Saturación de Langelier (LSI) de 1.0 es una unidad por encima de la saturación. Reduciendo el pH por 1 unidad llevará el agua a equilibrio. Esto ocurre porque la porción de alcalinidad total presente como CO<sub>3</sub><sup>2-</sup> disminuye con el ph, de acuerdo a las reacciones de equilibrio que describen la disociación del ácido carbónico:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p><img  src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/langelier.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSi el LSI es negativo: no hay potencial de incrustaciones, el agua disolver&aacute; CaCO<sub>3</sub>.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSi el LSI es positivo: se pueden formar incrustaciones y puede ocurrir precipitación de CaCO<sub>3</sub>.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSi LSI es cercano a cero: l&iacute;nea L&iacute;mite Potencial de Incrustación. Cambio en la Calidad del agua o la temperatura, o evaporaci&oacute;n pueden cambiar este &iacute;ndice.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEl LSI es probablemente el indicador m&aacute;s usado de potencial de incrustaci&oacute;n de agua de enfriamiento. Es puramente un &iacute;ndice de  equilibrio y trata solamente con la fuerza impulsora termodin&aacute;mica para la formaci&oacute;n y crecimiento de incrustaciones de carbonato de calcio.  No proporciona indicación alguna de cuanta incrustaci&oacute;n o carbonato de calcio precipitar&aacute; para llevar el agua a un equilibrio.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSi LSI es cercano a cero: l&iacute;nea L&iacute;mite Potencial de Incrustaci&oacute;n. Cambio en la Calidad del agua o la temperatura, o evaporaci&oacute;n pueden cambiar este &iacute;ndice.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEl LSI es probablemente el indicador m&aacute;s usado de potencial de incrustaci&oacute;n de agua de enfriamiento. Es puramente un &iacute;ndice de  equilibrio y trata solamente con la fuerza impulsora termodin&aacute;mica para la formaci&oacute;n y crecimiento de incrustaciones de carbonato de calcio.  No proporciona indicación alguna de cuanta incrustaci&oacute;n o carbonato de calcio precipitar&acute; para llevar el agua a un equilibrio.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tSimplemente indica la fuerza impulsora para la formaci&oacute;n de incrustaciones y crecimiento, en t&eacute;rminos del pH como la variable maestra. A fin de calcular el LSI, es necesario conocer la alcalinidad  (mg/l as CaCO<sub>3</sub>), la dureza cálcica  (mg/l Ca<sup>2+</sup> as CaCO<sub>3</sub>), los sólidos  totales disueltos (mg/l STD), el pH actual, y la temperatura del agua (oC).
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEl LSI se define así: LSI = pH – pH<sub>s</sub>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH es el valor medido del pH del Agua
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH<sub>s</sub> es el pH a saturación en calcita o carbonato de calcio definido como:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH<sub>s</sub> = (9.3 + A + B) – (C + D)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log<sub>10</sub> [STD] – 1) / 10
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log<sub>10</sub> (oC + 273) + 34.55
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log<sub>10</sub> [Ca<sup>2+</sup> como CaCO<sub>3</sub>] – 0.4
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log<sub>10</sub> [alcalinidad como CaCO<sub>3</sub>]
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEjemplo de Cálculo del Índice de Saturación de Langelier
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAnálisis de Agua:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH = 7.5
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTDS = 320 mg/L
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalcio = 150 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAlcalinidad = 34 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFórmula LSI:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLSI = pH – pHs
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + A + B) – (C + D)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log10 [TDS] – 1)/10 = 0.15
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log10 (oC + 273) + 34.55 = 2.09 a 25°C y 1.09
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log10 [Ca2+ como CaCO3] – 0.4 = 1.78
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log10 [alcalinidad como CaCO3] = 1.53
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalculo a 25oC:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + 0.15 + 2.09) – (1.78 + 1.53) = 8.2
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tLSI = 7.5 – 8.2 = – 0.7
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPor lo tanto no hay tendencia a la formación de incrustaciones pero el agua produce corrosión severa.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<table id=\"sample-table-1\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Índice de saturación de Langelier (LSI)</th>
\t\t\t\t\t\t\t\t\t\t<th>Indicación</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td width=\"50%\">-2,0 <LSI< -0,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Corrosión severa </td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>-0,5 <LSI< 0</td>
\t\t\t\t\t\t\t\t\t\t<td>Corrosión leve pero sin formación de incrustaciones</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>LSI= 0,0</td>
\t\t\t\t\t\t\t\t\t\t<td>Equilibrada pero posible corrosión leve</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>0,0 <LSI< 0,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Formación leve de incrustaciones y corrosiva</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>0,5 <LSI< 2</td>
\t\t\t\t\t\t\t\t\t\t<td>Formación de incrustaciones pero no corrosiva</td>
\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header widget-header-flat\">
\t\t\t\t<h4>&Iacute;ndice de Estabilidad de Ryznar (RSI)</h4>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFue desarrollado por J. W. Ryznar en 1944. El Índice de Estabilidad de Ryznar (RSI) es una modificación al Índice de Saturación de Langelier (LSI) para proporcionar una mejor indicación  en la tendencia a la formación de incrustaciones de carbonato de calcio. Ryznar detectó que aguas de baja dureza y alta dureza pudieran tener (LSI) similares. Por ello, modificó la formula a la siguiente expresión:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tRSI = 2(pHs) – pH
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t      Donde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH es el valor medido del pH del Agua
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs es el pH a saturación en calcita o carbonato de calcio definido como:  
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + A + B) – (C + D)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t      Donde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log10 [STD] – 1) / 10
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log10 (oC + 273) + 34.55
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log10 [Ca2+ como CaCO3] – 0.4
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log10 [alcalinidad como CaCO3]
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEjemplo de Cálculo del Índice de Saturación de Ryznar
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAnálisis de Agua:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpH = 7.5
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTDS = 320 mg/L
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalcio = 150 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAlcalinidad = 34 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFórmula RSI:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tRSI = 2(pHs) – pH
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + A + B) – (C + D) donde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log10 [TDS] – 1)/10 = 0.15
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log10 (oC + 273) + 34.55 = 2.09 a 25°C 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log10 [Ca2+ como CaCO3] – 0.4 = 1.78
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log10 [alcalinidad como CaCO3] = 1.53\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalculo a 25oC:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + 0.15 + 2.09) – (1.78 + 1.53) = 8.2
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tRSI = 2(8.2) –7.5= 8.9
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPor lo tanto hay tendencia a que el agua sea altamente corrosiva.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<table id=\"sample-table-1\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Índice de saturación de Ryznar (RSI)</th>
\t\t\t\t\t\t\t\t\t\t<th>Indicación</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td width=\"50%\">4 < RSI≤ 5</td>
\t\t\t\t\t\t\t\t\t\t<td>Muy incrustante</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>5 < RSI ≤ 6</td>
\t\t\t\t\t\t\t\t\t\t<td>Débilmente incrustante</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>6 < RSI ≤ 7</td>
\t\t\t\t\t\t\t\t\t\t<td>En equilibrio</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>7 < RSI ≤ 7,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Corrosiva</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>7,5 < RSI ≤ 9</td>
\t\t\t\t\t\t\t\t\t\t<td>Fuertemente corrosiva</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td> 9 < RSI</td>
\t\t\t\t\t\t\t\t\t\t<td>Muy fuertemente corrosiva</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header widget-header-flat\">
\t\t\t\t<h4>&Iacute;ndice de saturación de Puckorius (PSI)</h4>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFué desarrollado por el ingeniero químico Paul R. Puckorius nacido en Chicago, Estados Unidos, el 7 de abril de 1950 a mediados de 1980. El Índice Práctico de Incrustación, desarrollado por Puckorius, es similar al de Ryznar, salvo que utiliza un valor calculado de pH del agua en lugar del pH medido en el circuito.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDonde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHEQ = pH de equilibrio
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs es el pH a saturación en calcita o carbonato de calcio definido como:  
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + A + B) – (C + D)
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t      Donde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHEQ = 1,465 x Log [Alcalinidad] + 4,54\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log10 [STD] – 1) / 10
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log10 (oC + 273) + 34.55
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log10 [Ca2+ como CaCO3] – 0.4
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log10 [alcalinidad como CaCO3]
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tEjemplo de Cálculo del Índice de Saturación de Puckorius
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAnálisis de Agua:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tTDS = 320 mg/L
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalcio = 150 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tAlcalinidad = 34 mg/L (o ppm) como CaCO3
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tFórmula RSI:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPSI = 2(pHs) – pHEQ 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + A + B) – (C + D) donde:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tA = (Log10 [TDS] – 1)/10 = 0.15
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tB = -13.12 x Log10 (oC + 273) + 34.55 = 2.09 a 25°C 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tC = Log10 [Ca2+ como CaCO3] – 0.4 = 1.78
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tD = Log10 [alcalinidad como CaCO3] = 1.53
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHEQ = 1,465 x Log [alcalinidad] + 4,54= 6.78
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCalculo a 25oC:
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tpHs = (9.3 + 0.15 + 2.09) – (1.78 + 1.53) = 8.2
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPSI = 2(8.2) –6.8 = 9.6
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tPor lo tanto hay tendencia a la corrosión.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<table id=\"sample-table-1\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Índice de saturación de Puckorius (PSI)</th>
\t\t\t\t\t\t\t\t\t\t<th>Indicación</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td width=\"50%\">PSI < 4,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Tendencia a la incrustación</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>4,5 < PSI < 6,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Rango óptimo (No hay corrosión)</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>PSI > 6,5</td>
\t\t\t\t\t\t\t\t\t\t<td>Tendencia a la corrosión</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:historia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  38 => 5,  35 => 4,  29 => 2,);
    }
}

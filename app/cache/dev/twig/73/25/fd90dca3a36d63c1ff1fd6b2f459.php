<?php

/* ProyectoPrincipalBundle:Helpers:info.html.twig */
class __TwigTemplate_7325fd90dca3a36d63c1ff1fd6b2f459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row-fluid\" id=\"mensajeajax\" style=\"display: block\">
\t<div class=\"span12\"  style=\"display: block\">
\t\t<div class=\"alert alert-info\" id=\"mensajeajax-inicial\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
\t\t\t\t<i class=\"icon-remove\"></i>
\t\t\t</button>
\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "info"), "html", null, true);
        echo "
\t\t\t<br>
\t\t</div>
\t\t<div class=\"alert alert-error\" id=\"mensajeajax-negativo\" style=\"display: none\"></div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  135 => 37,  129 => 34,  123 => 31,  116 => 30,  113 => 29,  107 => 26,  101 => 25,  96 => 23,  89 => 22,  87 => 21,  78 => 18,  72 => 15,  61 => 12,  55 => 11,  28 => 3,  83 => 25,  75 => 22,  70 => 19,  60 => 15,  56 => 14,  51 => 11,  44 => 8,  25 => 4,  21 => 2,  19 => 1,  552 => 194,  549 => 193,  545 => 117,  542 => 116,  538 => 114,  535 => 113,  531 => 111,  528 => 110,  327 => 195,  325 => 193,  321 => 192,  317 => 191,  312 => 189,  308 => 188,  302 => 185,  294 => 180,  290 => 179,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  249 => 165,  241 => 160,  236 => 158,  228 => 153,  218 => 146,  188 => 118,  186 => 116,  183 => 115,  181 => 113,  178 => 112,  176 => 110,  165 => 102,  145 => 85,  136 => 79,  121 => 66,  119 => 65,  92 => 40,  90 => 29,  71 => 26,  67 => 25,  53 => 17,  47 => 10,  43 => 13,  39 => 6,  29 => 5,  23 => 1,  81 => 32,  77 => 29,  66 => 14,  63 => 24,  50 => 9,  48 => 9,  45 => 8,  41 => 6,  36 => 8,  33 => 5,  30 => 2,);
    }
}

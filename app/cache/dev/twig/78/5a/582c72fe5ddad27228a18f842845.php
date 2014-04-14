<?php

/* ProyectoPrincipalBundle:Helpers:contenedor-barra-derecha.html.twig */
class __TwigTemplate_785a582c72fe5ddad27228a18f842845 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_homepage"), "html", null, true);
        echo "\" class=\"brand\"> <small> <i class=\"icon-leaf\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "parameters"), "nombre"), "html", null, true);
        echo " </small> </a><!--/.brand-->
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:contenedor-barra-derecha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,  552 => 194,  549 => 193,  545 => 117,  542 => 116,  538 => 114,  535 => 113,  531 => 111,  528 => 110,  327 => 195,  325 => 193,  321 => 192,  317 => 191,  312 => 189,  308 => 188,  302 => 185,  294 => 180,  290 => 179,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  249 => 165,  241 => 160,  236 => 158,  228 => 153,  218 => 146,  188 => 118,  186 => 116,  183 => 115,  181 => 113,  178 => 112,  176 => 110,  165 => 102,  145 => 85,  136 => 79,  121 => 66,  119 => 65,  92 => 40,  90 => 39,  71 => 26,  67 => 25,  53 => 17,  47 => 14,  43 => 13,  39 => 12,  29 => 5,  23 => 1,  81 => 32,  77 => 29,  66 => 22,  63 => 24,  50 => 10,  48 => 9,  45 => 8,  41 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}

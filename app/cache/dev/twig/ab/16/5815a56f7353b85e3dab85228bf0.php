<?php

/* ProyectoPrincipalBundle:Helpers:estadisticas.html.twig */
class __TwigTemplate_ab165815a56f7353b85e3dab85228bf0 extends Twig_Template
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
        echo "<div class=\"span6 infobox-container\">
\t\t<div class=\"infobox infobox-green  \">
\t\t\t<div class=\"infobox-icon\">
\t\t\t\t<i class=\"icon-briefcase\"></i>
\t\t\t</div>
\t\t\t<div class=\"infobox-data\">
\t\t\t\t<span class=\"infobox-data-number\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "estudios"), "html", null, true);
        echo "</span>
\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\tEstudios realizados
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"infobox infobox-pink  \">
\t\t\t<div class=\"infobox-icon\">
\t\t\t\t<i class=\"icon-lock\"></i>
\t\t\t</div>
\t\t\t<div class=\"infobox-data\">
\t\t\t\t<span class=\"infobox-data-number\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "usuarios"), "html", null, true);
        echo "</span>
\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\tUsuarios registrados 
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t<!--
\t\t<div class=\"infobox infobox-blue  \">
\t\t\t<div class=\"infobox-icon\">
\t\t\t\t<i class=\"icon-bar-chart\"></i>
\t\t\t</div>
\t\t\t<div class=\"infobox-data\">
\t\t\t\t<span class=\"infobox-data-number\">2</span>
\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\tGraficos generados
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"infobox infobox-red  \">
\t\t\t<div class=\"infobox-icon\">
\t\t\t\t<i class=\"icon-beaker\"></i>
\t\t\t</div>
\t\t\t<div class=\"infobox-data\">
\t\t\t\t<span class=\"infobox-data-number\">4</span>
\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\tdatos
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t-->
\t</div>";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:estadisticas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 18,  27 => 7,  19 => 1,  64 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 5,  35 => 4,  29 => 2,);
    }
}

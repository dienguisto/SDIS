<?php

/* ProyectoPrincipalBundle:Helpers:contenedor-barra-izquierda.html.twig */
class __TwigTemplate_12e7d8860bd31fe448abe98eab90740b extends Twig_Template
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
        if ((!(null === $this->getContext($context, "user")))) {
            // line 2
            echo "<ul class=\"nav ace-nav pull-right\">
\t<!--<li class=\"purple\">
\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> <i class=\"icon-bell-alt ";
            // line 4
            if (((twig_length_filter($this->env, $this->getContext($context, "notifications")) >= 1) && ($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Panel de Control"))) {
                echo "icon-animated-bell";
            }
            echo "\"></i> <span class=\"badge badge-important\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "notifications")), "html", null, true);
            echo "</span> </a>
\t\t<ul class=\"pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer\">
\t\t\t<li class=\"nav-header\">
\t\t\t\t<i class=\"icon-warning-sign\"></i>
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "notifications")), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "notifications")) == 1)) {
                echo "Notificaci&oacute;n";
            } else {
                echo "Notificaciones";
            }
            // line 9
            echo "\t\t\t</li>
\t\t\t";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notifications"));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 11
                echo "\t\t\t<li>
\t\t\t\t<a href=\"#\">
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t<span class=\"pull-left\"> <i class=\"btn btn-mini no-hover btn-pink icon-comment\"></i> ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "notification"), "texto"), "html", null, true);
                echo "</span>
\t\t\t\t\t<span class=\"pull-right badge badge-info\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "notification"), "numero"), "html", null, true);
                echo "</span>
\t\t\t\t</div> </a>
\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</ul>
\t</li>-->
\t<li class=\"light-blue\">
\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\"> <img class=\"nav-user-photo\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute($this->getContext($context, "user"), "path")) . "")), "html", null, true);
            echo "\" alt=\"\" /> <span class=\"user-info\"> <small>Bienvenido,</small> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo " </span> <i class=\"icon-caret-down\"></i> </a>
\t\t<ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer\">
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_perfil"), "html", null, true);
            echo "\"> <i class=\"icon-user\"></i> Perfil </a>
\t\t\t</li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cerrarsesion"), "html", null, true);
            echo "\"> <i class=\"icon-off\"></i> Cerrar sesi&oacute;n </a>
\t\t\t</li>
\t\t</ul>
\t</li>
</ul><!--/.ace-nav-->
";
        }
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:contenedor-barra-izquierda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  75 => 22,  70 => 19,  60 => 15,  56 => 14,  51 => 11,  44 => 9,  25 => 4,  21 => 2,  19 => 1,  552 => 194,  549 => 193,  545 => 117,  542 => 116,  538 => 114,  535 => 113,  531 => 111,  528 => 110,  327 => 195,  325 => 193,  321 => 192,  317 => 191,  312 => 189,  308 => 188,  302 => 185,  294 => 180,  290 => 179,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  249 => 165,  241 => 160,  236 => 158,  228 => 153,  218 => 146,  188 => 118,  186 => 116,  183 => 115,  181 => 113,  178 => 112,  176 => 110,  165 => 102,  145 => 85,  136 => 79,  121 => 66,  119 => 65,  92 => 40,  90 => 29,  71 => 26,  67 => 25,  53 => 17,  47 => 10,  43 => 13,  39 => 12,  29 => 5,  23 => 1,  81 => 32,  77 => 29,  66 => 22,  63 => 24,  50 => 10,  48 => 9,  45 => 8,  41 => 6,  36 => 8,  33 => 3,  30 => 2,);
    }
}

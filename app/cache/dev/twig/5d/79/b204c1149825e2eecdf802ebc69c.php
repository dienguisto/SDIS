<?php

/* ProyectoPrincipalBundle:Helpers:listaNavegacion.html.twig */
class __TwigTemplate_5d79b204c1149825e2eecdf802ebc69c extends Twig_Template
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
            echo "<li ";
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Panel de Control")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_homepage"), "html", null, true);
            echo "\"> <i class=\"icon-dashboard\"></i> <span class=\"menu-text\"> Panel de Control </span> </a>
</li>
<li ";
            // line 5
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Nuevo")) {
                echo "class=\"active\"";
            }
            echo " >
\t<a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_nuevo"), "html", null, true);
            echo "\"> <i class=\"icon-cog\"></i> <span class=\"menu-text\"> Nuevo </span> </a>
</li>
<li ";
            // line 8
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Listado")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_listado"), "html", null, true);
            echo "\"> <i class=\"icon-book\"></i> <span class=\"menu-text\"> Listado </span> </a>
</li>
<li ";
            // line 11
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Historia")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_historia"), "html", null, true);
            echo "\"> <i class=\"icon-book\"></i> <span class=\"menu-text\"> Historia </span> </a>
</li>
<li ";
            // line 14
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Acerca")) {
                echo "class=\"active\"";
            }
            echo ">
\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_acerca"), "html", null, true);
            echo "\"> <i class=\"icon-book\"></i> <span class=\"menu-text\"> Acerca de... </span> </a>
</li>
";
        }
        // line 18
        echo "<li ";
        if (((($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Acceso") || ($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Registro")) || ($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Mi Perfil"))) {
            echo "class=\"active open\"";
        }
        echo ">
\t<a href=\"#\" > <i class=\"icon-lock\"></i> <span class=\"menu-text\"> Usuarios </span> <b class=\"arrow icon-angle-down\"></b> </a>
\t<ul class=\"submenu\" style=\"display: block;\">
\t\t";
        // line 21
        if ((null === $this->getContext($context, "user"))) {
            // line 22
            echo "\t\t<li ";
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Acceso")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_acceso"), "html", null, true);
            echo "\"> <i class=\"icon-double-angle-right\"></i> Acceso </a>
\t\t</li>
\t\t<li ";
            // line 25
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Registro")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_registro"), "html", null, true);
            echo "\"> <i class=\"icon-double-angle-right\"></i> Registro </a>
\t\t</li>
\t\t";
        }
        // line 29
        echo "\t\t";
        if ((!(null === $this->getContext($context, "user")))) {
            // line 30
            echo "\t\t<li ";
            if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Mi Perfil")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_perfil"), "html", null, true);
            echo "\"> <i class=\"icon-double-angle-right\"></i> Perfil </a>
\t\t</li>
\t\t<li >
\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cerrarsesion"), "html", null, true);
            echo "\"> <i class=\"icon-double-angle-right\"></i> Cerrar sesi&oacute;n </a>
\t\t</li>
\t\t";
        }
        // line 37
        echo "\t</ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:listaNavegacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  129 => 34,  123 => 31,  116 => 30,  113 => 29,  107 => 26,  101 => 25,  96 => 23,  89 => 22,  87 => 21,  78 => 18,  72 => 15,  61 => 12,  55 => 11,  28 => 3,  83 => 25,  75 => 22,  70 => 19,  60 => 15,  56 => 14,  51 => 11,  44 => 8,  25 => 4,  21 => 2,  19 => 1,  552 => 194,  549 => 193,  545 => 117,  542 => 116,  538 => 114,  535 => 113,  531 => 111,  528 => 110,  327 => 195,  325 => 193,  321 => 192,  317 => 191,  312 => 189,  308 => 188,  302 => 185,  294 => 180,  290 => 179,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  249 => 165,  241 => 160,  236 => 158,  228 => 153,  218 => 146,  188 => 118,  186 => 116,  183 => 115,  181 => 113,  178 => 112,  176 => 110,  165 => 102,  145 => 85,  136 => 79,  121 => 66,  119 => 65,  92 => 40,  90 => 29,  71 => 26,  67 => 25,  53 => 17,  47 => 10,  43 => 13,  39 => 6,  29 => 5,  23 => 1,  81 => 32,  77 => 29,  66 => 14,  63 => 24,  50 => 9,  48 => 9,  45 => 8,  41 => 6,  36 => 8,  33 => 5,  30 => 2,);
    }
}

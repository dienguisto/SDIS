<?php

/* ProyectoPrincipalBundle:Principal:index.html.twig */
class __TwigTemplate_34c5923b4d8d80bb5468d578d8eb3a8d extends Twig_Template
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
\t<div class=\"span6 infobox-container\">
\t\t<p>
\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_nuevo"), "html", null, true);
        echo "\" class=\"btn btn-app radius-4\"> <i class=\"icon-cog bigger-230\"></i> Nuevo </a>
\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_listado"), "html", null, true);
        echo "\" class=\"btn btn-app btn-primary\"> <i class=\"icon-book bigger-230\"></i> Listado </a>
\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_historia"), "html", null, true);
        echo "\" class=\"btn btn-app btn-success\"> <i class=\"icon-book bigger-200\"></i></i> Historia </a>
\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_acerca"), "html", null, true);
        echo "\"  class=\"btn btn-app btn-warning\"><i class=\"icon-book bigger-230\"></i>Acerca de...</a>
\t\t</p>
\t</div>
\t
\t";
        // line 15
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ProyectoPrincipalBundle:Helpers:stats"), array());
        // line 16
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 5,  35 => 4,  29 => 2,);
    }
}

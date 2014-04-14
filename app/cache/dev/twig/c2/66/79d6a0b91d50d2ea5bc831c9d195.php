<?php

/* ProyectoPrincipalBundle:Principal:acerca.html.twig */
class __TwigTemplate_c26679d6a0b91d50d2ea5bc831c9d195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:base.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid\">
\t<div class=\"span6\">
\t\t<div class=\"well well-large\">
\t\t\t<h4 class=\"blue\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "info"), "html", null, true);
        echo "</h4>
\t\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "parameters"), "descripcionlarga"), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "parameters"), "acercade"), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
\t<div class=\"span6\">
\t\t<div class=\"widget-box \">
\t\t\t<div class=\"widget-header\">
\t\t\t\t<h4 class=\"lighter smaller\"><i class=\"icon-comment blue\"></i> Autores </h4>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main no-padding\">
\t\t\t\t\t<div class=\"slimScrollDiv\" style=\"position: relative; overflow: hidden; width: auto; \">
\t\t\t\t\t\t<div class=\"dialogs\" style=\"overflow: hidden; width: auto; \">
\t\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "autors"));
        foreach ($context['_seq'] as $context["_key"] => $context["autor"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/avatar-man.png"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 28
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "autor"), "nombre")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "autor"), "apellido")), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t";
            // line 31
            echo $this->getAttribute($this->getContext($context, "autor"), "descripcion");
            // line 32
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><div class=\"slimScrollBar ui-draggable\" style=\"background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 227.3357142857143px; background-position: initial initial; background-repeat: initial initial;\"></div><div class=\"slimScrollRail\" style=\"width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<form>
\t\t\t\t\t\t<div class=\"form-actions input-append\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div><!--/widget-main-->
\t\t\t</div><!--/widget-body-->
\t\t</div><!--/widget-box-->
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:acerca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 36,  84 => 32,  82 => 31,  74 => 28,  67 => 24,  63 => 22,  59 => 21,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}

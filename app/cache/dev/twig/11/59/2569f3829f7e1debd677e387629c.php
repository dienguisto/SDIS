<?php

/* ProyectoPrincipalBundle:Users:acceso.html.twig */
class __TwigTemplate_11592569f3829f7e1debd677e387629c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:base.html.twig");

        $this->blocks = array(
            'info' => array($this, 'block_info'),
            'error' => array($this, 'block_error'),
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
        // line 3
        echo "<div style=\"display: none\">
\t<p style=\"text-align: center\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/incrustacion.jpg"), "html", null, true);
        echo "\" width=\"300\"/></p>
</div>
";
        // line 6
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:info.html.twig")->display(array_merge($context, array("info" => $this->getContext($context, "info"))));
    }

    // line 8
    public function block_error($context, array $blocks = array())
    {
        // line 9
        if ($this->getContext($context, "error")) {
            // line 10
            echo "<div class=\"alert alert-error\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
\t\t<i class=\"icon-remove\"></i>
\t</button>
\t<strong> <i class=\"icon-remove\"></i> Error </strong>
\tNo puede acceder al sistema, intente m&aacute;s tarde, o comun&iacute;quese con el administrador del sistema.
\t<br>
</div>
";
        }
    }

    // line 21
    public function block_contenido($context, array $blocks = array())
    {
        // line 22
        echo "
<div class=\"row-fluid\">
\t<div class=\"widget-box\">
\t\t<div class=\"widget-header\">
\t\t\t<h4>Formulario de acceso</h4>
\t\t</div>
\t\t<div class=\"widget-body\">
\t\t\t
\t\t\t<div class=\"widget-main\">
\t\t\t\t<form class=\"form-inline\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t<input type=\"text\" class=\"span4\" placeholder=\"Usuario\" name=\"_username\"  value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "ultimo_nombreusuario"), "html", null, true);
        echo "\">
\t\t\t\t\t<input type=\"password\" class=\"span4\" placeholder=\"Password\" name=\"_password\"  >
\t\t\t\t\t<label class=\"checkbox\" >
\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t<span class=\"lbl\"> Recordar mis datos</span> </label>
\t\t\t\t\t<button onclick=\"\" class=\"btn btn-info btn-small\" type=\"submit\">
\t\t\t\t\t\t<i class=\"icon-key bigger-110\"></i>
\t\t\t\t\t\tIniciar sesi&oacute;n
\t\t\t\t\t</button>
\t\t\t\t\t<!--<input type=\"submit\" class=\"btn btn-info btn-small\" value=\"Iniciar sesi&oacute;n\">-->
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Users:acceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  77 => 31,  66 => 22,  63 => 21,  50 => 10,  48 => 9,  45 => 8,  41 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}

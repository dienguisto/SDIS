<?php

/* ProyectoPrincipalBundle:Principal:ingreso.html.twig */
class __TwigTemplate_6b8b415cc901ce27ef1cf1ef2720650a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:base.html.twig");

        $this->blocks = array(
            'info' => array($this, 'block_info'),
            'scripts' => array($this, 'block_scripts'),
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

    // line 3
    public function block_scripts($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
\tvar procesaObjeto = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_procesa_objeto"), "html", null, true);
        echo "';
\tvar verProyecto = '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_ver_objeto"), "html", null, true);
        echo "';
</script>
";
    }

    // line 10
    public function block_contenido($context, array $blocks = array())
    {
        // line 11
        echo "<input type=\"hidden\" id=\"tipo\" value=\"";
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Nuevo")) {
            echo "0";
        } else {
            echo "1";
        }
        echo "\">
";
        // line 12
        if ((!(null === $this->getContext($context, "object")))) {
            // line 13
            echo "<input type=\"hidden\" id=\"id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
            echo "\">
";
        }
        // line 15
        echo "
<div class=\"row-fluid procesando-ocultar\">
\t<div class=\"span6 \">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header\">
\t\t\t\t<h4>Nuevo Proyecto</h4>
\t\t\t\t<span class=\"widget-toolbar\"> <a href=\"#\" data-action=\"collapse\"> <i class=\"icon-chevron-up\"></i> </a> <a href=\"#\" data-action=\"close\"> <i class=\"icon-remove\"></i> </a> </span>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">Nombre del estudio</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Nombre del estudio\" class=\"span12\" id=\"nombre\" ";
        // line 28
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "nombre"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<label class=\"control-label\">Seleccione los metodos a estudiar:</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input name=\"form-field-checkbox\" class=\"indices\" type=\"checkbox\" id=\"langelier\" ";
        // line 35
        if ((!(null === $this->getContext($context, "object")))) {
            if (($this->getAttribute($this->getContext($context, "object"), "langelier") == 1)) {
                echo "checked=\"\"";
            }
        }
        echo ">
\t\t\t\t\t\t\t\t<span class=\"lbl\"> Índice de estabilidad de Langelier</span> </label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input name=\"form-field-checkbox\" class=\"indices\" type=\"checkbox\" id=\"rysnar\" ";
        // line 38
        if ((!(null === $this->getContext($context, "object")))) {
            if (($this->getAttribute($this->getContext($context, "object"), "rysnar") == 1)) {
                echo "checked=\"\"";
            }
        }
        echo ">
\t\t\t\t\t\t\t\t<span class=\"lbl\"> Índice de estabilidad de Ryznar</span> </label>
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input name=\"form-field-checkbox\" class=\"indices\" type=\"checkbox\" id=\"puckoris\" ";
        // line 41
        if ((!(null === $this->getContext($context, "object")))) {
            if (($this->getAttribute($this->getContext($context, "object"), "puckorius") == 1)) {
                echo "checked=\"\"";
            }
        }
        echo ">
\t\t\t\t\t\t\t\t<span class=\"lbl\"> Índice de Puckorius</span> </label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<label for=\"form-field-9\">Información adicional...</label>
\t\t\t\t\t\t<textarea class=\"span12 limited textarea\" data-maxlength=\"50\" maxlength=\"50\" id=\"informacion\">";
        // line 47
        if ((!(null === $this->getContext($context, "object")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "informacion"), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t<label class=\"control-label\">Guardado automatico</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input name=\"switch-field-1\" class=\"ace-switch\" type=\"checkbox\" id=\"autoguardado\" ";
        // line 55
        if ((!(null === $this->getContext($context, "object")))) {
            if (($this->getAttribute($this->getContext($context, "object"), "autoguardado") == 1)) {
                echo "checked=\"checked\"";
            }
        } else {
            echo "checked=\"checked\"";
        }
        echo " >
\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"></span> </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"span6  \">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header\">
\t\t\t\t<h4>Parametros iniciales</h4>
\t\t\t\t<span class=\"widget-toolbar\"> <a href=\"#\" data-action=\"collapse\"> <i class=\"icon-chevron-up\"></i> </a> <a href=\"#\" data-action=\"close\"> <i class=\"icon-remove\"></i> </a> </span>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">pH</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"ph\" placeholder=\"pH\" class=\"span12 numero\" ";
        // line 76
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "ph"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">TDS (ppm)</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"tds\" placeholder=\"TDS (ppm)\" class=\"span12 numero\"  ";
        // line 82
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "tds"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">T (°c)</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"t\" placeholder=\"T (°c)\" class=\"span12 numero\"  ";
        // line 88
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "t"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">Ca+2 (ppm)</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"ca2\" placeholder=\"Ca+2 (ppm)\" class=\"span12 numero\"  ";
        // line 94
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "ca2"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"control-group\" >
\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-1\">Alcalinidad (ppm)</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"alcalinidad\" placeholder=\"Alcalinidad (ppm)\" class=\"span12 numero\"  ";
        // line 100
        if ((!(null === $this->getContext($context, "object")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "alcalinidad"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row-fluid procesando-ocultar\">
\t<div class=\"span12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"form-actions\">
\t\t\t\t<button class=\"btn btn-info\" type=\"button\" id=\"procesaobjeto\">
\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t";
        // line 114
        if ((!(null === $this->getContext($context, "object")))) {
            echo "Actualizar estudio";
        } else {
            echo "Generar estudio";
        }
        // line 115
        echo "\t\t\t\t</button>
\t\t\t\t&nbsp; &nbsp; &nbsp;
\t\t\t\t<!--<button class=\"btn\" type=\"reset\">
\t\t\t\t\t<i class=\"icon-undo bigger-110\"></i>
\t\t\t\t\tBorrar
\t\t\t\t</button>-->
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row-fluid\" id=\"procesando\" style=\"display: none;margin-top: 0px;\">
\t<div class=\"span12\">
\t\t<div class=\"widget-box\">
\t\t\t<div class=\"widget-header\">
\t\t\t\t<h4 class=\"smaller\"> Procesando <small>Por favor espere unos instantes...</small></h4>
\t\t\t</div>
\t\t\t<div class=\"widget-body\">
\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t<p style=\"text-align: center\"><img alt=\"loader\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div><!--/span-->
</div>
<div class=\"row-fluid\" >
\t<div class=\"span12\"  style=\"display: block\" id=\"mensajeajax\">
\t\t<div class=\"alert alert-block alert-success\" id=\"mensajeajax-positivo\" style=\"display: none\">
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
\t\t\t\t<i class=\"icon-remove\"></i>
\t\t\t</button>
\t\t\t<p>
\t\t\t\t<strong> <i class=\"icon-ok\"></i> Well done! </strong>
\t\t\t\tYou successfully read this important alert message.
\t\t\t</p>
\t\t</div>
\t</div><!--/span-->
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:ingreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 133,  257 => 115,  251 => 114,  230 => 100,  217 => 94,  204 => 88,  191 => 82,  178 => 76,  148 => 55,  135 => 47,  122 => 41,  112 => 38,  102 => 35,  88 => 28,  73 => 15,  67 => 13,  65 => 12,  56 => 11,  53 => 10,  46 => 6,  42 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}

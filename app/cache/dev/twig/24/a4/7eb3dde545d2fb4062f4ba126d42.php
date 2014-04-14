<?php

/* ProyectoPrincipalBundle:Users:cuenta.html.twig */
class __TwigTemplate_24a47eb3dde545d2fb4062f4ba126d42 extends Twig_Template
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
        echo "<script type=\"text/javascript\">var cuentaGuardar = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cuenta_guardar"), "html", null, true);
        echo "';</script>
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"hide\" style=\"display: block;\">
\t<div id=\"user-profile-3\" class=\"user-profile row-fluid procesando-ocultar\">
\t\t<div class=\"offset1 span10\">
\t\t\t<div class=\"space\"></div>
\t\t\t<form class=\"form-horizontal\" enctype=\"multipart/form-data\" id=\"formulario\">
\t\t\t\t<input type=\"hidden\" id=\"tipo\" value=\"";
        // line 13
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Registro")) {
            echo "0";
        } else {
            echo "1";
        }
        echo "\">
\t\t\t\t<div class=\"tabbable\">
\t\t\t\t\t<ul class=\"nav nav-tabs padding-16\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#edit-basic\"> <i class=\"green icon-edit bigger-125\"></i> Informaci&oacute;n b&aacute;sica</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#edit-password\"> <i class=\"blue icon-key bigger-125\"></i> Contrase&ntilde;a </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content profile-edit-tab-content\">
\t\t\t\t\t\t<div id=\"edit-basic\" class=\"tab-pane in active\">
\t\t\t\t\t\t\t<h4 class=\"header blue bolder smaller\">General</h4>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t<div class=\"ace-file-input ace-file-multiple\" >
\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"opcional\" id=\"imagen\">
\t\t\t\t\t\t\t\t\t\t<label data-title=\"Avatar\" style=\"width: 273px;height: 224px;\">
\t\t\t\t\t\t\t\t\t\t\t<span data-title=\"No File ...\"> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        if ((!(null === $this->getContext($context, "user")))) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-picture\" id=\"avatar-generico\" style=\"display: none;margin-top: 35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 35
            if (($this->getAttribute($this->getContext($context, "user"), "sexo") == 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: block;\" id=\"avatar-hombre\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-man.png"), "html", null, true);
                echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: none;\" id=\"avatar-mujer\"><img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-woman.png"), "html", null, true);
                echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: none;\" id=\"avatar-hombre\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-man.png"), "html", null, true);
                echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: block;\" id=\"avatar-mujer\"><img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-woman.png"), "html", null, true);
                echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            echo " <i class=\"icon-picture\" id=\"avatar-generico\" style=\"display: block;margin-top: 35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: none;\" id=\"avatar-hombre\"><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-man.png"), "html", null, true);
            echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: center;display: none;\" id=\"avatar-mujer\"><img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/avatar-woman.png"), "html", null, true);
            echo "\" width=\"150\" style=\"cursor: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo " </span></label><a class=\"remove\" href=\"#\"><i class=\"icon-remove\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"vspace\"></div>
\t\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-username\">Nombre de Usuario</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"nombredeusuario\" placeholder=\"Nombre de Usuario\" value=\"";
        // line 60
        if ((!(null === $this->getContext($context, "user")))) {
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-group\"></i> </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-first\">Nombre y Apellido</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"input-small\" type=\"text\" id=\"nombre\" placeholder=\"Nombre\" value=\"";
        // line 67
        if ((!(null === $this->getContext($context, "user")))) {
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "nombre")), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"input-small\" type=\"text\"  id=\"apellido\"  placeholder=\"Apellido\" value=\"";
        // line 68
        if ((!(null === $this->getContext($context, "user")))) {
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "apellido")), "html", null, true);
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-email\">Correo electr&oacute;nico</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\"  id=\"email\"  value=\"";
        // line 75
        if ((!(null === $this->getContext($context, "user")))) {
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email")), "html", null, true);
        }
        echo "\" placeholder=\"Correo electr&oacute;nico\" >
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-envelope\"></i> </span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Sexo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space-2\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"form-field-radio\"  id=\"sexofemenino\" type=\"radio\" ";
        // line 84
        if ((!(null === $this->getContext($context, "user")))) {
            if (($this->getAttribute($this->getContext($context, "user"), "sexo") == 1)) {
                echo "checked";
            }
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Mujer</span> </label>
\t\t\t\t\t\t\t\t\t\t\t&nbsp; &nbsp; &nbsp; <label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"form-field-radio\" id=\"sexomasculino\" type=\"radio\" ";
        // line 87
        if ((!(null === $this->getContext($context, "user")))) {
            if (($this->getAttribute($this->getContext($context, "user"), "sexo") == 0)) {
                echo "checked";
            }
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Hombre</span> </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-comment\">Sobre ud...</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<textarea id=\"descripcion\" placeholder=\"Incluye aquí información sobre tus estudios, cargo, profesión o intereses...\">";
        // line 94
        if ((!(null === $this->getContext($context, "user")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "auxiliar"), "descripcionusuario"), "html", null, true);
        }
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"edit-password\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"space-10\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t<div class=\"pull-left alert alert-success inline no-margin\" >
\t\t\t\t\t\t\t\t\t";
        // line 105
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Registro")) {
            echo "Ingrese una contrase&ntilde;a de m&iacute;nimo 8 caracteres";
        } else {
            echo "S&oacute;lo rellene los siguientes campos si desea sobreescribir su contraseña actual";
        }
        // line 106
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"space-10\"></div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-pass1\">Nueva Contrase&ntilde;a</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password\" ";
        // line 112
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Perfil")) {
            echo "class=\"opcional\"";
        }
        echo " >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"form-field-pass2\">Confirmar Contrase&ntilde;a</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" id=\"password2\" ";
        // line 118
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Perfil")) {
            echo "class=\"opcional\"";
        }
        echo " >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<button class=\"btn btn-info\" type=\"button\"  id=\"procesarcuenta\">
\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t";
        // line 127
        if (($this->getAttribute($this->getContext($context, "menu"), "seccion") == "Registro")) {
            echo "Registrarme";
        } else {
            echo "Actualizar";
        }
        // line 128
        echo "\t\t\t\t\t</button>
\t\t\t\t\t&nbsp; &nbsp; &nbsp;
\t\t\t\t\t<button class=\"btn\" type=\"reset\">
\t\t\t\t\t\t<i class=\"icon-undo bigger-110\"></i>
\t\t\t\t\t\tBorrar
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div><!--/span-->
\t</div><!--/user-profile-->
\t<div class=\"row-fluid\" id=\"procesando\" style=\"display: none;margin-top: -40px;\">
\t\t<div class=\"span12\">
\t\t\t<div class=\"widget-box\">
\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t<h4 class=\"smaller\"> Procesando <small>Por favor espere unos instantes...</small></h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t<p style=\"text-align: center\"><img alt=\"loader\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/span-->
\t</div>
\t<div class=\"row-fluid\" >
\t\t<div class=\"span12\"  style=\"display: block\" id=\"mensajeajax\">
\t\t\t<div class=\"alert alert-block alert-success\" id=\"mensajeajax-positivo\" style=\"display: none\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
\t\t\t\t\t<i class=\"icon-remove\"></i>
\t\t\t\t</button>
\t\t\t\t<p>
\t\t\t\t\t<strong> <i class=\"icon-ok\"></i> Well done! </strong>
\t\t\t\t\tYou successfully read this important alert message.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div><!--/span-->
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Users:cuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 146,  270 => 128,  264 => 127,  250 => 118,  239 => 112,  231 => 106,  225 => 105,  209 => 94,  195 => 87,  185 => 84,  171 => 75,  159 => 68,  153 => 67,  141 => 60,  130 => 51,  124 => 49,  119 => 47,  114 => 46,  108 => 43,  102 => 41,  96 => 38,  90 => 36,  88 => 35,  84 => 33,  82 => 32,  56 => 13,  49 => 8,  46 => 7,  39 => 4,  36 => 3,  30 => 2,);
    }
}

<?php

/* ProyectoPrincipalBundle:Principal:listado.html.twig */
class __TwigTemplate_9e56db198674ac1e34b2e12f8fde996b extends Twig_Template
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
        // line 3
        if ((twig_length_filter($this->env, $this->getContext($context, "objects")) == 0)) {
            // line 4
            $context["info"] = "No se encontraron proyectos en el sistema";
        }
        // line 6
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:info.html.twig")->display(array_merge($context, array("info" => $this->getContext($context, "info"))));
        // line 7
        echo "
";
    }

    // line 9
    public function block_scripts($context, array $blocks = array())
    {
        // line 10
        echo "<script type=\"text/javascript\">
\tvar eliminarObjeto = '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_elimina_objeto"), "html", null, true);
        echo "';
\tvar verProyecto = '";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_ver_objeto"), "html", null, true);
        echo "';
\tvar editarProyecto = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_editar_objeto"), "html", null, true);
        echo "';
</script>
";
    }

    // line 17
    public function block_contenido($context, array $blocks = array())
    {
        // line 18
        if ((twig_length_filter($this->env, $this->getContext($context, "objects")) > 0)) {
            // line 19
            echo "<div class=\"row-fluid\">
\t<!--<h3 class=\"header smaller lighter blue\">Estudios</h3> -->
\t<div class=\"table-header\">
\t\tAnalisis realizados por el sistema
\t</div>
\t<div id=\"sample-table-2_wrapper\" class=\"dataTables_wrapper\" role=\"grid\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span6\">
\t\t\t\t<!--<div id=\"sample-table-2_length\" class=\"dataTables_length\">
\t\t\t\t<label>Desplegar
\t\t\t\t<select size=\"1\" name=\"sample-table-2_length\" aria-controls=\"sample-table-2\">
\t\t\t\t<option value=\"10\" selected=\"selected\">10</option><option value=\"25\">25</option><option value=\"50\">50</option><option value=\"100\">100</option>
\t\t\t\t</select> estudios</label>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<!--
\t\t\t\t<div class=\"dataTables_filter\" id=\"sample-table-2_filter\">
\t\t\t\t<label>Buscar:
\t\t\t\t<input type=\"text\" aria-controls=\"sample-table-2\">
\t\t\t\t</label>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t</div>
\t\t<table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover dataTable\" aria-describedby=\"sample-table-2_info\">
\t\t\t<thead>
\t\t\t\t<tr role=\"row\">
\t\t\t\t\t<th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"sample-table-2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Domain: activate to sort column ascending\" style=\"width: 168px;\">Nombre</th>
\t\t\t\t\t<th class=\"sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"sample-table-2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Price: activate to sort column ascending\" style=\"width: 121px;\">Langelier</th>
\t\t\t\t\t<th class=\"hidden-480 sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"sample-table-2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Clicks: activate to sort column ascending\" style=\"width: 132px;\">Ryznar</th>
\t\t\t\t\t<th class=\"hidden-480 sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"sample-table-2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Clicks: activate to sort column ascending\" style=\"width: 132px;\">Puckorius</th>
\t\t\t\t\t<th class=\"hidden-phone sorting\" role=\"columnheader\" tabindex=\"0\" aria-controls=\"sample-table-2\" rowspan=\"1\" colspan=\"1\" aria-label=\"

\t\t\t\t\tUpdate
\t\t\t\t\t: activate to sort column ascending\" style=\"width: 197px;\"><i class=\"icon-time bigger-110 hidden-phone\"></i> Fecha </th>
\t\t\t\t\t<th class=\"sorting_disabled\" role=\"columnheader\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 161px;\"></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody role=\"alert\" aria-live=\"polite\" aria-relevant=\"all\">
\t\t\t\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "objects"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
                // line 59
                echo "\t\t\t\t<tr class=\"";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                    echo "odd";
                } else {
                    echo "even";
                }
                echo "\">
\t\t\t\t\t<td class=\" \"><a href=\"#\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "nombre"), "html", null, true);
                echo "</a></td>
\t\t\t\t\t<td class=\" \">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "getRespuesta", array(0 => $this->getAttribute($this->getContext($context, "object"), "langelier")), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"hidden-480 \">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "getRespuesta", array(0 => $this->getAttribute($this->getContext($context, "object"), "rysnar")), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"hidden-480 \">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "getRespuesta", array(0 => $this->getAttribute($this->getContext($context, "object"), "puckorius")), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"hidden-phone \">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "object"), "fecha"), "format", array(0 => "d/m/Y H:i:s"), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"td-actions \">
\t\t\t\t\t<div class=\"hidden-phone visible-desktop action-buttons\" codigo=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<a class=\"blue ver\" href=\"javascript:void(0)\"> <i class=\"icon-zoom-in bigger-130\"></i> </a>
\t\t\t\t\t\t<a class=\"green editar\" href=\"javascript:void(0)\"> <i class=\"icon-pencil bigger-130\"></i> </a>
\t\t\t\t\t\t<a class=\"red eliminar\" href=\"javascript:void(0)\"> <i class=\"icon-trash bigger-130\"></i> </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"hidden-desktop visible-phone\">
\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t<button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"icon-caret-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"\" data-original-title=\"View\"> <span class=\"blue\"> <i class=\"icon-zoom-in bigger-120\"></i> </span> </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"\" data-original-title=\"Edit\"> <span class=\"green\"> <i class=\"icon-edit bigger-120\"></i> </span> </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"\" data-original-title=\"Delete\"> <span class=\"red\"> <i class=\"icon-trash bigger-120\"></i> </span> </a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div></td>
\t\t\t\t</tr>
\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span6\">
\t\t\t\t<div class=\"dataTables_info\" id=\"sample-table-2_info\">
\t\t\t\t\tMostrando del 1 al ";
            // line 96
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "objects")), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "objects")), "html", null, true);
            echo " entradas
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<!--
\t\t\t\t<div class=\"dataTables_paginate paging_bootstrap pagination\">
\t\t\t\t<ul>
\t\t\t\t<li class=\"prev disabled\">
\t\t\t\t<a href=\"#\"><i class=\"icon-double-angle-left\"></i></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"active\">
\t\t\t\t<a href=\"#\">1</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t<a href=\"#\">2</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t<a href=\"#\">3</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"next\">
\t\t\t\t<a href=\"#\"><i class=\"icon-double-angle-right\"></i></a>
\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t</div> -->
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Principal:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 96,  198 => 91,  159 => 66,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  129 => 59,  112 => 58,  71 => 19,  69 => 18,  66 => 17,  59 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  40 => 7,  38 => 6,  35 => 4,  33 => 3,  30 => 2,);
    }
}

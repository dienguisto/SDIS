<?php

/* ProyectoPrincipalBundle:Helpers:base.html.twig */
class __TwigTemplate_57ea5fcadd3a72b0df8c62db5eaa5736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'info' => array($this, 'block_info'),
            'error' => array($this, 'block_error'),
            'contenido' => array($this, 'block_contenido'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>Panel de Control - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "parameters"), "nombre"), "html", null, true);
        echo "</title>

\t\t<meta name=\"description\" content=\"overview &amp; stats\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

\t\t<!--basic styles-->

\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />

\t\t<!--[if IE 7]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome-ie7.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->
\t\t<!--page specific plugin styles-->
\t\t<!--fonts-->
\t\t<!--<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" />-->
\t\t<!--ace styles-->

\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-responsive.min.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-skins.min.css"), "html", null, true);
        echo "\" />

\t\t<!--[if lte IE 8]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-ie.min.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->

\t\t<!--inline styles related to this page-->
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

\t<body>
\t\t<div class=\"navbar\">
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t";
        // line 39
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:contenedor-barra.html.twig")->display(array_merge($context, array("user" => $this->getContext($context, "user"), "parameters" => $this->getContext($context, "parameters"))));
        // line 40
        echo "\t\t\t\t</div><!--/.container-fluid-->
\t\t\t</div><!--/.navbar-inner-->
\t\t</div>

\t\t<div class=\"main-container container-fluid\">
\t\t\t<a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
\t\t\t\t<span class=\"menu-text\"></span>
\t\t\t</a>

\t\t\t<div class=\"sidebar\" id=\"sidebar\">
\t\t\t\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">

\t\t\t\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t\t\t\t<span class=\"btn btn-danger\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div><!--#sidebar-shortcuts-->

\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t
\t\t\t\t";
        // line 65
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("ProyectoPrincipalBundle:Helpers:listaNavegacion", array("menu" => $this->getContext($context, "menu"), "user" => $this->getContext($context, "user"))), array());
        // line 66
        echo "\t\t\t\t
\t\t\t\t</ul><!--/.nav-list-->

\t\t\t\t<div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
\t\t\t\t\t<i class=\"icon-double-angle-left\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"icon-home home-icon\"></i>
\t\t\t\t\t\t\t<a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_homepage"), "html", null, true);
        echo "\">Inicio</a>

\t\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t\t<i class=\"icon-angle-right arrow-icon\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "seccion"), "html", null, true);
        echo "</li>
\t\t\t\t\t</ul><!--.breadcrumb-->
<!--
\t\t\t\t\t<div class=\"nav-search\" id=\"nav-search\">
\t\t\t\t\t\t<form class=\"form-search\" />
\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"input-small nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<i class=\"icon-search nav-search-icon\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</form>
</div><!--#nav-search--> 

\t\t\t\t</div>

\t\t\t\t<div class=\"page-content\">
\t\t\t\t\t<div class=\"page-header position-relative\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "seccion"), "html", null, true);
        echo "
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div><!--/.page-header-->

\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<div class=\"space-6\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 110
        $this->displayBlock('info', $context, $blocks);
        // line 112
        echo "
\t\t\t\t\t\t\t";
        // line 113
        $this->displayBlock('error', $context, $blocks);
        // line 115
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 116
        $this->displayBlock('contenido', $context, $blocks);
        // line 118
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--PAGE CONTENT ENDS-->
\t\t\t\t\t\t</div><!--/.span-->
\t\t\t\t\t</div><!--/.row-fluid-->
\t\t\t\t</div><!--/.page-content-->

\t\t\t\t</div><!--/.main-content-->
\t\t</div><!--/.main-container-->

\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-small btn-inverse\">
\t\t\t<i class=\"icon-double-angle-up icon-only bigger-110\"></i>
\t\t</a>

\t\t<!--basic scripts-->

\t\t<!--[if !IE]>-->

\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>

\t\t<!--<![endif]-->

\t\t<!--[if IE]>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<![endif]-->

\t\t<!--[if !IE]>-->

\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!--<![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->

\t\t<script type=\"text/javascript\">
\t\t\tif(\"ontouchend\" in document) document.write(\"<script src='";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--page specific plugin scripts-->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->

\t\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--ace scripts-->

\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ace.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--inline scripts related to this page-->
\t\t<script type=\"text/javascript\">
\t\t\t//VARIABLES GLOBALES
\t\t\tvar inicio = '";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_homepage"), "html", null, true);
        echo "';

\t\t</script>
\t\t<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sistema/jquery.printElement.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t
\t\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sistema/utilidades.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sistema/generales.js"), "html", null, true);
        echo "\"  type=\"text/javascript\"></script>
\t\t";
        // line 193
        $this->displayBlock('scripts', $context, $blocks);
        // line 195
        echo "\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
\t\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\tvar size = parseInt(\$(this).data('size')) || 50;
\t\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\t\tbarColor: barColor,
\t\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\t\tscaleColor: false,
\t\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\t\tanimate: /msie\\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
\t\t\t\t\t\tsize: size
\t\t\t\t\t});
\t\t\t\t})
\t\t\t
\t\t\t\t\$('.sparkline').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
\t\t\t\t\t\$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:\$(this).data('min') || 0} );
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t  var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
\t\t\t  var data = [
\t\t\t\t{ label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
\t\t\t\t{ label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
\t\t\t\t{ label: \"ad campaings\",  data: 8.2, color: \"#AF4E96\"},
\t\t\t\t{ label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
\t\t\t\t{ label: \"other\",  data: 10, color: \"#FEE074\"}
\t\t\t  ]
\t\t\t  function drawPieChart(placeholder, data, position) {
\t\t\t \t  \$.plot(placeholder, data, {
\t\t\t\t\tseries: {
\t\t\t\t\t\tpie: {
\t\t\t\t\t\t\tshow: true,
\t\t\t\t\t\t\ttilt:0.8,
\t\t\t\t\t\t\thighlight: {
\t\t\t\t\t\t\t\topacity: 0.25
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstroke: {
\t\t\t\t\t\t\t\tcolor: '#fff',
\t\t\t\t\t\t\t\twidth: 2
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstartAngle: 2
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: position || \"ne\", 
\t\t\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\t\t\tmargin:[-30,15]
\t\t\t\t\t}
\t\t\t\t\t,
\t\t\t\t\tgrid: {
\t\t\t\t\t\thoverable: true,
\t\t\t\t\t\tclickable: true
\t\t\t\t\t}
\t\t\t\t })
\t\t\t }
\t\t\t drawPieChart(placeholder, data);
\t\t\t
\t\t\t /**
\t\t\t we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
\t\t\t so that's not needed actually.
\t\t\t */
\t\t\t placeholder.data('chart', data);
\t\t\t placeholder.data('draw', drawPieChart);
\t\t\t
\t\t\t
\t\t\t
\t\t\t  var \$tooltip = \$(\"<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>\").appendTo('body');
\t\t\t  var previousPoint = null;
\t\t\t
\t\t\t  placeholder.on('plothover', function (event, pos, item) {
\t\t\t\tif(item) {
\t\t\t\t\tif (previousPoint != item.seriesIndex) {
\t\t\t\t\t\tpreviousPoint = item.seriesIndex;
\t\t\t\t\t\tvar tip = item.series['label'] + \" : \" + item.series['percent']+'%';
\t\t\t\t\t\t\$tooltip.show().children(0).text(tip);
\t\t\t\t\t}
\t\t\t\t\t\$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
\t\t\t\t} else {
\t\t\t\t\t\$tooltip.hide();
\t\t\t\t\tpreviousPoint = null;
\t\t\t\t}
\t\t\t\t
\t\t\t });
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\tvar d1 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td1.push([i, Math.sin(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d2 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td2.push([i, Math.cos(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d3 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.2) {
\t\t\t\t\td3.push([i, Math.tan(i)]);
\t\t\t\t}
\t\t\t\t
\t\t\t
\t\t\t\tvar sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
\t\t\t\t\$.plot(\"#sales-charts\", [
\t\t\t\t\t{ label: \"Domains\", data: d1 },
\t\t\t\t\t{ label: \"Hosting\", data: d2 },
\t\t\t\t\t{ label: \"Services\", data: d3 }
\t\t\t\t], {
\t\t\t\t\thoverable: true,
\t\t\t\t\tshadowSize: 0,
\t\t\t\t\tseries: {
\t\t\t\t\t\tlines: { show: true },
\t\t\t\t\t\tpoints: { show: true }
\t\t\t\t\t},
\t\t\t\t\txaxis: {
\t\t\t\t\t\ttickLength: 0
\t\t\t\t\t},
\t\t\t\t\tyaxis: {
\t\t\t\t\t\tticks: 10,
\t\t\t\t\t\tmin: -2,
\t\t\t\t\t\tmax: 2,
\t\t\t\t\t\ttickDecimals: 3
\t\t\t\t\t},
\t\t\t\t\tgrid: {
\t\t\t\t\t\tbackgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tborderColor:'#555'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('.tab-content')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\tvar w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('.dialogs,.comments').slimScroll({
\t\t\t\t\theight: '300px'
\t\t\t    });
\t\t\t\t
\t\t\t\t
\t\t\t\t//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
\t\t\t\t//so disable dragging when clicking on label
\t\t\t\tvar agent = navigator.userAgent.toLowerCase();
\t\t\t\tif(\"ontouchstart\" in document && /applewebkit/.test(agent) && /android/.test(agent))
\t\t\t\t  \$('#tasks').on('touchstart', function(e){
\t\t\t\t\tvar li = \$(e.target).closest('#tasks li');
\t\t\t\t\tif(li.length == 0)return;
\t\t\t\t\tvar label = li.find('label.inline').get(0);
\t\t\t\t\tif(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
\t\t\t\t});
\t\t\t
\t\t\t\t\$('#tasks').sortable({
\t\t\t\t\topacity:0.8,
\t\t\t\t\trevert:true,
\t\t\t\t\tforceHelperSize:true,
\t\t\t\t\tplaceholder: 'draggable-placeholder',
\t\t\t\t\tforcePlaceholderSize:true,
\t\t\t\t\ttolerance:'pointer',
\t\t\t\t\tstop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
\t\t\t\t\t\t\$(ui.item).css('z-index', 'auto');
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$('#tasks').disableSelection();
\t\t\t\t\$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
\t\t\t\t\tif(this.checked) \$(this).closest('li').addClass('selected');
\t\t\t\t\telse \$(this).closest('li').removeClass('selected');
\t\t\t\t});
\t\t\t\t
\t\t\t
\t\t\t})
\t\t</script>
\t</body>
</html>
";
    }

    // line 110
    public function block_info($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\t\t\t\t";
    }

    // line 113
    public function block_error($context, array $blocks = array())
    {
        // line 114
        echo "\t\t\t\t\t\t\t";
    }

    // line 116
    public function block_contenido($context, array $blocks = array())
    {
        // line 117
        echo "\t\t\t\t\t\t\t";
    }

    // line 193
    public function block_scripts($context, array $blocks = array())
    {
        // line 194
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 194,  549 => 193,  545 => 117,  542 => 116,  538 => 114,  535 => 113,  531 => 111,  528 => 110,  327 => 195,  325 => 193,  321 => 192,  317 => 191,  312 => 189,  308 => 188,  302 => 185,  294 => 180,  290 => 179,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  249 => 165,  241 => 160,  236 => 158,  228 => 153,  218 => 146,  188 => 118,  186 => 116,  183 => 115,  181 => 113,  178 => 112,  176 => 110,  165 => 102,  145 => 85,  136 => 79,  121 => 66,  119 => 65,  92 => 40,  90 => 39,  71 => 26,  67 => 25,  53 => 17,  47 => 14,  43 => 13,  39 => 12,  29 => 5,  23 => 1,  81 => 32,  77 => 29,  66 => 22,  63 => 24,  50 => 10,  48 => 9,  45 => 8,  41 => 6,  36 => 4,  33 => 3,  30 => 2,);
    }
}

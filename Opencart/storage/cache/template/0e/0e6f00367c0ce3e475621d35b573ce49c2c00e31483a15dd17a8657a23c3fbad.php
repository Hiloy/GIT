<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* common/header.twig */
class __TwigTemplate_ef5b3c75791942788b60b65e841b463ffb1f0a65212934324406a1d8039ae51f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 27);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 27);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 38
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 39
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>

";
            // line 41
            if (($context["storage_cleaner"] ?? null)) {
                // line 42
                echo "<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.clear-dropdown li, .clear-dropdown a').on('click', function(e) {
\t\te.stopPropagation();
\t});
});

function clearOption(type, key) {
\tvar oc3x_size = \$('.clear-dropdown').prev('a').children('span').html();
\tvar oc3x_type = type + '-' + key;

\t\$.ajax({
\t\turl: 'index.php?route=extension/module/oc3x_storage_cleaner/clear' + type + '&user_token=' + getURLVar('user_token'),
\t\ttype: 'post',
\t\tdata: 'key=' + key,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('.clear-dropdown').prev('a').children('span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t\t\$('#button-' + oc3x_type + ' span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.clear-dropdown > .alert-success, .clear-dropdown > .alert-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#button-' + oc3x_type).closest('li').addClass('bg-success');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-success\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\tif (json['size']) {
\t\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(json['size']['all']);
\t\t\t\t\t\$('#button-' + oc3x_type + ' span').html(json['size'][oc3x_type]);
\t\t\t\t}
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(oc3x_size);
\t\t\t\t\$('#button-' + oc3x_type).closest('li').addClass('bg-danger');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-danger\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t});
}

function clearAll() {
\tclearOption('cache', 'system');
\tclearOption('cache', 'modification');
\tclearOption('cache', 'image');
\tclearOption('log', 'error');
\tclearOption('log', 'modification');
}
//--></script>
";
            }
            // line 96
            echo "\t\t\t
    <ul class=\"nav navbar-nav navbar-right\">

\t";
            // line 99
            if (($context["storage_cleaner"] ?? null)) {
                // line 100
                echo "\t<li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span class=\"label label-info pull-left\" style=\"margin-top:23px;margin-right:4px;\">";
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["all"] ?? null) : null);
                    echo "</span>";
                }
                echo "<i class=\"fa fa-eraser fa-lg\"></i></a>
\t  <ul class=\"dropdown-menu dropdown-menu-right clear-dropdown\" style=\"width: 230px;\">
\t\t<li class=\"dropdown-header\">";
                // line 102
                echo ($context["text_cache"] ?? null);
                echo "</li>
\t\t<li><a>";
                // line 103
                echo ($context["text_cache_system"] ?? null);
                echo "<button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-system\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["cache-system"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>";
                // line 104
                echo ($context["text_cache_modification"] ?? null);
                echo "<button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_refresh"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["cache-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>";
                // line 105
                echo ($context["text_cache_image"] ?? null);
                echo "<button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-image\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["cache-image"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li class=\"divider\"></li>
\t\t<li class=\"dropdown-header\">";
                // line 107
                echo ($context["text_log"] ?? null);
                echo "</li>
\t\t<li><a>";
                // line 108
                echo ($context["text_log_error"] ?? null);
                echo "<button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-log-error\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["log-error"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>";
                // line 109
                echo ($context["text_log_modification"] ?? null);
                echo "<button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-log-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["log-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li class=\"divider\"></li>
\t\t<li><a><button onclick=\"clearAll();\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" class=\"btn btn-danger btn-sm btn-block\" id=\"button-clear-all\">";
                // line 111
                echo ($context["text_clear_all"] ?? null);
                echo "<span class=\"pull-right\"><i class=\"fa fa-eraser\"></i></span></button></a></li>
\t  </ul>
\t</li>
\t";
            }
            // line 115
            echo "\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 116
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 118
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 120
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 122
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 122);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 122);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 125
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 126
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 127
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.opencart.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 128
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 131
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 133
        echo " </div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 133,  369 => 131,  363 => 128,  359 => 127,  355 => 126,  351 => 125,  348 => 124,  337 => 122,  333 => 121,  329 => 120,  322 => 118,  307 => 116,  304 => 115,  297 => 111,  284 => 109,  272 => 108,  268 => 107,  255 => 105,  243 => 104,  231 => 103,  227 => 102,  217 => 100,  215 => 99,  210 => 96,  154 => 42,  152 => 41,  147 => 39,  139 => 38,  132 => 33,  123 => 31,  119 => 30,  116 => 29,  105 => 27,  101 => 26,  88 => 24,  84 => 23,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
<meta charset=\"UTF-8\" />
<title>{{ title }}</title>
<base href=\"{{ base }}\" />
{% if description %}
<meta name=\"description\" content=\"{{ description }}\" />
{% endif %}
{% if keywords %}
<meta name=\"keywords\" content=\"{{ keywords }}\" />
{% endif %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
{% for style in styles %}
<link type=\"text/css\" href=\"{{ style.href }}\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\" />
{% endfor %}
{% for link in links %}
<link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\" />
{% endfor %}
<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
{% for script in scripts %}
<script type=\"text/javascript\" src=\"{{ script }}\"></script>
{% endfor %}
</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"{{ home }}\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" /></a></div>
    {% if logged %}<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>

{% if storage_cleaner %}
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.clear-dropdown li, .clear-dropdown a').on('click', function(e) {
\t\te.stopPropagation();
\t});
});

function clearOption(type, key) {
\tvar oc3x_size = \$('.clear-dropdown').prev('a').children('span').html();
\tvar oc3x_type = type + '-' + key;

\t\$.ajax({
\t\turl: 'index.php?route=extension/module/oc3x_storage_cleaner/clear' + type + '&user_token=' + getURLVar('user_token'),
\t\ttype: 'post',
\t\tdata: 'key=' + key,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('.clear-dropdown').prev('a').children('span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t\t\$('#button-' + oc3x_type + ' span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.clear-dropdown > .alert-success, .clear-dropdown > .alert-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#button-' + oc3x_type).closest('li').addClass('bg-success');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-success\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\tif (json['size']) {
\t\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(json['size']['all']);
\t\t\t\t\t\$('#button-' + oc3x_type + ' span').html(json['size'][oc3x_type]);
\t\t\t\t}
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(oc3x_size);
\t\t\t\t\$('#button-' + oc3x_type).closest('li').addClass('bg-danger');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-danger\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t});
}

function clearAll() {
\tclearOption('cache', 'system');
\tclearOption('cache', 'modification');
\tclearOption('cache', 'image');
\tclearOption('log', 'error');
\tclearOption('log', 'modification');
}
//--></script>
{% endif %}
\t\t\t
    <ul class=\"nav navbar-nav navbar-right\">

\t{% if storage_cleaner %}
\t<li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\">{% if text_cleaner_size %}<span class=\"label label-info pull-left\" style=\"margin-top:23px;margin-right:4px;\">{{ text_cleaner_size['all'] }}</span>{% endif %}<i class=\"fa fa-eraser fa-lg\"></i></a>
\t  <ul class=\"dropdown-menu dropdown-menu-right clear-dropdown\" style=\"width: 230px;\">
\t\t<li class=\"dropdown-header\">{{ text_cache }}</li>
\t\t<li><a>{{ text_cache_system }}<button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"{{ text_clear }}\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-system\">{% if text_cleaner_size %}<span>{{ text_cleaner_size['cache-system'] }}</span>{% endif %} <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>{{ text_cache_modification }}<button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"{{ text_refresh }}\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-modification\">{% if text_cleaner_size %}<span>{{ text_cleaner_size['cache-modification'] }}</span>{% endif %} <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>{{ text_cache_image }}<button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"{{ text_clear }}\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-cache-image\">{% if text_cleaner_size %}<span>{{ text_cleaner_size['cache-image'] }}</span>{% endif %} <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li class=\"divider\"></li>
\t\t<li class=\"dropdown-header\">{{ text_log }}</li>
\t\t<li><a>{{ text_log_error }}<button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"{{ text_clear }}\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-log-error\">{% if text_cleaner_size %}<span>{{ text_cleaner_size['log-error'] }}</span>{% endif %} <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li><a>{{ text_log_modification }}<button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"{{ text_clear }}\" class=\"btn btn-danger btn-xs pull-right\" id=\"button-log-modification\">{% if text_cleaner_size %}<span>{{ text_cleaner_size['log-modification'] }}</span>{% endif %} <i class=\"fa fa-eraser\"></i></button></a></li>
\t\t<li class=\"divider\"></li>
\t\t<li><a><button onclick=\"clearAll();\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" class=\"btn btn-danger btn-sm btn-block\" id=\"button-clear-all\">{{ text_clear_all }}<span class=\"pull-right\"><i class=\"fa fa-eraser\"></i></span></button></a></li>
\t  </ul>
\t</li>
\t{% endif %}
\t\t\t
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"{{ image }}\" alt=\"{{ firstname }} {{ lastname }}\" title=\"{{ username }}\" id=\"user-profile\" class=\"img-circle\" />{{ firstname }} {{ lastname }} <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"{{ profile }}\"><i class=\"fa fa-user-circle-o fa-fw\"></i> {{ text_profile }}</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">{{ text_store }}</li>
          {% for store in stores %}
          <li><a href=\"{{ store.href }}\" target=\"_blank\">{{ store.name }}</a></li>
          {% endfor %}
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">{{ text_help }}</li>
          <li><a href=\"https://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> {{ text_homepage }}</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> {{ text_documentation }}</a></li>
          <li><a href=\"https://forum.opencart.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> {{ text_support }}</a></li>
        </ul>
      </li>
      <li><a href=\"{{ logout }}\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">{{ text_logout }}</span></a></li>
    </ul>
    {% endif %} </div>
</header>", "common/header.twig", "");
    }
}

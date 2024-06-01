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

/* Foody/template/extension/module/slideshow.twig */
class __TwigTemplate_26f9c643775934e10599e5b8e7d349f207b74b7d890dce36938a4842d2a0fcc8 extends \Twig\Template
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
        echo "<!-- Carousel Start -->
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"header-carousel";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "\t\t\t\t\t\t<li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8) == 0)) {
                echo " class=\"active\" ";
            }
            echo "></li>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 13
            echo "\t\t\t\t\t\t<div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13) == 0)) {
                echo "active";
            }
            echo "\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 14);
            echo "\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
            echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
\t\t\t\t\t\t\t\t\t";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19)) {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
                echo "\">Shop Now</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- Carousel End -->";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 26,  135 => 22,  129 => 20,  127 => 19,  122 => 17,  116 => 14,  109 => 13,  92 => 12,  88 => 10,  65 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"header-carousel{{ module }}\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t{% for banner in banners %}
\t\t\t\t\t\t<li data-target=\"#header-carousel{{ module }}\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %}></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for banner in banners %}
\t\t\t\t\t\t<div class=\"carousel-item position-relative {% if loop.index0 == 0 %}active{% endif %}\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"{{ banner.image }}\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">{{ banner.title }}</h1>
\t\t\t\t\t\t\t\t\t<p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
\t\t\t\t\t\t\t\t\t{% if banner.link %}
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"{{ banner.link }}\">Shop Now</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- Carousel End -->", "Foody/template/extension/module/slideshow.twig", "");
    }
}

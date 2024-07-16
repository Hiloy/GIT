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
class __TwigTemplate_2dc2e91322308737bf00a7c0f779a49a7b1e6e9a6872e685e503504ba4e9640d extends \Twig\Template
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

";
        // line 3
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 4
            echo "\t";
            $context["length"] =  -2;
            // line 5
            echo "\t";
            $context["class"] = "col-lg-8";
        } else {
            // line 7
            echo "\t";
            $context["length"] = twig_length_filter($this->env, ($context["banners"] ?? null));
            // line 8
            echo "\t";
            $context["class"] = "col-lg-12";
        }
        // line 10
        echo "
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"";
        // line 13
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<div id=\"header-carousel";
        // line 14
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
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
            // line 17
            echo "\t\t\t\t\t\t<li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 17) == 0)) {
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
        // line 19
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null), 0, ($context["length"] ?? null)));
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
            // line 22
            echo "\t\t\t\t\t\t<div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22) == 0)) {
                echo "active";
            }
            echo "\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 23);
            echo "\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 26);
            echo "</h1>
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 28)) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 29);
                echo "\">Купити</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 31
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
        // line 35
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 38
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 3)) {
            // line 39
            echo "\t\t\t<div class=\"col-lg-4\">
\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["banners"] ?? null),  -2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 41
                echo "\t\t\t\t\t<div class=\"product-offer mb-30\" style=\"height: 200px;\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 42);
                echo "\" alt=\"\">
\t\t\t\t\t\t<div class=\"offer-text\">
\t\t\t\t\t\t\t\t<h6 class=\"text-white text-uppercase\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 44);
                echo "</h6>
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3\">ЗНИЖКА!</h3>
\t\t\t\t\t\t\t\t";
                // line 46
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 46)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 47);
                    echo "\" class=\"btn btn-primary\">Купити</a>\t
\t\t\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t</div>
\t\t";
        }
        // line 54
        echo "
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
        return array (  222 => 54,  218 => 52,  210 => 49,  204 => 47,  202 => 46,  197 => 44,  192 => 42,  189 => 41,  185 => 40,  182 => 39,  180 => 38,  175 => 35,  158 => 31,  152 => 29,  149 => 28,  145 => 26,  139 => 23,  132 => 22,  115 => 21,  111 => 19,  88 => 17,  71 => 16,  66 => 14,  62 => 13,  57 => 10,  53 => 8,  50 => 7,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->

{% if banners|length > 3 %}
\t{% set length = -2 %}
\t{% set class = \"col-lg-8\" %}
{% else %}
\t{% set length = banners|length %}
\t{% set class = \"col-lg-12\" %}
{% endif %}

<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"{{ class }}\">
\t\t\t<div id=\"header-carousel{{ module }}\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t{% for banner in banners[0:length] %}
\t\t\t\t\t\t<li data-target=\"#header-carousel{{ module }}\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %}></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for banner in banners[0:length] %}
\t\t\t\t\t\t<div class=\"carousel-item position-relative {% if loop.index0 == 0 %}active{% endif %}\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"{{ banner.image }}\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">{{ banner.title }}</h1>
\t\t\t\t\t\t\t\t\t{# <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p> #}
\t\t\t\t\t\t\t\t\t{% if banner.link %}
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"{{ banner.link }}\">Купити</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if banners|length > 3 %}
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t{% for banner in banners[-2:] %}
\t\t\t\t\t<div class=\"product-offer mb-30\" style=\"height: 200px;\">
\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ banner.image }}\" alt=\"\">
\t\t\t\t\t\t<div class=\"offer-text\">
\t\t\t\t\t\t\t\t<h6 class=\"text-white text-uppercase\">{{ banner.title }}</h6>
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3\">ЗНИЖКА!</h3>
\t\t\t\t\t\t\t\t{% if banner.link %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"btn btn-primary\">Купити</a>\t
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% endif %}

\t</div>
</div>
<!-- Carousel End -->", "Foody/template/extension/module/slideshow.twig", "");
    }
}

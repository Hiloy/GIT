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
class __TwigTemplate_33dd061186cca5d373cceefa07a373127c99b74834ebccadbecdd967bb80a1af extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["banners"] ?? null)) > 1)) {
            // line 4
            echo "\t";
            $context["class"] = "col-lg-8";
        } else {
            // line 6
            echo "\t";
            $context["class"] = "col-lg-12";
        }
        // line 8
        echo "
<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"";
        // line 11
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<div id=\"header-carousel";
        // line 12
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t\t\t\t<li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15) == 0)) {
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
        // line 17
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
        // line 19
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
            // line 20
            echo "\t\t\t\t\t\t<div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) == 0)) {
                echo "active";
            }
            echo "\" style=\"height: 430px;\">
\t\t\t\t\t\t\t<img class=\"position-absolute w-100 h-100\" src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 21);
            echo "\" style=\"object-fit: cover;\">
\t\t\t\t\t\t\t<div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"p-3\" style=\"max-width: 700px;\">
\t\t\t\t\t\t\t\t\t<h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 24);
            echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
\t\t\t\t\t\t\t\t\t";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 27);
                echo "\">Купити</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 29
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
        // line 33
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
        return array (  169 => 33,  152 => 29,  146 => 27,  144 => 26,  139 => 24,  133 => 21,  126 => 20,  109 => 19,  105 => 17,  82 => 15,  65 => 14,  60 => 12,  56 => 11,  51 => 8,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Carousel Start -->

{% if banners|length > 1 %}
\t{% set class = \"col-lg-8\" %}
{% else %}
\t{% set class = \"col-lg-12\" %}
{% endif %}

<div class=\"container-fluid mb-3\">
\t<div class=\"row px-xl-5\">
\t\t<div class=\"{{ class }}\">
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
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"{{ banner.link }}\">Купити</a>
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

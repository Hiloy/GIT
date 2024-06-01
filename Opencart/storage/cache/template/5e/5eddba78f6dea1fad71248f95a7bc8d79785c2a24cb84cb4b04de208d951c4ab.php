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
class __TwigTemplate_c9df2b2758e4a0dfede3e34202b44a7720a0c1dcd97f959d108b025a36050ce9 extends \Twig\Template
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
        echo "    <!-- Carousel Start -->
    <div class=\"container-fluid mb-3\">
      <div class=\"row px-xl-5\">
          <div class=\"col-lg-12\">
              <div id=\"header-carousel";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                  <ol class=\"carousel-indicators\">
                    ";
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
            echo "                      <li data-target=\"#header-carousel";
            echo ($context["module"] ?? null);
            echo "\" data-slide-to=\"";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 8);
            echo "\" 
                      ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9) == 0)) {
                echo "class=\"active\"";
            }
            echo ">
                      </li>
                    ";
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
        // line 12
        echo "                  </ol>
                  <div class=\"carousel-inner\">
                    ";
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
            echo "                        <div class=\"carousel-item position-relative ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15) == 0)) {
                echo "class=\"active\">";
            }
            echo "\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 16);
            echo "\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19);
            echo "</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 21)) {
                // line 22
                echo "                                      <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22);
                echo "\">Shop Now</a>
                                    ";
            }
            // line 24
            echo "                                </div>
                          </div>
                    ";
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
        // line 27
        echo "                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Carousel End -->
";
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
        return array (  154 => 27,  138 => 24,  132 => 22,  130 => 21,  125 => 19,  119 => 16,  112 => 15,  95 => 14,  91 => 12,  72 => 9,  65 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Carousel Start -->
    <div class=\"container-fluid mb-3\">
      <div class=\"row px-xl-5\">
          <div class=\"col-lg-12\">
              <div id=\"header-carousel{{ module }}\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                  <ol class=\"carousel-indicators\">
                    {% for banner in banners %}
                      <li data-target=\"#header-carousel{{ module }}\" data-slide-to=\"{{ loop.index0 }}\" 
                      {% if loop.index0 == 0 %}class=\"active\"{% endif %}>
                      </li>
                    {% endfor %}
                  </ol>
                  <div class=\"carousel-inner\">
                    {% for banner in banners %}
                        <div class=\"carousel-item position-relative {% if loop.index0 == 0 %}class=\"active\">{% endif %}\" style=\"height: 430px;\">
                            <img class=\"position-absolute w-100 h-100\" src=\"{{ banner.image }}\" style=\"object-fit: cover;\">
                            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                                <div class=\"p-3\" style=\"max-width: 700px;\">
                                    <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">{{ banner.title }}</h1>
                                    <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    {% if banner.link %}
                                      <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"{{ banner.link }}\">Shop Now</a>
                                    {% endif %}
                                </div>
                          </div>
                    {% endfor %}
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Carousel End -->
", "Foody/template/extension/module/slideshow.twig", "");
    }
}

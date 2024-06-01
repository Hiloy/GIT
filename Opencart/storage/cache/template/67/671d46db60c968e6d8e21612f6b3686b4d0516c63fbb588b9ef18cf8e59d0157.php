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

/* Foody/template/extension/module/carousel.twig */
class __TwigTemplate_cc339b7836403630ba8e7f34868558b948fa0e0ba5e245431d0dccaa877234d5 extends \Twig\Template
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
        echo " <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "                    <div class=\"bg-light p-4\">
                      ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8)) {
                // line 9
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9);
                echo "\">
                          <img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\">
                        </a>
                      ";
            } else {
                // line 13
                echo "                        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                echo "\">
                      ";
            }
            // line 15
            echo "                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  74 => 15,  66 => 13,  58 => 10,  53 => 9,  51 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                  {% for banner in banners %}
                    <div class=\"bg-light p-4\">
                      {% if banner.link %}
                        <a href=\"{{ banner.link }}\">
                          <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\">
                        </a>
                      {% else %}
                        <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\">
                      {% endif %}
                    </div>
                  {% endfor %}
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->", "Foody/template/extension/module/carousel.twig", "");
    }
}

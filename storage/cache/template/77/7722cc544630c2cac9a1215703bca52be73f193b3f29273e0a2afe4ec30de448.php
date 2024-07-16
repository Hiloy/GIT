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

/* Foody/template/extension/module/cats.twig */
class __TwigTemplate_394169cb711add51d74bd4e15ec2d806add6e364a5fa74a27e6e1322b3c179d2 extends \Twig\Template
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
        echo " <!-- Categories Start -->
<div class=\"container-fluid pt-5\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
      <span class=\"bg-secondary pr-3\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
    </h2>
    <div class=\"row px-xl-5 pb-3\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
            echo "\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 12);
            echo "\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
            echo "</h6>
                        <small class=\"text-body\">";
            // line 16
            echo ($context["text_total_products"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "total_products", [], "any", false, false, false, 16);
            echo "</small>
                    </div>
                </div>
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
</div>
<!-- Categories End -->";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/cats.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  71 => 16,  67 => 15,  61 => 12,  55 => 9,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Categories Start -->
<div class=\"container-fluid pt-5\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
      <span class=\"bg-secondary pr-3\">{{ heading_title }}</span>
    </h2>
    <div class=\"row px-xl-5 pb-3\">
    {% for category in categories %}
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"{{ category.href }}\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"{{ category.image }}\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>{{category.name}}</h6>
                        <small class=\"text-body\">{{ text_total_products }} {{ category.total_products }}</small>
                    </div>
                </div>
            </a>
        </div>
    {% endfor %}
    </div>
</div>
<!-- Categories End -->", "Foody/template/extension/module/cats.twig", "");
    }
}

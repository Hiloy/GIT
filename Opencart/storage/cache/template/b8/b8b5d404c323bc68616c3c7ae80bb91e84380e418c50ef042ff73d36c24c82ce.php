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

/* Foody/template/common/menu.twig */
class __TwigTemplate_355e7604c51c94eadaf8f930d24a6bc100365aadb9cafd3ab2c53220d8d9c8e7 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
    <h6 class=\"text-dark m-0\">
    <i class=\"fa fa-bars mr-2\"></i>";
            // line 4
            echo ($context["text_category"] ?? null);
            echo "
    </h6>
    <i class=\"fa fa-angle-down text-dark\"></i>
  </a>
  <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
    <div class=\"navbar-nav w-100\">

      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "          
        ";
                } else {
                    // line 15
                    echo "          <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\" class=\"nav-item nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>
        ";
                }
                // line 17
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
    </div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "Foody/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 17,  64 => 15,  60 => 13,  57 => 12,  53 => 11,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
  <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
    <h6 class=\"text-dark m-0\">
    <i class=\"fa fa-bars mr-2\"></i>{{ text_category }}
    </h6>
    <i class=\"fa fa-angle-down text-dark\"></i>
  </a>
  <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
    <div class=\"navbar-nav w-100\">

      {% for category in categories %}
        {% if category.children %}
          
        {% else %}
          <a href=\"{{ category.href }}\" class=\"nav-item nav-link\">{{ category.name }}</a>
        {% endif %}
      {% endfor %}

    </div>
  </nav>
{% endif %}
", "Foody/template/common/menu.twig", "");
    }
}

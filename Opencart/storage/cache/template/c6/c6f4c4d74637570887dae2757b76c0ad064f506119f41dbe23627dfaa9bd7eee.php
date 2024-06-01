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

/* Foody/template/common/language.twig */
class __TwigTemplate_1b45c807d0c64a54aa0ffdb41b9686f65069cf58977ce04256139e856f3d476d extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "  <div class=\"pull-left\">
    <form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <div class=\"btn-group\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    // line 7
                    echo "            <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "</button>
          ";
                }
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        <div class=\"dropdown-menu dropdown-menu-right\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 12
                echo "            <button class=\"dropdown-item\" type=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 12);
                echo "</button>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\" />
      <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 17
            echo ($context["redirect"] ?? null);
            echo "\" />
    </form>
  </div> 
";
        }
    }

    public function getTemplateName()
    {
        return "Foody/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  82 => 14,  73 => 12,  69 => 11,  66 => 10,  60 => 9,  54 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if languages|length > 1 %}
  <div class=\"pull-left\">
    <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <div class=\"btn-group\">
        {% for language in languages %}
          {% if language.code == code %}
            <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">{{ language.name }}</button>
          {% endif %}
        {% endfor %}
        <div class=\"dropdown-menu dropdown-menu-right\">
          {% for language in languages %}
            <button class=\"dropdown-item\" type=\"button\">{{ language.name }}</button>
          {% endfor %}
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\" />
      <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\" />
    </form>
  </div> 
{% endif %}
", "Foody/template/common/language.twig", "");
    }
}

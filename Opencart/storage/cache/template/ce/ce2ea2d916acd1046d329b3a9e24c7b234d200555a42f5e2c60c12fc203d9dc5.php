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
class __TwigTemplate_de8f87f4ed63bdebd6847297d1dcee8f7e249fd20a8ff9649d1b86c573e73d92 extends \Twig\Template
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
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\" style=\"margin:0;\">
    <div class=\"btn-group\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                echo "
        ";
                // line 6
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    // line 7
                    echo "          <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "</button>
        ";
                }
                // line 9
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
      <div class=\"dropdown-menu dropdown-menu-right\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 14
                echo "          <button class=\"dropdown-item\" type=\"button\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 14);
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "      </div>
    </div>

    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 20
            echo ($context["redirect"] ?? null);
            echo "\" />

  </form> 
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
        return array (  90 => 20,  84 => 16,  75 => 14,  71 => 13,  67 => 11,  60 => 9,  54 => 7,  52 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if languages|length > 1 %}
  <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\" style=\"margin:0;\">
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
{% endif %}
", "Foody/template/common/language.twig", "");
    }
}

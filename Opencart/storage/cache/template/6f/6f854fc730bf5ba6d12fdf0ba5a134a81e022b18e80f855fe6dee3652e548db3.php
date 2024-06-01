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

/* Foody/template/product/search.twig */
class __TwigTemplate_714090e50583391eb811030ed8f660e86293aab445deb7051e6a233233f3d8f0 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

 <!-- Breadcrumb Start -->
  <div class=\"product-search\">
      <div class=\"container-fluid\">
          <div class=\"row px-xl-5\">
              <div class=\"col-12\">
                  <nav class=\"breadcrumb bg-light mb-30\">
                      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "                              <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</span>
                          ";
            } else {
                // line 13
                echo "                              <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
                          ";
            }
            // line 15
            echo "                      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                  </nav>
              </div>
          </div>
      </div>
  </div>
    <!-- Breadcrumb End -->

";
        // line 23
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

 <!-- Breadcrumb Start -->
  <div class=\"product-search\">
      <div class=\"container-fluid\">
          <div class=\"row px-xl-5\">
              <div class=\"col-12\">
                  <nav class=\"breadcrumb bg-light mb-30\">
                      {% for breadcrumb in breadcrumbs %}
                          {% if loop.last %}
                              <span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
                          {% else %}
                              <a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                          {% endif %}
                      {% endfor %}
                  </nav>
              </div>
          </div>
      </div>
  </div>
    <!-- Breadcrumb End -->

{{ footer }}", "Foody/template/product/search.twig", "");
    }
}

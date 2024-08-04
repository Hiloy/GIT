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

/* Foody/template/account/return_list.twig */
class __TwigTemplate_497e5aa383061b1c5b685bcc5bcbf502a45a777f01486108955d31ed77ba7dc0 extends \Twig\Template
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
<div id=\"account-return\" class=\"container-fluid\">
  <!-- Breadcrumb Start -->
      <div class=\"row px-xl-5\">
          <div class=\"col-12\">
              <nav class=\"breadcrumb bg-light mb-30\">
                  ";
        // line 7
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
            // line 8
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                // line 9
                echo "                          <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
                      ";
            } else {
                // line 11
                echo "                          <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</a>
                      ";
            }
            // line 13
            echo "                  ";
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
        // line 14
        echo "              </nav>
          </div>
      </div>
  <!-- Breadcrumb End -->
  <div class=\"row px-xl-5\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 21
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 25
            echo "    ";
        }
        // line 26
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"bg-light p-30 mb-5\">
        <h1>";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        ";
        // line 29
        if (($context["returns"] ?? null)) {
            // line 30
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">";
            // line 34
            echo ($context["column_return_id"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 35
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 36
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 37
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 38
            echo ($context["column_customer"] ?? null);
            echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
        
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 45
                echo "            <tr>
              <td class=\"text-right\">#";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 46);
                echo "</td>
              <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["return"], "status", [], "any", false, false, false, 47);
                echo "</td>
              <td class=\"text-left\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 48);
                echo "</td>
              <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 49);
                echo "</td>
              <td class=\"text-left\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["return"], "name", [], "any", false, false, false, 50);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["return"], "href", [], "any", false, false, false, 51);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "              </tbody>
        
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 59
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 60
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
        ";
        } else {
            // line 63
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 65
        echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><a href=\"";
        // line 66
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
      </div>
      ";
        // line 69
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 70
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "Foody/template/account/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 72,  245 => 70,  241 => 69,  233 => 66,  230 => 65,  224 => 63,  218 => 60,  214 => 59,  207 => 54,  196 => 51,  192 => 50,  188 => 49,  184 => 48,  180 => 47,  176 => 46,  173 => 45,  169 => 44,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  138 => 30,  136 => 29,  132 => 28,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 20,  104 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-return\" class=\"container-fluid\">
  <!-- Breadcrumb Start -->
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
  <!-- Breadcrumb End -->
  <div class=\"row px-xl-5\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <div class=\"bg-light p-30 mb-5\">
        <h1>{{ heading_title }}</h1>
        {% if returns %}
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">{{ column_return_id }}</td>
                <td class=\"text-left\">{{ column_status }}</td>
                <td class=\"text-left\">{{ column_date_added }}</td>
                <td class=\"text-right\">{{ column_order_id }}</td>
                <td class=\"text-left\">{{ column_customer }}</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
        
            {% for return in returns %}
            <tr>
              <td class=\"text-right\">#{{ return.return_id }}</td>
              <td class=\"text-left\">{{ return.status }}</td>
              <td class=\"text-left\">{{ return.date_added }}</td>
              <td class=\"text-right\">{{ return.order_id }}</td>
              <td class=\"text-left\">{{ return.name }}</td>
              <td class=\"text-right\"><a href=\"{{ return.href }}\" data-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            {% endfor %}
              </tbody>
        
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-right\">{{ results }}</div>
        </div>
        {% else %}
        <p>{{ text_empty }}</p>
        {% endif %}
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }} ", "Foody/template/account/return_list.twig", "");
    }
}

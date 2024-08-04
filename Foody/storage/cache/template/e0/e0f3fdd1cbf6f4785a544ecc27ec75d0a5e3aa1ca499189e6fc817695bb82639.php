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

/* Foody/template/account/order_list.twig */
class __TwigTemplate_0fe297dbf035c1ef8e67930c86715b39ad4be314c38828590e0348b4fe5fa3d6 extends \Twig\Template
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
<div id=\"account-order\" class=\"container-fluid\">
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
        if (($context["orders"] ?? null)) {
            // line 30
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">Переглянути</td>
                ";
            // line 36
            echo "                ";
            // line 37
            echo "                ";
            // line 38
            echo "                <td class=\"text-left\">";
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 39
            echo ($context["column_total"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 40
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                ";
            // line 42
            echo "              </tr>
            </thead>
            <tbody>
             ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 46
                echo "              <tr>
                <td class=\"text-right\"><a href=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 47);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                ";
                // line 49
                echo "                ";
                // line 50
                echo "                ";
                // line 51
                echo "                <td class=\"text-left\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 51);
                echo "</td>
                <td class=\"text-right\">";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 52);
                echo "</td>
                <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 53);
                echo "</td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 60
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 61
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
        ";
        } else {
            // line 64
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 66
        echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><a href=\"";
        // line 67
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
        </div>
      </div>
      ";
        // line 70
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 71
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Foody/template/account/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 73,  239 => 71,  235 => 70,  227 => 67,  224 => 66,  218 => 64,  212 => 61,  208 => 60,  202 => 56,  193 => 53,  189 => 52,  184 => 51,  182 => 50,  180 => 49,  174 => 47,  171 => 46,  167 => 45,  162 => 42,  158 => 40,  154 => 39,  149 => 38,  147 => 37,  145 => 36,  138 => 30,  136 => 29,  132 => 28,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 20,  104 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-order\" class=\"container-fluid\">
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
        {% if orders %}
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-right\">Переглянути</td>
                {# <td class=\"text-right\">{{ column_order_id }}</td> #}
                {# <td class=\"text-left\">{{ column_customer }}</td> #}
                {# <td class=\"text-right\">{{ column_product }}</td> #}
                <td class=\"text-left\">{{ column_status }}</td>
                <td class=\"text-right\">{{ column_total }}</td>
                <td class=\"text-left\">{{ column_date_added }}</td>
                {# <td></td> #}
              </tr>
            </thead>
            <tbody>
             {% for order in orders %}
              <tr>
                <td class=\"text-right\"><a href=\"{{ order.view }}\" data-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
                {# <td class=\"text-right\">#{{ order.order_id }}</td> #}
                {# <td class=\"text-left\">{{ order.name }}</td> #}
                {# <td class=\"text-right\">{{ order.products }}</td> #}
                <td class=\"text-left\">{{ order.status }}</td>
                <td class=\"text-right\">{{ order.total }}</td>
                <td class=\"text-left\">{{ order.date_added }}</td>
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
          <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_back }}</a></div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "Foody/template/account/order_list.twig", "");
    }
}

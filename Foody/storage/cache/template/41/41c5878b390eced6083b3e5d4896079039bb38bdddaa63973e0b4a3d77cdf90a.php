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
class __TwigTemplate_383888a09f624640daa77fcfe5c6a67f1fff08ea190a8dedd1f66b1dc0b19e61 extends \Twig\Template
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
                <td class=\"text-right\">";
            // line 34
            echo ($context["column_order_id"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 35
            echo ($context["column_customer"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 36
            echo ($context["column_product"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 37
            echo ($context["column_status"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 38
            echo ($context["column_total"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 39
            echo ($context["column_date_added"] ?? null);
            echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
             ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 45
                echo "              <tr>
                <td class=\"text-right\">#";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 46);
                echo "</td>
                <td class=\"text-left\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 47);
                echo "</td>
                <td class=\"text-right\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 48);
                echo "</td>
                <td class=\"text-left\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 49);
                echo "</td>
                <td class=\"text-right\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 50);
                echo "</td>
                <td class=\"text-left\">";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 51);
                echo "</td>
                <td class=\"text-right\"><a href=\"";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 52);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </tbody>
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
        return array (  256 => 72,  251 => 70,  247 => 69,  239 => 66,  236 => 65,  230 => 63,  224 => 60,  220 => 59,  214 => 55,  203 => 52,  199 => 51,  195 => 50,  191 => 49,  187 => 48,  183 => 47,  179 => 46,  176 => 45,  172 => 44,  164 => 39,  160 => 38,  156 => 37,  152 => 36,  148 => 35,  144 => 34,  138 => 30,  136 => 29,  132 => 28,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 20,  104 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
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
                <td class=\"text-right\">{{ column_order_id }}</td>
                <td class=\"text-left\">{{ column_customer }}</td>
                <td class=\"text-right\">{{ column_product }}</td>
                <td class=\"text-left\">{{ column_status }}</td>
                <td class=\"text-right\">{{ column_total }}</td>
                <td class=\"text-left\">{{ column_date_added }}</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
             {% for order in orders %}
              <tr>
                <td class=\"text-right\">#{{ order.order_id }}</td>
                <td class=\"text-left\">{{ order.name }}</td>
                <td class=\"text-right\">{{ order.products }}</td>
                <td class=\"text-left\">{{ order.status }}</td>
                <td class=\"text-right\">{{ order.total }}</td>
                <td class=\"text-left\">{{ order.date_added }}</td>
                <td class=\"text-right\"><a href=\"{{ order.view }}\" data-toggle=\"tooltip\" title=\"{{ button_view }}\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
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
{{ footer }}
", "Foody/template/account/order_list.twig", "");
    }
}

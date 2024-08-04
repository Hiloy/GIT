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

/* Foody/template/account/reward.twig */
class __TwigTemplate_80350d362aba2aa0b18baa8c07818849e9d3a2284e4d86be8134ceb49e522224 extends \Twig\Template
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
<div id=\"account-reward\" class=\"container\">
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
  <div class=\"row\">";
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
      <h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 28
        echo ($context["text_total"] ?? null);
        echo " <b>";
        echo ($context["total"] ?? null);
        echo "</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 33
        echo ($context["column_date_added"] ?? null);
        echo "</td>
              <td class=\"text-left\">";
        // line 34
        echo ($context["column_description"] ?? null);
        echo "</td>
              <td class=\"text-right\">";
        // line 35
        echo ($context["column_points"] ?? null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 40
        if (($context["rewards"] ?? null)) {
            // line 41
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rewards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
                // line 42
                echo "          <tr>
            <td class=\"text-left\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "date_added", [], "any", false, false, false, 43);
                echo "</td>
            <td class=\"text-left\">";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["reward"], "order_id", [], "any", false, false, false, 44)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "href", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 44);
                    echo "</a> ";
                } else {
                    // line 45
                    echo "              ";
                    echo twig_get_attribute($this->env, $this->source, $context["reward"], "description", [], "any", false, false, false, 45);
                    echo "
              ";
                }
                // line 46
                echo "</td>
            <td class=\"text-right\">";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["reward"], "points", [], "any", false, false, false, 47);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "          ";
        } else {
            // line 51
            echo "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 52
            echo ($context["text_empty"] ?? null);
            echo "</td>
          </tr>
          ";
        }
        // line 55
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
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 64
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 66
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 67
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/reward.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 69,  241 => 67,  237 => 66,  230 => 64,  224 => 61,  220 => 60,  213 => 55,  207 => 52,  204 => 51,  201 => 50,  192 => 47,  189 => 46,  183 => 45,  175 => 44,  171 => 43,  168 => 42,  163 => 41,  161 => 40,  153 => 35,  149 => 34,  145 => 33,  135 => 28,  131 => 27,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  109 => 21,  106 => 20,  104 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-reward\" class=\"container\">
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
  <div class=\"row\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <p>{{ text_total }} <b>{{ total }}</b>.</p>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">{{ column_date_added }}</td>
              <td class=\"text-left\">{{ column_description }}</td>
              <td class=\"text-right\">{{ column_points }}</td>
            </tr>
          </thead>
          <tbody>
          
          {% if rewards %}
          {% for reward in rewards %}
          <tr>
            <td class=\"text-left\">{{ reward.date_added }}</td>
            <td class=\"text-left\">{% if reward.order_id %} <a href=\"{{ reward.href }}\">{{ reward.description }}</a> {% else %}
              {{ reward.description }}
              {% endif %}</td>
            <td class=\"text-right\">{{ reward.points }}</td>
          </tr>
          {% endfor %}
          {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"3\">{{ text_empty }}</td>
          </tr>
          {% endif %}
            </tbody>
          
        </table>
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">{{ pagination }}</div>
        <div class=\"col-sm-6 text-right\">{{ results }}</div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "Foody/template/account/reward.twig", "");
    }
}

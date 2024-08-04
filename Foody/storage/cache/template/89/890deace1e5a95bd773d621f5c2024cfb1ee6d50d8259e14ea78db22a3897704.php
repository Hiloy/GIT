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

/* Foody/template/account/address_list.twig */
class __TwigTemplate_5d399f820a9d7a15d1641cd33facbe92a62e48ff3a4c9aecaaeb63f200486ffd extends \Twig\Template
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
<div id=\"account-address\" class=\"container-fluid\">
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
  ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 21
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 24
        echo "  <div class=\"row px-xl-5\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 25
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 27
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 31
            echo "    ";
        }
        // line 32
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"bg-light p-30 mb-5\">
        <h2>";
        // line 34
        echo ($context["text_address_book"] ?? null);
        echo "</h2>
        ";
        // line 35
        if (($context["addresses"] ?? null)) {
            // line 36
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 39
                echo "             <form  action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 39);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-address-";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address_id", [], "any", false, false, false, 39);
                echo "\">
            <tr>
              <td class=\"text-left\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 42);
                echo "\" class=\"btn btn-info\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> &nbsp;
              <a href = \"";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 43);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('";
                echo ($context["text_confirm"] ?? null);
                echo "')\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
            </tr>
            </form>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "          </table>
        </div>
        ";
        } else {
            // line 50
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        ";
        }
        // line 52
        echo "        
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 54
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 55
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a></div>
        </div>
      </div>
      ";
        // line 58
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 59
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 61
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 61,  231 => 59,  227 => 58,  219 => 55,  213 => 54,  209 => 52,  203 => 50,  198 => 47,  182 => 43,  176 => 42,  172 => 41,  164 => 39,  160 => 38,  156 => 36,  154 => 35,  150 => 34,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  127 => 27,  124 => 26,  122 => 25,  117 => 24,  111 => 22,  108 => 21,  102 => 19,  100 => 18,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}
<div id=\"account-address\" class=\"container-fluid\">
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
  {% if success %}
  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> {{ success }}</div>
  {% endif %}
  {% if error_warning %}
  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
  {% endif %}
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
        <h2>{{ text_address_book }}</h2>
        {% if addresses %}
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            {% for result in addresses %}
             <form  action=\"{{ result.delete }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-address-{{ result.address_id }}\">
            <tr>
              <td class=\"text-left\">{{ result.address }}</td>
              <td class=\"text-right\"><a href=\"{{ result.update }}\" class=\"btn btn-info\">{{ button_edit }}</a> &nbsp;
              <a href = \"{{ result.delete }}\" data-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\" onclick=\"return confirm('{{ text_confirm }}')\">{{ button_delete }}</a></td>
            </tr>
            </form>
            {% endfor %}
          </table>
        </div>
        {% else %}
        <p>{{ text_empty }}</p>
        {% endif %}
        
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"{{ back }}\" class=\"btn btn-default\">{{ button_back }}</a></div>
          <div class=\"pull-right\"><a href=\"{{ add }}\" class=\"btn btn-primary\">{{ button_new_address }}</a></div>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "Foody/template/account/address_list.twig", "");
    }
}

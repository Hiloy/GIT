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

/* catalog/attribute_form.twig */
class __TwigTemplate_db5d7dee5da7c6762ae6046550f4a20ae8d5ed85048a75aec584449bd270f19a extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-attribute\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 28
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 31
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 31);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 31);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
            echo "\" /></span>
                <input type=\"text\" name=\"attribute_description[";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["attribute_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["attribute_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 32)] ?? null) : null), "name", [], "any", false, false, false, 32)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
              </div>
              ";
            // line 34
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null)) {
                // line 35
                echo "              <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35)] ?? null) : null);
                echo "</div>
              ";
            }
            // line 37
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-attribute-group\">";
        // line 41
        echo ($context["entry_attribute_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"attribute_group_id\" id=\"input-attribute-group\" class=\"form-control\">
                <option value=\"0\"></option>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 46) == ($context["attribute_group_id"] ?? null))) {
                // line 47
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 47);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 47);
                echo "</option>
                ";
            } else {
                // line 49
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 49);
                echo "</option>
                ";
            }
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "              </select>
              ";
        // line 53
        if (($context["error_attribute_group"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_attribute_group"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 59
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 61
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 69
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/attribute_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 69,  209 => 61,  204 => 59,  199 => 56,  193 => 54,  191 => 53,  188 => 52,  182 => 51,  174 => 49,  166 => 47,  163 => 46,  159 => 45,  152 => 41,  147 => 38,  141 => 37,  135 => 35,  133 => 34,  124 => 32,  115 => 31,  111 => 30,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-attribute\" data-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"{{ cancel }}\" data-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ul class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
        <li><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">{% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    {% endif %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> {{ text_form }}</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              {% for language in languages %}
              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/{{ language.code }}/{{ language.code }}.png\" title=\"{{ language.name }}\" /></span>
                <input type=\"text\" name=\"attribute_description[{{ language.language_id }}][name]\" value=\"{{ attribute_description[language.language_id] ? attribute_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" class=\"form-control\" />
              </div>
              {% if error_name[language.language_id] %}
              <div class=\"text-danger\">{{ error_name[language.language_id] }}</div>
              {% endif %}
              {% endfor %}
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-attribute-group\">{{ entry_attribute_group }}</label>
            <div class=\"col-sm-10\">
              <select name=\"attribute_group_id\" id=\"input-attribute-group\" class=\"form-control\">
                <option value=\"0\"></option>
                {% for attribute_group in attribute_groups %}
                {% if attribute_group.attribute_group_id == attribute_group_id %}
                <option value=\"{{ attribute_group.attribute_group_id }}\" selected=\"selected\">{{ attribute_group.name }}</option>
                {% else %}
                <option value=\"{{ attribute_group.attribute_group_id }}\">{{ attribute_group.name }}</option>
                {% endif %}
                {% endfor %}
              </select>
              {% if error_attribute_group %}
              <div class=\"text-danger\">{{ error_attribute_group }}</div>
              {% endif %}
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "catalog/attribute_form.twig", "");
    }
}

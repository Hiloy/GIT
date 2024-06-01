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

/* Foody/template/extension/module/filter.twig */
class __TwigTemplate_19d8250125cb8ea52c5c1b1520cd67e29b26138aeb26018bb95e65200c13974c extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 2
            echo "    <h5 class=\"section-title position-relative text-uppercase mb-3\">
        <span class=\"bg-secondary pr-3\">";
            // line 3
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 3);
            echo "</span>
    </h5>
    <div class=\"bg-light p-4 mb-3 filter-block\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 7
                echo "            <div class=\"custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3 pl-0\"
                 id=\"filter-group";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 8);
                echo "\">

                <input type=\"checkbox\" class=\"custom-control-input\" id=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 10);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 10);
                echo "\"
                       name=\"filter[]\" value=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 11);
                echo "\"
                       ";
                // line 12
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 12), ($context["filter_category"] ?? null))) {
                    echo "checked";
                }
                echo ">
                <label class=\"custom-control-label margin-left-30\"
                       for=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 14);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 14);
                echo "
                </label>

            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary btn-block\">";
        // line 22
        echo ($context["button_filter"] ?? null);
        echo "</button>

<script type=\"text/javascript\">
    \$('#button-filter').on('click', function () {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = '";
        // line 32
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
    });
</script>";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  104 => 22,  101 => 21,  94 => 19,  79 => 14,  72 => 12,  68 => 11,  62 => 10,  57 => 8,  54 => 7,  50 => 6,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for filter_group in filter_groups %}
    <h5 class=\"section-title position-relative text-uppercase mb-3\">
        <span class=\"bg-secondary pr-3\">{{ filter_group.name }}</span>
    </h5>
    <div class=\"bg-light p-4 mb-3 filter-block\">
        {% for filter in filter_group.filter %}
            <div class=\"custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3 pl-0\"
                 id=\"filter-group{{ filter_group.filter_group_id }}\">

                <input type=\"checkbox\" class=\"custom-control-input\" id=\"{{ filter.name }}-{{ filter.filter_id }}\"
                       name=\"filter[]\" value=\"{{ filter.filter_id }}\"
                       {% if filter.filter_id in filter_category %}checked{% endif %}>
                <label class=\"custom-control-label margin-left-30\"
                       for=\"{{ filter.name }}-{{ filter.filter_id }}\">{{ filter.name }}
                </label>

            </div>
        {% endfor %}
    </div>
{% endfor %}

<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary btn-block\">{{ button_filter }}</button>

<script type=\"text/javascript\">
    \$('#button-filter').on('click', function () {
        filter = [];

        \$('input[name^=\\'filter\\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = '{{ action }}&filter=' + filter.join(',');
    });
</script>", "Foody/template/extension/module/filter.twig", "");
    }
}

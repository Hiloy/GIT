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

/* default/template/extension/module/custom/total.twig */
class __TwigTemplate_1f3327523135dd6970baa81b40a9988e33736116bb42ae67c1cdc2adfceb41d8 extends \Twig\Template
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
        echo "<table class=\"table table-bordered\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            echo " 
\t\t<tr>
\t\t\t<td class=\"text-right\"><strong>";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 4);
            echo ":</strong></td>
\t\t\t<td class=\"text-right\">";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 5);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo " 
</table>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/custom/total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  51 => 5,  47 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-bordered\">
\t{% for total in totals %} 
\t\t<tr>
\t\t\t<td class=\"text-right\"><strong>{{ total.title }}:</strong></td>
\t\t\t<td class=\"text-right\">{{ total.text }}</td>
\t\t</tr>
\t{% endfor %} 
</table>", "default/template/extension/module/custom/total.twig", "");
    }
}

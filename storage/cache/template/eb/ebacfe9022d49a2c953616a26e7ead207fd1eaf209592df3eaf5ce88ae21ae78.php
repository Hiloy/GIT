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

/* default/template/mail/order_edit.twig */
class __TwigTemplate_1947457be0c9668863851c9488b0df83786c41bf6d948320c2d7d8930225c9ee extends \Twig\Template
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
        echo ($context["text_order_id"] ?? null);
        echo " ";
        echo ($context["order_id"] ?? null);
        echo "
";
        // line 2
        echo ($context["text_date_added"] ?? null);
        echo " ";
        echo ($context["date_added"] ?? null);
        echo "

";
        // line 4
        echo ($context["text_order_status"] ?? null);
        echo "

";
        // line 6
        echo ($context["order_status"] ?? null);
        echo "

";
        // line 8
        if (($context["link"] ?? null)) {
            // line 9
            echo ($context["text_link"] ?? null);
            echo "

";
            // line 11
            echo ($context["link"] ?? null);
            echo "
";
        }
        // line 13
        if (($context["comment"] ?? null)) {
            // line 14
            echo "
";
            // line 15
            echo ($context["text_comment"] ?? null);
            echo "

";
            // line 17
            echo ($context["comment"] ?? null);
            echo "
";
            // line 18
            echo ($context["text_footer"] ?? null);
            echo "
";
        } else {
            // line 19
            echo " 
";
            // line 20
            echo ($context["text_footer"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  91 => 19,  86 => 18,  82 => 17,  77 => 15,  74 => 14,  72 => 13,  67 => 11,  62 => 9,  60 => 8,  55 => 6,  50 => 4,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ text_order_id }} {{ order_id }}
{{ text_date_added }} {{ date_added }}

{{ text_order_status }}

{{ order_status }}

{% if link %}
{{ text_link }}

{{ link }}
{% endif %}
{% if comment %}

{{ text_comment }}

{{ comment }}
{{ text_footer }}
{% else %} 
{{ text_footer }}
{% endif %}", "default/template/mail/order_edit.twig", "");
    }
}

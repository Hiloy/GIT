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

/* Foody/template/common/search.twig */
class __TwigTemplate_8de8b0775ab3d3917268f76c3c535f9d7b382929d76924198ba6b943ddc0d789 extends \Twig\Template
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
        echo "<div class=\"input-group\" id=\"search\">
    <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\">
    <div class=\"input-group-append\">
        <button type=\"button\" class=\"btn btn-default input-group-text bg-transparent text-primary border-left-0\">
            <i class=\"fa fa-search\"></i>
        </button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"input-group\" id=\"search\">
    <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\">
    <div class=\"input-group-append\">
        <button type=\"button\" class=\"btn btn-default input-group-text bg-transparent text-primary border-left-0\">
            <i class=\"fa fa-search\"></i>
        </button>
    </div>
</div>", "Foody/template/common/search.twig", "");
    }
}

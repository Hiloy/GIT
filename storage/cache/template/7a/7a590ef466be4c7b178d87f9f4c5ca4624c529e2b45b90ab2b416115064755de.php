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

/* Foody/template/common/home.twig */
class __TwigTemplate_fe88a659af1dfbd73c91648bbbf3bae891139954442594a01572bc9dc6402da5 extends \Twig\Template
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
        echo "    ";
        echo ($context["header"] ?? null);
        echo "

    ";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "

    ";
        // line 5
        echo ($context["content_bottom"] ?? null);
        echo "

    ";
        // line 7
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ header }}

    {{ content_top }}

    {{ content_bottom }}

    {{footer}}

", "Foody/template/common/home.twig", "");
    }
}

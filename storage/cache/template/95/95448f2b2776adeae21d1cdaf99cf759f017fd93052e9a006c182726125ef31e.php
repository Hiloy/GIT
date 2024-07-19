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

/* Foody/template/extension/module/custom/comment.twig */
class __TwigTemplate_b75ccd1e7f3bf2a70cf94f330315d7487f038e8e33d57de127b8f18b3e842ce0 extends \Twig\Template
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
        echo "111";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/comment.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("111{# <h2>{{ heading_comment }}</h2>
<div class=\"form-group\">
\t<label class=\"control-label\" for=\"input-comment\">{{ entry_comment }}</label>
\t<textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
</div> #}", "Foody/template/extension/module/custom/comment.twig", "");
    }
}

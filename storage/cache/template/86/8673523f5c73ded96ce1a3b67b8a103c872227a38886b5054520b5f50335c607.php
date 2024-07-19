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
class __TwigTemplate_f4319d34a1209f52bf9d28dd14ddc282eceb2ccac7f155ef8413620dbd87fa85 extends \Twig\Template
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
        echo "<h2>";
        echo ($context["heading_comment"] ?? null);
        echo "</h2>
<div class=\"form-group\">
\t<label class=\"control-label\" for=\"input-comment\">";
        // line 3
        echo ($context["entry_comment"] ?? null);
        echo "</label>
\t<textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 4
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
</div>";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>{{ heading_comment }}</h2>
<div class=\"form-group\">
\t<label class=\"control-label\" for=\"input-comment\">{{ entry_comment }}</label>
\t<textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
</div>", "Foody/template/extension/module/custom/comment.twig", "");
    }
}

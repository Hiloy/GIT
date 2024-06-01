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

/* Foody/template/common/menu.twig */
class __TwigTemplate_5d0897e80f0486813436918650ac51a75ef42184facf2760b75f56d4a664d71a extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
    <h6 class=\"text-dark m-0\">
    <i class=\"fa fa-bars mr-2\"></i>";
            // line 4
            echo ($context["text_category"] ?? null);
            echo "
    </h6>
    <i class=\"fa fa-angle-down text-dark\"></i>
  </a>
  <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
    <div class=\"navbar-nav w-100\">

    </div>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "Foody/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
  <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
    <h6 class=\"text-dark m-0\">
    <i class=\"fa fa-bars mr-2\"></i>{{ text_category }}
    </h6>
    <i class=\"fa fa-angle-down text-dark\"></i>
  </a>
  <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
    <div class=\"navbar-nav w-100\">

    </div>
  </nav>
{% endif %}
", "Foody/template/common/menu.twig", "");
    }
}

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

/* Foody/template/extension/module/html.twig */
class __TwigTemplate_5ab394d35fffc01f6e79d1d743abd1dc37fa9fd889968c0e7930507394a1d32a extends \Twig\Template
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
        echo "<div>
  ";
        // line 2
        if (($context["heading_title"] ?? null)) {
            // line 3
            echo "    <div class=\"container-fluid pt-5\">
      <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
        <span class=\"bg-secondary pr-3\">";
            // line 5
            echo ($context["heading_title"] ?? null);
            echo "</span>
      </h2>
    </div>
  ";
        }
        // line 9
        echo "  ";
        echo ($context["html"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
  {% if heading_title %}
    <div class=\"container-fluid pt-5\">
      <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
        <span class=\"bg-secondary pr-3\">{{ heading_title }}</span>
      </h2>
    </div>
  {% endif %}
  {{ html }}
</div>
", "Foody/template/extension/module/html.twig", "");
    }
}

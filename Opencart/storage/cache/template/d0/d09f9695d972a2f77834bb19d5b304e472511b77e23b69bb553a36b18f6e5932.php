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
class __TwigTemplate_0676c7c773822303ffbfaaf883eab76c8d55b6e57251617ab5706f9a1ff8620f extends \Twig\Template
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





    <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-5.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-6.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-7.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

 ";
        // line 44
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
        return array (  87 => 44,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {{ header }}

    {{ content_top }}





    <!-- Vendor Start -->
    <div class=\"container-fluid py-5\">
        <div class=\"row px-xl-5\">
            <div class=\"col\">
                <div class=\"owl-carousel vendor-carousel\">
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-5.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-6.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-7.jpg\" alt=\"\">
                    </div>
                    <div class=\"bg-light p-4\">
                        <img src=\"catalog/view/theme/foody/assets/img/vendor-8.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

 {{footer}}

", "Foody/template/common/home.twig", "");
    }
}

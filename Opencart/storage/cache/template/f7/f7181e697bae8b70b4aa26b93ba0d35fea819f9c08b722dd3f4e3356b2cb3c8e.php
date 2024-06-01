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

/* Foody/template/extension/module/category.twig */
class __TwigTemplate_523ce2407c126cec4ac4e0ce195fbe94f675dc128c196bc7214d2648c69dfe56 extends \Twig\Template
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
        echo " <!-- Categories Start -->
<div class=\"container-fluid pt-5\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Categories</span></h2>
    <div class=\"row px-xl-5 pb-3\">
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/cat-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        
    </div>
</div>
<!-- Categories End -->


";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/category.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <!-- Categories Start -->
<div class=\"container-fluid pt-5\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Categories</span></h2>
    <div class=\"row px-xl-5 pb-3\">
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/foody/assets/img/cat-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        
    </div>
</div>
<!-- Categories End -->


{# <div class=\"list-group\">
  {% for category in categories %}
  {% if category.category_id == category_id %} 
  <a href=\"{{ category.href }}\" class=\"list-group-item active\">{{ category.name }}</a> 
  {% if category.children %}
  {% for child in category.children %}
  {% if child.category_id == child_id %}
  <a href=\"{{ child.href }}\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a> 
  {% else %} 
  <a href=\"{{ child.href }}\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>
  {% endif %}
  {% endfor %}
  {% endif %}
  {% else %} <a href=\"{{ category.href }}\" class=\"list-group-item\">{{ category.name }}</a>
  {% endif %}
  {% endfor %}
</div> #}
", "Foody/template/extension/module/category.twig", "");
    }
}

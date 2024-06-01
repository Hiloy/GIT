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

/* Foody/template/extension/module/featured.twig */
class __TwigTemplate_e621bccc0fb424c7a69003ef6d7d0c38f66f4c6042953ba8851c74d1f5d4b77e extends \Twig\Template
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
        echo "<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
    <span class=\"bg-secondary pr-3\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span>
  </h2>

  <div class=\"row px-xl-5\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "      <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
        <div class=\"product-item bg-light mb-4\">
          <div class=\"product-img position-relative overflow-hidden\">
              <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
              <div class=\"product-action\">
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
              </div>
          </div>
          <div class=\"text-center py-4\">
              <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
              <div class=\"d-flex align-items-center justify-content-center mt-2\">
                <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
              </div>
              <div class=\"d-flex align-items-center justify-content-center mb-1\">
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small>(99)</small>
              </div>
            </div>
        </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 37,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
    <span class=\"bg-secondary pr-3\">{{ heading_title }}</span>
  </h2>

  <div class=\"row px-xl-5\">
    {% for product in products %}
      <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
        <div class=\"product-item bg-light mb-4\">
          <div class=\"product-img position-relative overflow-hidden\">
              <img class=\"img-fluid w-100\" src=\"catalog/view/theme/foody/assets/img/product-1.jpg\" alt=\"\">
              <div class=\"product-action\">
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
              </div>
          </div>
          <div class=\"text-center py-4\">
              <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
              <div class=\"d-flex align-items-center justify-content-center mt-2\">
                <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
              </div>
              <div class=\"d-flex align-items-center justify-content-center mb-1\">
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small class=\"fa fa-star text-primary mr-1\"></small>
                <small>(99)</small>
              </div>
            </div>
        </div>
        </div>
    {% endfor %}
  </div>
</div>", "Foody/template/extension/module/featured.twig", "");
    }
}

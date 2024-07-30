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
class __TwigTemplate_0e3e897f74ecfd856aae58ba21b0f85ee7ccf4da4b9153d433b2df9438e67f69 extends \Twig\Template
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
<div class=\"container-fluid pt-5 pb-3 \">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
    <span class=\"bg-secondary pr-3\">";
        // line 4
        echo ($context["title"] ?? null);
        echo "</span>
  </h2>

  <div class=\"row px-xl-5\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "      <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1 product-id-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 9);
            echo "\">
        <div class=\"product-item bg-light mb-4\">
          <div class=\"product-img position-relative overflow-hidden\">
            <img class=\"img-fluid w-100\" src=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12);
            echo "\" alt=\"\">
             <div class=\"product-action\">
              <button type=\"button\" onclick=\"cart.add('";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 14);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" onclick=\"wishlist.add('";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 15);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></button>
              <button type=\"button\" onclick=\"compare.add('";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></button>
            </div> 
          </div>
          <div class=\"text-center py-4\">
            <a class=\"h6 text-decoration-none text-truncate product-name\" href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
            echo "</a>

            ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22)) {
                // line 23
                echo "              <div class=\"d-flex align-items-center justify-content-center mt-2\">
                ";
                // line 24
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                  <h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25);
                    echo "</h5>
                ";
                } else {
                    // line 27
                    echo "                  <h5>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27);
                    echo "</h5>
                  <h6 class=\"text-muted ml-2\">
                    <del>";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                    echo "</del>
                  </h6>
                ";
                }
                // line 32
                echo "
                
              </div>
            ";
            }
            // line 36
            echo "
            <div class=\"d-flex align-items-center justify-content-center mb-1\">
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39) < $context["i"])) {
                    // line 40
                    echo "                  <small class=\"far fa-star text-primary mr-1\"></small>
                ";
                } else {
                    // line 42
                    echo "                  <small class=\"fa fa-star text-primary mr-1\"></small>
                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "              <small>(";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 45);
            echo ")</small>
            </div>
            <div class=\"cart-btns\">
              <button type=\"button\" onclick=\"cart.add('";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 48);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" onclick=\"wishlist.add('";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 49);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></button>
              <button type=\"button\" onclick=\"compare.add('";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 50);
            echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></button>
            </div>

          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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
        return array (  171 => 57,  158 => 50,  154 => 49,  150 => 48,  143 => 45,  137 => 44,  133 => 42,  129 => 40,  126 => 39,  122 => 38,  118 => 36,  112 => 32,  106 => 29,  100 => 27,  94 => 25,  92 => 24,  89 => 23,  87 => 22,  80 => 20,  73 => 16,  69 => 15,  65 => 14,  60 => 12,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3 \">
  <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\">
    <span class=\"bg-secondary pr-3\">{{ title }}</span>
  </h2>

  <div class=\"row px-xl-5\">
    {% for product in products %}
      <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1 product-id-{{ product.product_id }}\">
        <div class=\"product-item bg-light mb-4\">
          <div class=\"product-img position-relative overflow-hidden\">
            <img class=\"img-fluid w-100\" src=\"{{ product.thumb }}\" alt=\"\">
             <div class=\"product-action\">
              <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></button>
              <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></button>
            </div> 
          </div>
          <div class=\"text-center py-4\">
            <a class=\"h6 text-decoration-none text-truncate product-name\" href=\"{{ product.href }}\">{{ product.name }}</a>

            {% if product.price %}
              <div class=\"d-flex align-items-center justify-content-center mt-2\">
                {% if not product.special %}
                  <h5>{{ product.price }}</h5>
                {% else %}
                  <h5>{{ product.special }}</h5>
                  <h6 class=\"text-muted ml-2\">
                    <del>{{product.price}}</del>
                  </h6>
                {% endif %}

                
              </div>
            {% endif %}

            <div class=\"d-flex align-items-center justify-content-center mb-1\">
              {% for i in 1..5 %}
                {% if product.rating < i %}
                  <small class=\"far fa-star text-primary mr-1\"></small>
                {% else %}
                  <small class=\"fa fa-star text-primary mr-1\"></small>
                {% endif %}
              {% endfor %}
              <small>({{ product.reviews }})</small>
            </div>
            <div class=\"cart-btns\">
              <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></button>
              <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></button>
            </div>

          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>", "Foody/template/extension/module/featured.twig", "");
    }
}

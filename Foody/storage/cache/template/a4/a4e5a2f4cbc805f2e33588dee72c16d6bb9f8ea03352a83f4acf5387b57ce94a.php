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

/* foody/template/product_card.twig */
class __TwigTemplate_39139517107dc5364101ecba0893cd4acc427a9844e4d035ccb5943ce635e909 extends \Twig\Template
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
        echo "<div class=\"product-item bg-light mb-4 product-id-";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 1);
        echo "\">
    <div class=\"product-img position-relative overflow-hidden\">
        <img class=\"img-fluid w-100\" src=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 3);
        echo "\" alt=\"\">
        <div id=\"product-3-items\" class=\"product-action\">
            <button type=\"button\" onclick=\"cart.add('";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 5);
        echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-shopping-cart\"></i>
            </button>
            <button type=\"button\" onclick=\"wishlist.add('";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 8);
        echo "');\" class=\"btn btn-outline-dark btn-square add2wishlist ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 8), ($context["wishlist_product_ids"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button type=\"button\" onclick=\"compare.add('";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 11);
        echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-sync-alt\"></i>
            </button>
        </div> 
    </div>
    <div class=\"text-center py-4\">
        <a class=\"h6 text-decoration-none text-truncate\" href=\"";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 17);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 17);
        echo "</a>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                ";
            // line 20
            if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 20)) {
                // line 21
                echo "                    <h5>";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 21);
                echo "</h5>
                ";
            } else {
                // line 23
                echo "                    <h5>";
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 23);
                echo "</h5>
                    <h6 class=\"text-muted ml-2\">
                        <del>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 25);
                echo "</del>
                    </h6>
                ";
            }
            // line 28
            echo "            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"cart-btns mt-2\">
            <button type=\"button\" onclick=\"cart.add('";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 32);
        echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-shopping-cart\"></i>
            </button>
            <button type=\"button\" onclick=\"wishlist.add('";
        // line 35
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 35);
        echo "');\" class=\"btn btn-outline-dark btn-square add2wishlist ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 35), ($context["wishlist_product_ids"] ?? null))) {
            echo "active";
        }
        echo "\" href=\"\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button type=\"button\" onclick=\"compare.add('";
        // line 38
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 38);
        echo "');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-sync-alt\"></i>
            </button>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "foody/template/product_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  118 => 35,  112 => 32,  108 => 30,  104 => 28,  98 => 25,  92 => 23,  86 => 21,  84 => 20,  81 => 19,  79 => 18,  73 => 17,  64 => 11,  54 => 8,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-item bg-light mb-4 product-id-{{ product.product_id }}\">
    <div class=\"product-img position-relative overflow-hidden\">
        <img class=\"img-fluid w-100\" src=\"{{ product.thumb }}\" alt=\"\">
        <div id=\"product-3-items\" class=\"product-action\">
            <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-shopping-cart\"></i>
            </button>
            <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square add2wishlist {% if product.product_id in wishlist_product_ids %}active{% endif %}\" href=\"\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-sync-alt\"></i>
            </button>
        </div> 
    </div>
    <div class=\"text-center py-4\">
        <a class=\"h6 text-decoration-none text-truncate\" href=\"{{ product.href }}\">{{ product.name }}</a>
        {% if product.price %}
            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                {% if not product.special %}
                    <h5>{{ product.price }}</h5>
                {% else %}
                    <h5>{{ product.special }}</h5>
                    <h6 class=\"text-muted ml-2\">
                        <del>{{ product.price }}</del>
                    </h6>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"cart-btns mt-2\">
            <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-shopping-cart\"></i>
            </button>
            <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square add2wishlist {% if product.product_id in wishlist_product_ids %}active{% endif %}\" href=\"\">
                <i class=\"far fa-heart\"></i>
            </button>
            <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\" class=\"btn btn-outline-dark btn-square\" href=\"\">
                <i class=\"fa fa-sync-alt\"></i>
            </button>
        </div>

    </div>
</div>", "foody/template/product_card.twig", "C:\\OSPanel\\domains\\Foody\\catalog\\view\\theme\\foody\\template\\product_card.twig");
    }
}

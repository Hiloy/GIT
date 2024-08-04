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

/* Foody/template/account/wishlist.twig */
class __TwigTemplate_71a559b446b6dd0e25de80c1bbbdd9a081aadf784703dbcdaeedebb3901f359d extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div id=\"account-wishlist\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 11)) {
                // line 12
                echo "                            <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "</span>
                        ";
            } else {
                // line 14
                echo "                            <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</a>
                        ";
            }
            // line 16
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class=\"container-fluid pb-5\">

        <div class=\"row px-xl-5\">

            ";
        // line 27
        if (($context["success"] ?? null)) {
            // line 28
            echo "                <div class=\"col-12\">
                    <div class=\"alert alert-success alert-dismissible fade show\"><i
                                class=\"fa fa-check-circle\"></i> ";
            // line 30
            echo ($context["success"] ?? null);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            ";
        }
        // line 37
        echo "
            <div class=\"col-12 mb-30\" id=\"content\">
                <div class=\"h-100 bg-light p-30\">
                    <h1 class=\"h3\">";
        // line 40
        echo ($context["heading_title"] ?? null);
        echo "</h1>

                    ";
        // line 42
        if (($context["products"] ?? null)) {
            // line 43
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-center\">";
            // line 47
            echo ($context["column_image"] ?? null);
            echo "</td>
                                    <td class=\"text-left\">";
            // line 48
            echo ($context["column_name"] ?? null);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 49
            echo ($context["column_stock"] ?? null);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 50
            echo ($context["column_price"] ?? null);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 51
            echo ($context["column_action"] ?? null);
            echo "</td>
                                </tr>
                                </thead>
                                <tbody>

                                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 57
                echo "                                    <tr>
                                        <td class=\"text-center\">";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
                    echo "\" /></a>";
                }
                echo "</td>
                                        <td class=\"text-left\"><a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                echo "</a></td>
                                        <td class=\"text-right\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 60);
                echo "</td>
                                        <td class=\"text-right\">";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                                                <div class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 62)) {
                        // line 63
                        echo "                                                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                        echo "
                                                    ";
                    } else {
                        // line 64
                        echo " <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                        echo "</s> ";
                    }
                    echo " </div>
                                            ";
                }
                // line 65
                echo "</td>
                                        <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 66);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                                            <a href=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 67);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                </tbody>

                            </table>
                        </div>
                    ";
        } else {
            // line 75
            echo "                        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 77
        echo "                    <div class=\"buttons clearfix\">
                        <div class=\"pull-left\"><a href=\"";
        // line 78
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
                    </div>
                </div>
            </div>


        </div><!-- ./row px-xl-5 -->

    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-compare -->

";
        // line 90
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 90,  255 => 78,  252 => 77,  246 => 75,  239 => 70,  228 => 67,  222 => 66,  219 => 65,  209 => 64,  203 => 63,  200 => 62,  198 => 61,  194 => 60,  188 => 59,  174 => 58,  171 => 57,  167 => 56,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  137 => 43,  135 => 42,  130 => 40,  125 => 37,  115 => 30,  111 => 28,  109 => 27,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"account-wishlist\">

    <!-- Breadcrumb Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">
            <div class=\"col-12\">
                <nav class=\"breadcrumb bg-light mb-30\">
                    {% for breadcrumb in breadcrumbs %}
                        {% if loop.last %}
                            <span class=\"breadcrumb-item active\">{{ breadcrumb.text }}</span>
                        {% else %}
                            <a class=\"breadcrumb-item text-dark\" href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                        {% endif %}
                    {% endfor %}
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <div class=\"container-fluid pb-5\">

        <div class=\"row px-xl-5\">

            {% if success %}
                <div class=\"col-12\">
                    <div class=\"alert alert-success alert-dismissible fade show\"><i
                                class=\"fa fa-check-circle\"></i> {{ success }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            {% endif %}

            <div class=\"col-12 mb-30\" id=\"content\">
                <div class=\"h-100 bg-light p-30\">
                    <h1 class=\"h3\">{{ heading_title }}</h1>

                    {% if products %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <td class=\"text-center\">{{ column_image }}</td>
                                    <td class=\"text-left\">{{ column_name }}</td>
                                    <td class=\"text-right\">{{ column_stock }}</td>
                                    <td class=\"text-right\">{{ column_price }}</td>
                                    <td class=\"text-right\">{{ column_action }}</td>
                                </tr>
                                </thead>
                                <tbody>

                                {% for product in products %}
                                    <tr>
                                        <td class=\"text-center\">{% if product.thumb %}<a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" /></a>{% endif %}</td>
                                        <td class=\"text-left\"><a href=\"{{ product.href }}\">{{ product.name }}</a></td>
                                        <td class=\"text-right\">{{ product.stock }}</td>
                                        <td class=\"text-right\">{% if product.price %}
                                                <div class=\"price\"> {% if not product.special %}
                                                        {{ product.price }}
                                                    {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>
                                            {% endif %}</td>
                                        <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\" data-toggle=\"tooltip\" title=\"{{ button_cart }}\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                                            <a href=\"{{ product.remove }}\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                                    </tr>
                                {% endfor %}
                                </tbody>

                            </table>
                        </div>
                    {% else %}
                        <p>{{ text_empty }}</p>
                    {% endif %}
                    <div class=\"buttons clearfix\">
                        <div class=\"pull-left\"><a href=\"{{ back }}\" class=\"btn btn-primary\">{{ button_back }}</a></div>
                    </div>
                </div>
            </div>


        </div><!-- ./row px-xl-5 -->

    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-compare -->

{{ footer }}", "Foody/template/account/wishlist.twig", "");
    }
}

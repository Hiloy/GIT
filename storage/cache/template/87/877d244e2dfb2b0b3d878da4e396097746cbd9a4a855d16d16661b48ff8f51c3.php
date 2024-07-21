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

/* Foody/template/product/compare.twig */
class __TwigTemplate_720d9c055808df1ac60a9300ede8412cee37de4f46414acd5707bcfce2d82068 extends \Twig\Template
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

<div id=\"product-compare\">

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
        // line 26
        if (($context["success"] ?? null)) {
            // line 27
            echo "                <div class=\"col-12\">
                    <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> ";
            // line 28
            echo ($context["success"] ?? null);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            ";
        }
        // line 35
        echo "
            <div class=\"col-12 h-auto mb-30\" id=\"content\">
                <div class=\"h-100 bg-light p-30\">
                    <h1 class=\"h3\">";
        // line 38
        echo ($context["heading_title"] ?? null);
        echo "</h1>

                    ";
        // line 40
        if (($context["products"] ?? null)) {
            // line 41
            echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <td colspan=\"";
            // line 45
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>";
            // line 51
            echo ($context["text_name"] ?? null);
            echo "</td>
                                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "                                        <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                echo "</strong></a></td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                </tr>

                                <tr>
                                    <td>";
            // line 58
            echo ($context["text_image"] ?? null);
            echo "</td>
                                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 60
                echo "                                        <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                </tr>

                                <tr>
                                    <td>";
            // line 65
            echo ($context["text_price"] ?? null);
            echo "</td>
                                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "                                        <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                                ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "                                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69);
                        echo "
                                                ";
                    } else {
                        // line 70
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 70);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70);
                        echo "
                                                ";
                    }
                    // line 72
                    echo "                                            ";
                }
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                </tr>

                                <tr>
                                    <td>";
            // line 77
            echo ($context["text_availability"] ?? null);
            echo "</td>
                                    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 79
                echo "                                        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 79);
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                </tr>

                                <tr>
                                    <td>";
            // line 84
            echo ($context["text_weight"] ?? null);
            echo "</td>
                                    ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                echo "                                        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 86);
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                </tr>

                                <tr>
                                    <td>";
            // line 91
            echo ($context["text_dimension"] ?? null);
            echo "</td>
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "                                        <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 93);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 93);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 93);
                echo "</td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                </tr>

                                </tbody>

                                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 100
                echo "                                    <thead>
                                    <tr>
                                        <td colspan=\"";
                // line 102
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 102);
                echo "</strong></td>
                                    </tr>
                                    </thead>
                                    ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 106
                    echo "                                        <tbody>
                                        <tr>
                                            <td>";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 108);
                    echo "</td>
                                            ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 110
                        echo "                                                ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 110)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 111
                            echo "                                                    <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 111)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
                                                ";
                        } else {
                            // line 113
                            echo "                                                    <td></td>
                                                ";
                        }
                        // line 115
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "                                        </tr>
                                        </tbody>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                                <tr>
                                    <td></td>
                                    ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 123
                echo "                                        <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 123);
                echo "');\" />
                                            <a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 124);
                echo "\" class=\"btn btn-danger btn-block\">";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo " </tr>
                            </table>
                        </div>
                    ";
        } else {
            // line 129
            echo "                        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 131
        echo "
                </div><!-- ./h-100 bg-light p-30 -->

            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div>

</div><!-- #product-compare -->

";
        // line 141
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 141,  423 => 131,  417 => 129,  411 => 125,  401 => 124,  392 => 123,  388 => 122,  384 => 120,  378 => 119,  370 => 116,  364 => 115,  360 => 113,  354 => 111,  351 => 110,  347 => 109,  343 => 108,  339 => 106,  335 => 105,  327 => 102,  323 => 100,  319 => 99,  313 => 95,  300 => 93,  296 => 92,  292 => 91,  287 => 88,  278 => 86,  274 => 85,  270 => 84,  265 => 81,  256 => 79,  252 => 78,  248 => 77,  243 => 74,  234 => 72,  226 => 70,  220 => 69,  217 => 68,  214 => 67,  210 => 66,  206 => 65,  201 => 62,  184 => 60,  180 => 59,  176 => 58,  171 => 55,  160 => 53,  156 => 52,  152 => 51,  141 => 45,  135 => 41,  133 => 40,  128 => 38,  123 => 35,  113 => 28,  110 => 27,  108 => 26,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"product-compare\">

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
                    <div class=\"alert alert-success alert-dismissible fade show\"><i class=\"fa fa-check-circle\"></i> {{ success }}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                </div>
            {% endif %}

            <div class=\"col-12 h-auto mb-30\" id=\"content\">
                <div class=\"h-100 bg-light p-30\">
                    <h1 class=\"h3\">{{ heading_title }}</h1>

                    {% if products %}
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>
                                    <td colspan=\"{{ products|length + 1 }}\"><strong>{{ text_product }}</strong></td>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>{{ text_name }}</td>
                                    {% for product in products %}
                                        <td><a href=\"{{ product.href }}\"><strong>{{ product.name }}</strong></a></td>
                                    {% endfor %}
                                </tr>

                                <tr>
                                    <td>{{ text_image }}</td>
                                    {% for product in products %}
                                        <td class=\"text-center\">{% if product.thumb %} <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\" /> {% endif %}</td>
                                    {% endfor %}
                                </tr>

                                <tr>
                                    <td>{{ text_price }}</td>
                                    {% for product in products %}
                                        <td>{% if product.price %}
                                                {% if not product.special %}
                                                    {{ product.price }}
                                                {% else %} <strike>{{ product.price }}</strike> {{ product.special }}
                                                {% endif %}
                                            {% endif %}</td>
                                    {% endfor %}
                                </tr>

                                <tr>
                                    <td>{{ text_availability }}</td>
                                    {% for product in products %}
                                        <td>{{ product.availability }}</td>
                                    {% endfor %}
                                </tr>

                                <tr>
                                    <td>{{ text_weight }}</td>
                                    {% for product in products %}
                                        <td>{{ product.weight }}</td>
                                    {% endfor %}
                                </tr>

                                <tr>
                                    <td>{{ text_dimension }}</td>
                                    {% for product in products %}
                                        <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>
                                    {% endfor %}
                                </tr>

                                </tbody>

                                {% for attribute_group in attribute_groups %}
                                    <thead>
                                    <tr>
                                        <td colspan=\"{{ products|length + 1 }}\"><strong>{{ attribute_group.name }}</strong></td>
                                    </tr>
                                    </thead>
                                    {% for key, attribute in attribute_group.attribute %}
                                        <tbody>
                                        <tr>
                                            <td>{{ attribute.name }}</td>
                                            {% for product in products %}
                                                {% if product.attribute[key] %}
                                                    <td> {{ product.attribute[key] }}</td>
                                                {% else %}
                                                    <td></td>
                                                {% endif %}
                                            {% endfor %}
                                        </tr>
                                        </tbody>
                                    {% endfor %}
                                {% endfor %}
                                <tr>
                                    <td></td>
                                    {% for product in products %}
                                        <td><input type=\"button\" value=\"{{ button_cart }}\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('{{ product.product_id }}', '{{ product.minimum }}');\" />
                                            <a href=\"{{ product.remove }}\" class=\"btn btn-danger btn-block\">{{ button_remove }}</a></td>
                                    {% endfor %} </tr>
                            </table>
                        </div>
                    {% else %}
                        <p>{{ text_empty }}</p>
                    {% endif %}

                </div><!-- ./h-100 bg-light p-30 -->

            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div>

</div><!-- #product-compare -->

{{ footer }}", "Foody/template/product/compare.twig", "");
    }
}

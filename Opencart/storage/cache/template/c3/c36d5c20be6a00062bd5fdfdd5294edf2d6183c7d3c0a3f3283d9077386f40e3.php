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

/* Foody/template/product/category.twig */
class __TwigTemplate_ab8b8c0d45265fe3b23ef333acb80d6b4232ac8c677b09963d50c28adc8875b7 extends \Twig\Template
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

<div id=\"product-category\">

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


    <!-- Shop Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">

            ";
        // line 28
        echo ($context["column_left"] ?? null);
        echo "

            ";
        // line 30
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 31
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-6 col-md-8", "col-lg-6"];
            // line 32
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 33
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-9 col-md-8", "col-lg-4"];
            // line 34
            echo "            ";
        } else {
            // line 35
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-12", "col-lg-3"];
            // line 36
            echo "            ";
        }
        // line 37
        echo "
            <!-- Shop Product Start -->
            <div class=\"";
        // line 39
        echo ($context["class"] ?? null);
        echo " id=\"content\"\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4 h3\">
                         <span class=\"bg-secondary pr-3\"> ";
        // line 43
        echo ($context["heading_title"] ?? null);
        echo " </span>
                        </h1>
                    </div>

                     ";
        // line 47
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 48
            echo "                        ";
            if (($context["thumb"] ?? null)) {
                // line 49
                echo "                            <div class=\"col-4 col-sm-2\">
                                <img src=\"";
                // line 50
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\">
                            </div>
                        ";
            }
            // line 53
            echo "                        ";
            if (($context["description"] ?? null)) {
                // line 54
                echo "                            <div class=\"col-8 col-sm-10\">
                                ";
                // line 55
                echo ($context["description"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 58
            echo "                        <div class=\"col-12\">
                            <hr>
                        </div>
                     ";
        }
        // line 62
        echo "
                </div>

                <div class=\"row pb-3\">

                    ";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">";
            // line 71
            echo ($context["text_sort"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 75
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 75) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 76
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 76);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 77);
                    echo "</option>
                                        ";
                } else {
                    // line 79
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 79);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 79);
                    echo "</option>
                                        ";
                }
                // line 81
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                                </select>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"limit-select\">";
            // line 89
            echo ($context["text_limit"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-limit\" onchange=\"location = this.value;\">
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 93
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 93) == ($context["limit"] ?? null))) {
                    // line 94
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 94);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 95);
                    echo "</option>
                                        ";
                } else {
                    // line 97
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 97);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 97);
                    echo "</option>
                                        ";
                }
                // line 99
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                </select>
                            </div>
                        </div>

                        ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 105
                echo "                            <div class=\"";
                echo ($context["card"] ?? null);
                echo " col-sm-6 pb-1\">
                                <div class=\"product-item bg-light mb-4\">
                                    <div class=\"product-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid w-100\" src=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 108);
                echo "\" alt=\"\">
                                        <div class=\"product-action\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"text-center py-4\">
                                        <a class=\"h6 text-decoration-none text-truncate\"
                                           href=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 126);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 126);
                echo "</a>
                                        ";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "                                            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                                                ";
                    // line 129
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 129)) {
                        // line 130
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130);
                        echo "</h5>
                                                ";
                    } else {
                        // line 132
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                        echo "</h5>
                                                    <h6 class=\"text-muted ml-2\">
                                                        <del>";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "</del>
                                                    </h6>
                                                ";
                    }
                    // line 137
                    echo "                                            </div>
                                        ";
                }
                // line 139
                echo "
                                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                                            ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 142
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 142) < $context["i"])) {
                        // line 143
                        echo "                                                    <small class=\"far fa-star text-primary mr-1\"></small>
                                                ";
                    } else {
                        // line 145
                        echo "                                                    <small class=\"fa fa-star text-primary mr-1\"></small>
                                                ";
                    }
                    // line 147
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                        </div>

                                        <div class=\"cart-btns mt-2\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 159);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav>
                                        ";
            // line 174
            echo ($context["pagination"] ?? null);
            echo "
                                    </nav>
                                </div>
                                <div class=\"col-md-6 text-right my-auto\">
                                    ";
            // line 178
            echo ($context["results"] ?? null);
            echo "
                                </div>
                            </div>
                        </div>

                    ";
        } else {
            // line 184
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 185
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        </div>
                    ";
        }
        // line 188
        echo "
                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


";
        // line 200
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 200,  460 => 188,  454 => 185,  451 => 184,  442 => 178,  435 => 174,  428 => 169,  412 => 159,  405 => 155,  398 => 151,  393 => 148,  387 => 147,  383 => 145,  379 => 143,  376 => 142,  372 => 141,  368 => 139,  364 => 137,  358 => 134,  352 => 132,  346 => 130,  344 => 129,  341 => 128,  339 => 127,  333 => 126,  322 => 118,  315 => 114,  308 => 110,  303 => 108,  296 => 105,  292 => 104,  286 => 100,  280 => 99,  272 => 97,  267 => 95,  262 => 94,  259 => 93,  255 => 92,  249 => 89,  240 => 82,  234 => 81,  226 => 79,  221 => 77,  216 => 76,  213 => 75,  209 => 74,  203 => 71,  198 => 68,  196 => 67,  189 => 62,  183 => 58,  177 => 55,  174 => 54,  171 => 53,  161 => 50,  158 => 49,  155 => 48,  153 => 47,  146 => 43,  139 => 39,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  115 => 30,  110 => 28,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"product-category\">

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


    <!-- Shop Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">

            {{ column_left }}

            {% if column_left and column_right %}
                {% set class, card = 'col-lg-6 col-md-8', 'col-lg-6' %}
            {% elseif column_left or column_right %}
                {% set class, card = 'col-lg-9 col-md-8', 'col-lg-4' %}
            {% else %}
                {% set class, card = 'col-12', 'col-lg-3' %}
            {% endif %}

            <!-- Shop Product Start -->
            <div class=\"{{ class }} id=\"content\"\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4 h3\">
                         <span class=\"bg-secondary pr-3\"> {{ heading_title }} </span>
                        </h1>
                    </div>

                     {% if thumb or description %}
                        {% if thumb %}
                            <div class=\"col-4 col-sm-2\">
                                <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\">
                            </div>
                        {% endif %}
                        {% if description %}
                            <div class=\"col-8 col-sm-10\">
                                {{ description }}
                            </div>
                        {% endif %}
                        <div class=\"col-12\">
                            <hr>
                        </div>
                     {% endif %}

                </div>

                <div class=\"row pb-3\">

                    {% if products %}
                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">{{ text_sort }}</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    {% for sorts in sorts %}
                                        {% if sorts.value == '%s-%s'|format(sort, order) %}
                                            <option value=\"{{ sorts.href }}\"
                                                    selected=\"selected\">{{ sorts.text }}</option>
                                        {% else %}
                                            <option value=\"{{ sorts.href }}\">{{ sorts.text }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"limit-select\">{{ text_limit }}</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-limit\" onchange=\"location = this.value;\">
                                    {% for limits in limits %}
                                        {% if limits.value == limit %}
                                            <option value=\"{{ limits.href }}\"
                                                    selected=\"selected\">{{ limits.text }}</option>
                                        {% else %}
                                            <option value=\"{{ limits.href }}\">{{ limits.text }}</option>
                                        {% endif %}
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        {% for product in products %}
                            <div class=\"{{ card }} col-sm-6 pb-1\">
                                <div class=\"product-item bg-light mb-4\">
                                    <div class=\"product-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid w-100\" src=\"{{ product.thumb }}\" alt=\"\">
                                        <div class=\"product-action\">
                                            <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"text-center py-4\">
                                        <a class=\"h6 text-decoration-none text-truncate\"
                                           href=\"{{ product.href }}\">{{ product.name }}</a>
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

                                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                                            {% for i in 1..5 %}
                                                {% if product.rating < i %}
                                                    <small class=\"far fa-star text-primary mr-1\"></small>
                                                {% else %}
                                                    <small class=\"fa fa-star text-primary mr-1\"></small>
                                                {% endif %}
                                            {% endfor %}
                                        </div>

                                        <div class=\"cart-btns mt-2\">
                                            <button type=\"button\" onclick=\"cart.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('{{ product.product_id }}');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        {% endfor %}

                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav>
                                        {{ pagination }}
                                    </nav>
                                </div>
                                <div class=\"col-md-6 text-right my-auto\">
                                    {{ results }}
                                </div>
                            </div>
                        </div>

                    {% else %}
                        <div class=\"col-12\">
                            <p>{{ text_empty }}</p>
                        </div>
                    {% endif %}

                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


{{ footer }}", "Foody/template/product/category.twig", "");
    }
}

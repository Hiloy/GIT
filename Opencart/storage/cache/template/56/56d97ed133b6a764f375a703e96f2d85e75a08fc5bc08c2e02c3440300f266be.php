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
class __TwigTemplate_8a99b24f87082cfbc221c312eb657765dc3d69a735beaf658e7a5080cf4fc149 extends \Twig\Template
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
                     ";
        // line 63
        if (($context["categories"] ?? null)) {
            // line 64
            echo "                        <div class=\"col-12\">
                            <h4>";
            // line 65
            echo ($context["text_refine"] ?? null);
            echo "</h4>
                            ";
            // line 66
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 67
                echo "                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <ul class=\"list-unstyled\">
                                            ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 71
                    echo "                                                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 71);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 71);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                                        </ul>
                                    </div>
                                </div>
                            ";
            } else {
                // line 77
                echo "                                <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 78
                    echo "                                        <div class=\"col-sm-3\">
                                            <ul class=\"list-unstyled\">
                                                ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 81
                        echo "                                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 81);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 81);
                        echo "</a></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "                                            </ul>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "</div>
                                <br/>
                            ";
            }
            // line 88
            echo "                        </div>
                    ";
        }
        // line 90
        echo "
                </div>

                <div class=\"row pb-3\">

                    ";
        // line 95
        if (($context["products"] ?? null)) {
            // line 96
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">";
            // line 99
            echo ($context["text_sort"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 103
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 103) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 104
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 104);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 105);
                    echo "</option>
                                        ";
                } else {
                    // line 107
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 107);
                    echo "</option>
                                        ";
                }
                // line 109
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </select>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"limit-select\">";
            // line 117
            echo ($context["text_limit"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-limit\" onchange=\"location = this.value;\">
                                    ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 121
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 121) == ($context["limit"] ?? null))) {
                    // line 122
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 122);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 123);
                    echo "</option>
                                        ";
                } else {
                    // line 125
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 125);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 125);
                    echo "</option>
                                        ";
                }
                // line 127
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                                </select>
                            </div>
                        </div>

                        ";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 133
                echo "                            <div class=\"";
                echo ($context["card"] ?? null);
                echo " col-sm-6 pb-1\">
                                <div class=\"product-item bg-light mb-4\">
                                    <div class=\"product-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid w-100\" src=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 136);
                echo "\" alt=\"\">
                                        <div class=\"product-action\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 142);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"text-center py-4\">
                                        <a class=\"h6 text-decoration-none text-truncate\"
                                           href=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 154);
                echo "</a>
                                        ";
                // line 155
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "                                            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                                                ";
                    // line 157
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 157)) {
                        // line 158
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 158);
                        echo "</h5>
                                                ";
                    } else {
                        // line 160
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 160);
                        echo "</h5>
                                                    <h6 class=\"text-muted ml-2\">
                                                        <del>";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 162);
                        echo "</del>
                                                    </h6>
                                                ";
                    }
                    // line 165
                    echo "                                            </div>
                                        ";
                }
                // line 167
                echo "
                                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                                            ";
                // line 169
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 170
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 170) < $context["i"])) {
                        // line 171
                        echo "                                                    <small class=\"far fa-star text-primary mr-1\"></small>
                                                ";
                    } else {
                        // line 173
                        echo "                                                    <small class=\"fa fa-star text-primary mr-1\"></small>
                                                ";
                    }
                    // line 175
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                                        </div>

                                        <div class=\"cart-btns mt-2\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 179);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 183);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
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
            // line 197
            echo "
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav>
                                        ";
            // line 202
            echo ($context["pagination"] ?? null);
            echo "
                                    </nav>
                                </div>
                                <div class=\"col-md-6 text-right my-auto\">
                                    ";
            // line 206
            echo ($context["results"] ?? null);
            echo "
                                </div>
                            </div>
                        </div>

                    ";
        } else {
            // line 212
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 213
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        </div>
                    ";
        }
        // line 216
        echo "
                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


";
        // line 228
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
        return array (  555 => 228,  541 => 216,  535 => 213,  532 => 212,  523 => 206,  516 => 202,  509 => 197,  493 => 187,  486 => 183,  479 => 179,  474 => 176,  468 => 175,  464 => 173,  460 => 171,  457 => 170,  453 => 169,  449 => 167,  445 => 165,  439 => 162,  433 => 160,  427 => 158,  425 => 157,  422 => 156,  420 => 155,  414 => 154,  403 => 146,  396 => 142,  389 => 138,  384 => 136,  377 => 133,  373 => 132,  367 => 128,  361 => 127,  353 => 125,  348 => 123,  343 => 122,  340 => 121,  336 => 120,  330 => 117,  321 => 110,  315 => 109,  307 => 107,  302 => 105,  297 => 104,  294 => 103,  290 => 102,  284 => 99,  279 => 96,  277 => 95,  270 => 90,  266 => 88,  261 => 85,  253 => 83,  242 => 81,  238 => 80,  234 => 78,  229 => 77,  223 => 73,  212 => 71,  208 => 70,  203 => 67,  201 => 66,  197 => 65,  194 => 64,  192 => 63,  189 => 62,  183 => 58,  177 => 55,  174 => 54,  171 => 53,  161 => 50,  158 => 49,  155 => 48,  153 => 47,  146 => 43,  139 => 39,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  115 => 30,  110 => 28,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
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

                     {% if categories %}
                        <div class=\"col-12\">
                            <h4>{{ text_refine }}</h4>
                            {% if categories|length <= 5 %}
                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <ul class=\"list-unstyled\">
                                            {% for category in categories %}
                                                <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"row\">{% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}
                                        <div class=\"col-sm-3\">
                                            <ul class=\"list-unstyled\">
                                                {% for child in category %}
                                                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    {% endfor %}</div>
                                <br/>
                            {% endif %}
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

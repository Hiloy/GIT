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

/* Foody/template/product/search.twig */
class __TwigTemplate_77400fdee431b6c8f61a4ab1a7d31b7fe4934d8193520c6e9026640e08e4d341 extends \Twig\Template
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

<div class=\"product-search\">
 <!-- Breadcrumb Start -->
      <div class=\"container-fluid\">
          <div class=\"row px-xl-5\">
              <div class=\"col-12\">
                  <nav class=\"breadcrumb bg-light mb-30\">
                      ";
        // line 9
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
            // line 10
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) {
                // line 11
                echo "                              <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</span>
                          ";
            } else {
                // line 13
                echo "                              <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</a>
                          ";
            }
            // line 15
            echo "                      ";
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
        // line 16
        echo "                  </nav>
              </div>
          </div>
      </div>
    <!-- Breadcrumb End -->

<!-- Shop Start -->
    <div class=\"container-fluid\">
        <div class=\"row px-xl-5\">

            ";
        // line 26
        echo ($context["column_left"] ?? null);
        echo "

            ";
        // line 28
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 29
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-6 col-md-8", "col-lg-6"];
            // line 30
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 31
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-9 col-md-8", "col-lg-4"];
            // line 32
            echo "            ";
        } else {
            // line 33
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-12", "col-lg-3"];
            // line 34
            echo "            ";
        }
        // line 35
        echo "
            <!-- Shop Product Start -->
            <div class=\"";
        // line 37
        echo ($context["class"] ?? null);
        echo "\">
                <div class=\"row pb-3\">

                    ";
        // line 40
        if (($context["products"] ?? null)) {
            // line 41
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">";
            // line 44
            echo ($context["text_sort"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 48
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 48) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 49
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 49);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 50);
                    echo "</option>
                                        ";
                } else {
                    // line 52
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 52);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 52);
                    echo "</option>
                                        ";
                }
                // line 54
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                </select>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"limit-select\">";
            // line 62
            echo ($context["text_limit"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-limit\" onchange=\"location = this.value;\">
                                    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 66
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 66) == ($context["limit"] ?? null))) {
                    // line 67
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 67);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 68);
                    echo "</option>
                                        ";
                } else {
                    // line 70
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 70);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 70);
                    echo "</option>
                                        ";
                }
                // line 72
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                                </select>
                            </div>
                        </div>

                        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "                            <div class=\"";
                echo ($context["card"] ?? null);
                echo " col-sm-6 pb-1\">
                                <div class=\"product-item bg-light mb-4\">
                                    <div class=\"product-img position-relative overflow-hidden\">
                                        <img class=\"img-fluid w-100\" src=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 81);
                echo "\" alt=\"\">
                                        <div class=\"product-action\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 87);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-sync-alt\"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"text-center py-4\">
                                        <a class=\"h6 text-decoration-none text-truncate\"
                                           href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
                echo "</a>
                                        ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "                                            <div class=\"d-flex align-items-center justify-content-center mt-2\">
                                                ";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</h5>
                                                ";
                    } else {
                        // line 105
                        echo "                                                    <h5>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 105);
                        echo "</h5>
                                                    <h6 class=\"text-muted ml-2\">
                                                        <del>";
                        // line 107
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                        echo "</del>
                                                    </h6>
                                                ";
                    }
                    // line 110
                    echo "                                            </div>
                                        ";
                }
                // line 112
                echo "
                                        <div class=\"d-flex align-items-center justify-content-center mb-1\">
                                            ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 115
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 115) < $context["i"])) {
                        // line 116
                        echo "                                                    <small class=\"far fa-star text-primary mr-1\"></small>
                                                ";
                    } else {
                        // line 118
                        echo "                                                    <small class=\"fa fa-star text-primary mr-1\"></small>
                                                ";
                    }
                    // line 120
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                                        </div>

                                        <div class=\"cart-buttons mt-2\">
                                            <button type=\"button\" onclick=\"cart.add('";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"fa fa-shopping-cart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"wishlist.add('";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 128);
                echo "');\"
                                                    class=\"btn btn-outline-dark btn-square\" href=\"\">
                                                <i class=\"far fa-heart\"></i>
                                            </button>
                                            <button type=\"button\" onclick=\"compare.add('";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
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
            // line 142
            echo "
                        <div class=\"col-12\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <nav>
                                        ";
            // line 147
            echo ($context["pagination"] ?? null);
            echo "
                                    </nav>
                                </div>
                                <div class=\"col-md-6 text-right my-auto\">
                                    ";
            // line 151
            echo ($context["results"] ?? null);
            echo "
                                </div>
                            </div>
                        </div>

                    ";
        } else {
            // line 157
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 158
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        </div>
                    ";
        }
        // line 161
        echo "
                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>

";
        // line 172
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 172,  407 => 161,  401 => 158,  398 => 157,  389 => 151,  382 => 147,  375 => 142,  359 => 132,  352 => 128,  345 => 124,  340 => 121,  334 => 120,  330 => 118,  326 => 116,  323 => 115,  319 => 114,  315 => 112,  311 => 110,  305 => 107,  299 => 105,  293 => 103,  291 => 102,  288 => 101,  286 => 100,  280 => 99,  269 => 91,  262 => 87,  255 => 83,  250 => 81,  243 => 78,  239 => 77,  233 => 73,  227 => 72,  219 => 70,  214 => 68,  209 => 67,  206 => 66,  202 => 65,  196 => 62,  187 => 55,  181 => 54,  173 => 52,  168 => 50,  163 => 49,  160 => 48,  156 => 47,  150 => 44,  145 => 41,  143 => 40,  137 => 37,  133 => 35,  130 => 34,  127 => 33,  124 => 32,  121 => 31,  118 => 30,  115 => 29,  113 => 28,  108 => 26,  96 => 16,  82 => 15,  74 => 13,  68 => 11,  65 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div class=\"product-search\">
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
            <div class=\"{{ class }}\">
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

                                        <div class=\"cart-buttons mt-2\">
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

{{ footer }}", "Foody/template/product/search.twig", "");
    }
}

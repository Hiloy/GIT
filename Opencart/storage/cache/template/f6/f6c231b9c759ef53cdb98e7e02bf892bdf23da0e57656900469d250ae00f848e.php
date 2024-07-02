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

/* Foody/template/product/product.twig */
class __TwigTemplate_60cef948c186fb5f1ff5729dacf4098516362c1791fdc63d1d8904f1a5ab402a extends \Twig\Template
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

<div id=\"product-product\">

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

    ";
        // line 23
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 24
            echo "        ";
            $context["class"] = "col-lg-7";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context["class"] = "col-lg-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "
    <div class=\"container-fluid pb-5\">
        <div class=\"row px-xl-5\">

            ";
        // line 32
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 33
            echo "
                ";
            // line 34
            if (($context["thumb"] ?? null)) {
                // line 35
                echo "                    ";
                $context["gallery"] = twig_array_merge([0 => ["popup" => ($context["thumb"] ?? null), "thumb" => ($context["thumb"] ?? null)]], ($context["images"] ?? null));
                // line 36
                echo "                ";
            } else {
                // line 37
                echo "                    ";
                $context["gallery"] = ($context["images"] ?? null);
                // line 38
                echo "                ";
            }
            // line 39
            echo "
                <div class=\"col-lg-5 mb-30\">
                    <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner bg-light\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "                                <div class=\"carousel-item ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 44) == 0)) {
                    echo "active";
                }
                echo "\">
                                    <img class=\"w-100 h-100\" src=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 45);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                </div>
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </div>
                        ";
            // line 49
            if ((twig_length_filter($this->env, ($context["gallery"] ?? null)) > 1)) {
                // line 50
                echo "                            <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                                <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                                <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                            </a>
                        ";
            }
            // line 57
            echo "                    </div>
                </div>
            ";
        }
        // line 60
        echo "
            <div class=\"";
        // line 61
        echo ($context["class"] ?? null);
        echo " h-auto mb-30\" id=\"content\">
                ";
        // line 62
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"h-100 bg-light p-30\">
                    <h3>";
        // line 64
        echo ($context["heading_title"] ?? null);
        echo "</h3>

                    ";
        // line 66
        if (($context["review_status"] ?? null)) {
            // line 67
            echo "                        <div class=\"d-flex mb-3\">
                            <div class=\"rating text-primary mr-2\">
                                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 70
                echo "                                    ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 71
                    echo "                                        <small class=\"far fa-star\"></small>
                                    ";
                } else {
                    // line 73
                    echo "                                        <small class=\"fas fa-star\"></small>
                                    ";
                }
                // line 75
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </div><!-- /.rating text-primary mr-2 -->
                            <small class=\"pt-1\">(";
            // line 77
            echo ($context["reviews"] ?? null);
            echo ")</small>
                        </div><!-- ./d-flex mb-3 -->
                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if (($context["price"] ?? null)) {
            // line 82
            echo "                      ";
            if ( !($context["special"] ?? null)) {
                // line 83
                echo "                        <h3 class=\"font-weight-semi-bold mb-4\">";
                echo ($context["price"] ?? null);
                echo "</h3>
                      ";
            } else {
                // line 85
                echo "                        <h3 class=\"font-weight-semi-bold mb-4\">";
                echo ($context["special"] ?? null);
                echo "
                          <small class=\"text-muted ml-2\">
                            <del>";
                // line 87
                echo ($context["price"] ?? null);
                echo "</del>
                          </small>
                        </h3>
                      ";
            }
            // line 91
            echo "                    ";
        }
        // line 92
        echo "
                    <p><strong>";
        // line 93
        echo ($context["text_stock"] ?? null);
        echo "</strong> ";
        echo ($context["stock"] ?? null);
        echo "</p>
                    
                    ";
        // line 95
        if (($context["options"] ?? null)) {
            // line 96
            echo "
                       ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 98
                echo "
                            ";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 99) == "radio")) {
                    // line 100
                    echo "                                <div class=\"d-flex mb-3";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 100)) {
                        echo " required-option ";
                    }
                    echo "\"
                                     id=\"input-option";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                    echo "\">
                                    <strong class=\"text-dark mr-3\">Вага:</strong>

                                    ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 104));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 105
                        echo "                                        <div class=\"custom-control custom-radio custom-control-inline\">
                                            <input type=\"radio\" class=\"custom-control-input\"
                                                   id=\"option-";
                        // line 107
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 107);
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107);
                        echo "\"
                                                   name=\"option[";
                        // line 108
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                        echo "]\"
                                                   value=\"";
                        // line 109
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 109);
                        echo "\">
                                            <label class=\"custom-control-label\"
                                                   for=\"option-";
                        // line 111
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                        echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 111);
                        echo "\">
                                                ";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                        echo "
                                                ";
                        // line 113
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) {
                            // line 114
                            echo "                                                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 114);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114);
                            echo ")
                                                ";
                        }
                        // line 116
                        echo "                                            </label>
                                        </div>
                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 119
                    echo "
                                </div>
                            ";
                }
                // line 122
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "
                    ";
        }
        // line 126
        echo "                    
                    
                     <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" name=\"quantity\" class=\"form-control bg-secondary border-0 text-center\" value=\"";
        // line 135
        echo ($context["minimum"] ?? null);
        echo "\" id=\"input-quantity\">
                            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 136
        echo ($context["product_id"] ?? null);
        echo "\" />
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button type=\"button\" class=\"btn btn-primary px-3\" id=\"button-cart\" data-loading-text=\"";
        // line 143
        echo ($context["text_loading"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart mr-1\"></i> ";
        echo ($context["button_cart"] ?? null);
        echo "
                        </button>
                    </div>

                    
                    <div class=\"d-flex pt-2\">
                        <strong class=\"text-dark mr-2\">Share on:</strong>
                        <div class=\"d-inline-flex\">
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-pinterest\"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- ./h-100 bg-light p-30 -->
                ";
        // line 166
        echo ($context["content_bottom"] ?? null);
        echo "
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->


";
        // line 175
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 175,  470 => 166,  442 => 143,  432 => 136,  428 => 135,  417 => 126,  413 => 124,  406 => 122,  401 => 119,  385 => 116,  378 => 114,  376 => 113,  372 => 112,  367 => 111,  362 => 109,  358 => 108,  353 => 107,  349 => 105,  332 => 104,  326 => 101,  319 => 100,  317 => 99,  314 => 98,  310 => 97,  307 => 96,  305 => 95,  298 => 93,  295 => 92,  292 => 91,  285 => 87,  279 => 85,  273 => 83,  270 => 82,  268 => 81,  265 => 80,  259 => 77,  256 => 76,  250 => 75,  246 => 73,  242 => 71,  239 => 70,  235 => 69,  231 => 67,  229 => 66,  224 => 64,  219 => 62,  215 => 61,  212 => 60,  207 => 57,  198 => 50,  196 => 49,  193 => 48,  174 => 45,  167 => 44,  150 => 43,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  130 => 34,  127 => 33,  125 => 32,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  107 => 24,  105 => 23,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<div id=\"product-product\">

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

    {% if thumb or images %}
        {% set class = 'col-lg-7' %}
    {% else %}
        {% set class = 'col-lg-12' %}
    {% endif %}

    <div class=\"container-fluid pb-5\">
        <div class=\"row px-xl-5\">

            {% if thumb or images %}

                {% if thumb %}
                    {% set gallery = [{popup: thumb, thumb: thumb}]|merge(images) %}
                {% else %}
                    {% set gallery = images %}
                {% endif %}

                <div class=\"col-lg-5 mb-30\">
                    <div id=\"product-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner bg-light\">
                            {% for image in gallery %}
                                <div class=\"carousel-item {% if loop.index0 == 0 %}active{% endif %}\">
                                    <img class=\"w-100 h-100\" src=\"{{ image.popup }}\" alt=\"{{ heading_title }}\">
                                </div>
                            {% endfor %}
                        </div>
                        {% if gallery|length > 1 %}
                            <a class=\"carousel-control-prev\" href=\"#product-carousel\" data-slide=\"prev\">
                                <i class=\"fa fa-2x fa-angle-left text-dark\"></i>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#product-carousel\" data-slide=\"next\">
                                <i class=\"fa fa-2x fa-angle-right text-dark\"></i>
                            </a>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div class=\"{{ class }} h-auto mb-30\" id=\"content\">
                {{ content_top }}
                <div class=\"h-100 bg-light p-30\">
                    <h3>{{ heading_title }}</h3>

                    {% if review_status %}
                        <div class=\"d-flex mb-3\">
                            <div class=\"rating text-primary mr-2\">
                                {% for i in 1..5 %}
                                    {% if rating < i %}
                                        <small class=\"far fa-star\"></small>
                                    {% else %}
                                        <small class=\"fas fa-star\"></small>
                                    {% endif %}
                                {% endfor %}
                            </div><!-- /.rating text-primary mr-2 -->
                            <small class=\"pt-1\">({{ reviews }})</small>
                        </div><!-- ./d-flex mb-3 -->
                    {% endif %}

                    {% if price %}
                      {% if not special %}
                        <h3 class=\"font-weight-semi-bold mb-4\">{{ price }}</h3>
                      {% else %}
                        <h3 class=\"font-weight-semi-bold mb-4\">{{ special }}
                          <small class=\"text-muted ml-2\">
                            <del>{{ price }}</del>
                          </small>
                        </h3>
                      {% endif %}
                    {% endif %}

                    <p><strong>{{text_stock}}</strong> {{ stock }}</p>
                    
                    {% if options %}

                       {% for option in options %}

                            {% if option.type == 'radio' %}
                                <div class=\"d-flex mb-3{% if option.required %} required-option {% endif %}\"
                                     id=\"input-option{{ option.product_option_id }}\">
                                    <strong class=\"text-dark mr-3\">Вага:</strong>

                                    {% for option_value in option.product_option_value %}
                                        <div class=\"custom-control custom-radio custom-control-inline\">
                                            <input type=\"radio\" class=\"custom-control-input\"
                                                   id=\"option-{{ option.product_option_id }}{{ loop.index }}\"
                                                   name=\"option[{{ option.product_option_id }}]\"
                                                   value=\"{{ option_value.product_option_value_id }}\">
                                            <label class=\"custom-control-label\"
                                                   for=\"option-{{ option.product_option_id }}{{ loop.index }}\">
                                                {{ option_value.name }}
                                                {% if option_value.price %}
                                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                                {% endif %}
                                            </label>
                                        </div>
                                    {% endfor %}

                                </div>
                            {% endif %}

                        {% endfor %}

                    {% endif %}
                    
                    
                     <div class=\"d-flex align-items-center mb-4 pt-2\">
                        <div class=\"input-group quantity mr-3\" style=\"width: 130px;\">
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-minus\">
                                    <i class=\"fa fa-minus\"></i>
                                </button>
                            </div>
                            <input type=\"text\" name=\"quantity\" class=\"form-control bg-secondary border-0 text-center\" value=\"{{ minimum }}\" id=\"input-quantity\">
                            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" />
                            <div class=\"input-group-btn\">
                                <button class=\"btn btn-primary btn-plus\">
                                    <i class=\"fa fa-plus\"></i>
                                </button>
                            </div>
                        </div>
                        <button type=\"button\" class=\"btn btn-primary px-3\" id=\"button-cart\" data-loading-text=\"{{ text_loading }}\"><i class=\"fa fa-shopping-cart mr-1\"></i> {{ button_cart }}
                        </button>
                    </div>

                    
                    <div class=\"d-flex pt-2\">
                        <strong class=\"text-dark mr-2\">Share on:</strong>
                        <div class=\"d-inline-flex\">
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-linkedin-in\"></i>
                            </a>
                            <a class=\"text-dark px-2\" href=\"\">
                                <i class=\"fab fa-pinterest\"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- ./h-100 bg-light p-30 -->
                {{ content_bottom }}
            </div><!-- ./class h-auto mb-30 -->

        </div><!-- ./row px-xl-5 -->
    </div><!-- ./container-fluid pb-5 -->

</div><!-- #product-product -->


{{ footer }}", "Foody/template/product/product.twig", "");
    }
}

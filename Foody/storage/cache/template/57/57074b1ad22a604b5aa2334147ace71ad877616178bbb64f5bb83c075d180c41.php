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
class __TwigTemplate_19aa0cf7a79392cd316081427b2f2ee301d6e8256ba8d7d18eb73fb1a7512ef9 extends \Twig\Template
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
    <div class=\"container-fluid\" style=\"position: relative;\">

        <div class=\"ajax-loader\">
            <img src=\"catalog/view/theme/foody/assets/img/loader.svg\" alt=\"\">
        </div>

        <div class=\"row px-xl-5\">

            ";
        // line 33
        echo ($context["column_left"] ?? null);
        echo "

            ";
        // line 35
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 36
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-6 col-md-8", "col-lg-6"];
            // line 37
            echo "            ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 38
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-lg-9 col-md-8", "col-lg-4"];
            // line 39
            echo "            ";
        } else {
            // line 40
            echo "                ";
            list($context["class"], $context["card"]) =             ["col-12", "col-lg-3"];
            // line 41
            echo "            ";
        }
        // line 42
        echo "
            <!-- Shop Product Start -->
            <div class=\"";
        // line 44
        echo ($context["class"] ?? null);
        echo " id=\"content\"\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <h1 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4 h3\">
                         <span class=\"bg-secondary pr-3\"> ";
        // line 48
        echo ($context["heading_title"] ?? null);
        echo " </span>
                        </h1>
                    </div>

                     ";
        // line 52
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 53
            echo "                        ";
            if (($context["thumb"] ?? null)) {
                // line 54
                echo "                            <div class=\"col-4 col-sm-2\">
                                <img src=\"";
                // line 55
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\">
                            </div>
                        ";
            }
            // line 58
            echo "                        ";
            if (($context["description"] ?? null)) {
                // line 59
                echo "                            <div class=\"col-8 col-sm-10\">
                                ";
                // line 60
                echo ($context["description"] ?? null);
                echo "
                            </div>
                        ";
            }
            // line 63
            echo "                        <div class=\"col-12\">
                            <hr>
                        </div>
                     ";
        }
        // line 67
        echo "
                     ";
        // line 68
        if (($context["categories"] ?? null)) {
            // line 69
            echo "                        <div class=\"col-12\">
                            <h4>";
            // line 70
            echo ($context["text_refine"] ?? null);
            echo "</h4>
                            ";
            // line 71
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 72
                echo "                                <div class=\"row\">
                                    <div class=\"col-sm-3\">
                                        <ul class=\"list-unstyled\">
                                            ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 76
                    echo "                                                <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 76);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 76);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                                        </ul>
                                    </div>
                                </div>
                            ";
            } else {
                // line 82
                echo "                                <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 83
                    echo "                                        <div class=\"col-sm-3\">
                                            <ul class=\"list-unstyled\">
                                                ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 86
                        echo "                                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 86);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 86);
                        echo "</a></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo "                                            </ul>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "</div>
                                <br/>
                            ";
            }
            // line 93
            echo "                        </div>
                    ";
        }
        // line 95
        echo "
                </div>

                <div class=\"row pb-3 product-items-sort\">

                    ";
        // line 100
        if (($context["products"] ?? null)) {
            // line 101
            echo "                        <div class=\"col-sm-6\">
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\">
                                    <label class=\"input-group-text\" for=\"sort-select\">";
            // line 104
            echo ($context["text_sort"] ?? null);
            echo "</label>
                                </div>
                                <select class=\"custom-select\" id=\"input-sort\" onchange=\"location = this.value;\">
                                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 108
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 108) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 109
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 109);
                    echo "\"
                                                    selected=\"selected\">";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 110);
                    echo "</option>
                                        ";
                } else {
                    // line 112
                    echo "                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 112);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 112);
                    echo "</option>
                                        ";
                }
                // line 114
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                </select>
                            </div>
                        </div>

                        ";
            // line 136
            echo "                    ";
        }
        // line 137
        echo "                </div>

                <div class=\"row pb-3 product-items\">
                    ";
        // line 140
        if (($context["products"] ?? null)) {
            // line 141
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 142
                echo "                            <div class=\"";
                echo ($context["card"] ?? null);
                echo " col-sm-6 pb-1\">
                               ";
                // line 143
                $this->loadTemplate("foody/template/product_card.twig", "Foody/template/product/category.twig", 143)->display($context);
                // line 144
                echo "                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "
                        

                    ";
        } else {
            // line 150
            echo "                        <div class=\"col-12\">
                            <p>";
            // line 151
            echo ($context["text_empty"] ?? null);
            echo "</p>
                        </div>
                    ";
        }
        // line 154
        echo "
                    ";
        // line 155
        if (($context["products"] ?? null)) {
            // line 156
            echo "                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <nav class=\"nav-pagination\">
                                            ";
            // line 161
            echo ($context["pagination"] ?? null);
            echo "
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 168
        echo "                    

                </div>
            </div>
            <!-- Shop Product End -->

        </div>
    </div>
    <!-- Shop End -->

</div>


";
        // line 181
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
        return array (  434 => 181,  419 => 168,  409 => 161,  402 => 156,  400 => 155,  397 => 154,  391 => 151,  388 => 150,  382 => 146,  367 => 144,  365 => 143,  360 => 142,  342 => 141,  340 => 140,  335 => 137,  332 => 136,  326 => 115,  320 => 114,  312 => 112,  307 => 110,  302 => 109,  299 => 108,  295 => 107,  289 => 104,  284 => 101,  282 => 100,  275 => 95,  271 => 93,  266 => 90,  258 => 88,  247 => 86,  243 => 85,  239 => 83,  234 => 82,  228 => 78,  217 => 76,  213 => 75,  208 => 72,  206 => 71,  202 => 70,  199 => 69,  197 => 68,  194 => 67,  188 => 63,  182 => 60,  179 => 59,  176 => 58,  166 => 55,  163 => 54,  160 => 53,  158 => 52,  151 => 48,  144 => 44,  140 => 42,  137 => 41,  134 => 40,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  120 => 35,  115 => 33,  97 => 17,  83 => 16,  75 => 14,  69 => 12,  66 => 11,  49 => 10,  37 => 1,);
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
    <div class=\"container-fluid\" style=\"position: relative;\">

        <div class=\"ajax-loader\">
            <img src=\"catalog/view/theme/foody/assets/img/loader.svg\" alt=\"\">
        </div>

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

                <div class=\"row pb-3 product-items-sort\">

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

                        {# <div class=\"col-sm-6\">
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
                        </div> #}
                    {% endif %}
                </div>

                <div class=\"row pb-3 product-items\">
                    {% if products %}
                        {% for product in products %}
                            <div class=\"{{ card }} col-sm-6 pb-1\">
                               {% include 'foody/template/product_card.twig' %}
                            </div>
                        {% endfor %}

                        

                    {% else %}
                        <div class=\"col-12\">
                            <p>{{ text_empty }}</p>
                        </div>
                    {% endif %}

                    {% if products %}
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <nav class=\"nav-pagination\">
                                            {{ pagination }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
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

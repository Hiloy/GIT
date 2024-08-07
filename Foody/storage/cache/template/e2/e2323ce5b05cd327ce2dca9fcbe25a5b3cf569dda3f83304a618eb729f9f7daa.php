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

/* Foody/template/common/cart.twig */
class __TwigTemplate_489ec68df995862c7d4625a960bc80b0fdb09d6e1cd61c092c9404c2b9a26761 extends \Twig\Template
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
        echo "<a href=\"\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fas fa-shopping-cart text-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle cart-info\" style=\"padding-bottom: 2px;\">";
        // line 3
        echo ($context["text_items"] ?? null);
        // line 4
        echo "</span>
</a>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
        // line 12
        echo ($context["text_title"] ?? null);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"in-cart\">
                    ";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            echo "                    <div class=\"table-esponsive\">
                        <table class=\"table\">
                            <tbody>
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 24
                echo "                                <tr class=\"text-left\">
                                    <td>
                                        <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 26);
                echo "\" alt=\"\"></a>
                                    </td>
                                    <td>
                                        <a href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
                echo "</a>
                                        ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 31));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                                        - <small>";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 32);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 32);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                                        ";
                }
                // line 34
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34)) {
                    echo " <br />
                                        - <small>";
                    // line 35
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 35);
                    echo "</small> ";
                }
                // line 36
                echo "                                    </td>
                                    <td class=\"td-qty\">
                                        ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39);
                    echo "
                                        ";
                } else {
                    // line 41
                    echo "                                            <input type=\"number\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                    echo "\" min=\"1\" data-qty=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                    echo "\" data-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 41);
                    echo "\">
                                        ";
                }
                // line 43
                echo "                                    </td>
                                    <td>";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
                echo "</td>
                                    <td>";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 45);
                echo "</td>
                                    <td>
                                        <button class=\"btn btn-danger\" type=\"button\"
                                            onclick=\"cart.remove('";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 48);
                echo "');\"><i
                                                class=\"fa fa-times\"></i></button>
                                        ";
                // line 50
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                                            <button class=\"btn btn-warning update-cart-product\" type=\"button\"><i class=\"fas fa-sync-alt\"></i></button>
                                        ";
                }
                // line 53
                echo "                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 60
            echo "                    <p class=\"text-left\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    ";
        }
        // line 62
        echo "                    <table class=\"table table-bordered\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 64
            echo "                            <tr>
                                <td class=\"text-right\"><strong>";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 65);
            echo "</strong></td>
                                <td class=\"text-right\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 66);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 74
        echo "                <a href=\"";
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Foody/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 74,  213 => 69,  204 => 66,  200 => 65,  197 => 64,  193 => 63,  190 => 62,  184 => 60,  178 => 56,  170 => 53,  166 => 51,  164 => 50,  159 => 48,  153 => 45,  149 => 44,  146 => 43,  136 => 41,  130 => 39,  128 => 38,  124 => 36,  118 => 35,  113 => 34,  110 => 33,  101 => 32,  94 => 31,  92 => 30,  86 => 29,  78 => 26,  74 => 24,  70 => 23,  65 => 20,  63 => 19,  53 => 12,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"\" class=\"btn px-0 ml-2\" data-toggle=\"modal\" data-target=\"#modal-cart\">
    <i class=\"fas fa-shopping-cart text-dark\"></i>
    <span class=\"badge text-dark border border-dark rounded-circle cart-info\" style=\"padding-bottom: 2px;\">{{ text_items
        }}</span>
</a>

<!-- Modal -->
<div class=\"modal fade\" id=\"modal-cart\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ text_title }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"in-cart\">
                    {% if products %}
                    <div class=\"table-esponsive\">
                        <table class=\"table\">
                            <tbody>
                                {% for product in products %}
                                <tr class=\"text-left\">
                                    <td>
                                        <a href=\"{{ product.href }}\"><img src=\"{{ product.thumb }}\" alt=\"\"></a>
                                    </td>
                                    <td>
                                        <a href=\"{{ product.href }}\">{{ product.name }}</a>
                                        {% if product.option %}
                                        {% for option in product.option %} <br />
                                        - <small>{{ option.name }} {{ option.value }}</small> {% endfor %}
                                        {% endif %}
                                        {% if product.recurring %} <br />
                                        - <small>{{ text_recurring }} {{ product.recurring }}</small> {% endif %}
                                    </td>
                                    <td class=\"td-qty\">
                                        {% if product.option %}
                                            {{ product.quantity }}
                                        {% else %}
                                            <input type=\"number\" value=\"{{ product.quantity }}\" min=\"1\" data-qty=\"{{ product.quantity }}\" data-id=\"{{ product.product_id }}\">
                                        {% endif %}
                                    </td>
                                    <td>{{ product.price }}</td>
                                    <td>{{ product.total }}</td>
                                    <td>
                                        <button class=\"btn btn-danger\" type=\"button\"
                                            onclick=\"cart.remove('{{ product.cart_id }}');\"><i
                                                class=\"fa fa-times\"></i></button>
                                        {% if not product.option %}
                                            <button class=\"btn btn-warning update-cart-product\" type=\"button\"><i class=\"fas fa-sync-alt\"></i></button>
                                        {% endif %}
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    {% else %}
                    <p class=\"text-left\">{{ text_empty }}</p>
                    {% endif %}
                    <table class=\"table table-bordered\">
                        {% for total in totals %}
                            <tr>
                                <td class=\"text-right\"><strong>{{ total.title }}</strong></td>
                                <td class=\"text-right\">{{ total.text }}</td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                {# <a href=\"{{ cart }}\" class=\"btn btn-secondary\">{{ text_cart }}</a> #}
                <a href=\"{{ checkout }}\" class=\"btn btn-primary\">{{ text_checkout }}</a>
            </div>
        </div>
    </div>
</div>", "Foody/template/common/cart.twig", "");
    }
}

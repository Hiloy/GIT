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

/* Foody/template/extension/module/custom/cart.twig */
class __TwigTemplate_eb84b402818a9b2c805eec4823e61aef9f2d0ddbaa92e37757e0ec856cd8c9d1 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            echo " 
<form action=\"";
            // line 2
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "columns", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["column"] => $context["name"]) {
                echo " 
              <td class=\"text-center\" id=\"column_";
                // line 8
                echo $context["column"];
                echo "\">";
                echo $context["name"];
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo " 
        </tr>
      </thead>
      <tbody>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
        <tr>

          ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "columns", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["column"] => $context["name"]) {
                    echo " 

            ";
                    // line 18
                    if (($context["column"] == "image")) {
                        echo " 
              <td class=\"text-center\">";
                        // line 19
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) {
                            echo "<a href=\"";
                            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["product"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                            echo "\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                            echo "\" title=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                            echo "\" class=\"img-thumbnail\" /></a>";
                        }
                        echo "</td>
            ";
                    }
                    // line 20
                    echo " 

            ";
                    // line 22
                    if (($context["column"] == "name")) {
                        echo " 
              <td class=\"text-left\"><a href=\"";
                        // line 23
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["product"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["href"] ?? null) : null);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                        echo "</a>
                ";
                        // line 24
                        if ( !(($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["product"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["stock"] ?? null) : null)) {
                            echo " 
                <span class=\"text-danger\">***</span>
                ";
                        }
                        // line 26
                        echo " 
                ";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 27)) {
                            echo " 
                ";
                            // line 28
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 28));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                echo " 
                <br />
                <small>";
                                // line 30
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30);
                                echo ": ";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 30);
                                echo "</small>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 31
                            echo " 
                ";
                        }
                        // line 32
                        echo " 
                ";
                        // line 33
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 33)) {
                            echo " 
                <br />
                <small>";
                            // line 35
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 35);
                            echo "</small>
                ";
                        }
                        // line 36
                        echo " 
                ";
                        // line 37
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 37)) {
                            echo " 
                <br />
                <span class=\"label label-info\">";
                            // line 39
                            echo ($context["text_recurring_item"] ?? null);
                            echo "</span> <small>";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 39);
                            echo "</small>
                ";
                        }
                        // line 40
                        echo "</td>
            ";
                    }
                    // line 41
                    echo " 

            ";
                    // line 43
                    if (($context["column"] == "model")) {
                        echo " 
              <td class=\"text-left\">";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 44);
                        echo "</td>
            ";
                    }
                    // line 45
                    echo " 

            ";
                    // line 47
                    if (($context["column"] == "sku")) {
                        echo " 
              <td class=\"text-left\">";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 48);
                        echo "</td>
            ";
                    }
                    // line 49
                    echo " 

            ";
                    // line 51
                    if (($context["column"] == "quantity")) {
                        echo " 
              <td class=\"text-left\">
                <div class=\"input-group\" style=\"max-width: 200px;\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\" onclick=\"custom_cart.update(";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 55);
                        echo ", ";
                        echo (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55) - 1);
                        echo ")\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55) == 1)) {
                            echo " disabled ";
                        }
                        echo "><i class=\"fa fa-minus\"></i></button>
                  </span>
                  <input type=\"text\" oninput=\"custom_cart.change(";
                        // line 57
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 57);
                        echo ", event)\" name=\"quantity[";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 57);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 57);
                        echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\" onclick=\"custom_cart.update(";
                        // line 59
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 59);
                        echo ", ";
                        echo (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 59) + 1);
                        echo ")\"><i class=\"fa fa-plus\"></i></button>
                  </span>
                </div>
              </td>
            ";
                    }
                    // line 63
                    echo " 

            ";
                    // line 65
                    if (($context["column"] == "price")) {
                        echo " 
              <td class=\"text-right\">";
                        // line 66
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66);
                        echo "</td>
            ";
                    }
                    // line 67
                    echo " 

            ";
                    // line 69
                    if (($context["column"] == "total")) {
                        echo " 
              <td class=\"text-right\">";
                        // line 70
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 70);
                        echo "</td>
            ";
                    }
                    // line 71
                    echo " 

            ";
                    // line 73
                    if (($context["column"] == "remove")) {
                        echo " 
              <td class=\"text-left\">
                 <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                        // line 75
                        echo ($context["button_remove"] ?? null);
                        echo "\" class=\"btn btn-danger\" onclick=\"custom_cart.remove('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 75);
                        echo "');\"><i class=\"fa fa-times-circle\"></i></button>
              </td>
            ";
                    }
                    // line 77
                    echo " 

          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['column'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo " 

        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo " 
      </tbody>
\t\t</table>
  </div>
</form>
<hr>
";
        }
        // line 88
        echo " 
";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 88,  312 => 82,  303 => 79,  295 => 77,  287 => 75,  282 => 73,  278 => 71,  273 => 70,  269 => 69,  265 => 67,  260 => 66,  256 => 65,  252 => 63,  242 => 59,  233 => 57,  222 => 55,  215 => 51,  211 => 49,  206 => 48,  202 => 47,  198 => 45,  193 => 44,  189 => 43,  185 => 41,  181 => 40,  174 => 39,  169 => 37,  166 => 36,  161 => 35,  156 => 33,  153 => 32,  149 => 31,  139 => 30,  132 => 28,  128 => 27,  125 => 26,  119 => 24,  113 => 23,  109 => 22,  105 => 20,  90 => 19,  86 => 18,  79 => 16,  71 => 13,  65 => 9,  55 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if products %} 
<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          {% for column, name in setting.columns %} 
              <td class=\"text-center\" id=\"column_{{column}}\">{{ name }}</td>
          {% endfor %} 
        </tr>
      </thead>
      <tbody>
        {% for product in products %} 
        <tr>

          {% for column, name in setting.columns %} 

            {% if (column == 'image') %} 
              <td class=\"text-center\">{% if (product.thumb) %}<a href=\"{{ product['href'] }}\"><img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\" /></a>{% endif %}</td>
            {% endif %} 

            {% if (column == 'name') %} 
              <td class=\"text-left\"><a href=\"{{ product['href'] }}\">{{ product.name }}</a>
                {% if (not product['stock']) %} 
                <span class=\"text-danger\">***</span>
                {% endif %} 
                {% if (product.option) %} 
                {% for option in product.option %} 
                <br />
                <small>{{ option.name }}: {{ option.value }}</small>
                {% endfor %} 
                {% endif %} 
                {% if (product.reward) %} 
                <br />
                <small>{{ product.reward }}</small>
                {% endif %} 
                {% if (product.recurring) %} 
                <br />
                <span class=\"label label-info\">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>
                {% endif %}</td>
            {% endif %} 

            {% if (column == 'model') %} 
              <td class=\"text-left\">{{ product.model }}</td>
            {% endif %} 

            {% if (column == 'sku') %} 
              <td class=\"text-left\">{{ product.sku }}</td>
            {% endif %} 

            {% if (column == 'quantity') %} 
              <td class=\"text-left\">
                <div class=\"input-group\" style=\"max-width: 200px;\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\" onclick=\"custom_cart.update({{ product.cart_id }}, {{ product.quantity - 1 }})\" {% if product.quantity == 1 %} disabled {% endif %}><i class=\"fa fa-minus\"></i></button>
                  </span>
                  <input type=\"text\" oninput=\"custom_cart.change({{ product.cart_id }}, event)\" name=\"quantity[{{ product.cart_id }}]\" value=\"{{ product.quantity }}\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\" onclick=\"custom_cart.update({{ product.cart_id }}, {{ product.quantity + 1 }})\"><i class=\"fa fa-plus\"></i></button>
                  </span>
                </div>
              </td>
            {% endif %} 

            {% if (column == 'price') %} 
              <td class=\"text-right\">{{ product.price }}</td>
            {% endif %} 

            {% if (column == 'total') %} 
              <td class=\"text-right\">{{ product.total }}</td>
            {% endif %} 

            {% if (column == 'remove') %} 
              <td class=\"text-left\">
                 <button type=\"button\" data-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\" onclick=\"custom_cart.remove('{{ product.cart_id }}');\"><i class=\"fa fa-times-circle\"></i></button>
              </td>
            {% endif %} 

          {% endfor %} 

        </tr>
        {% endfor %} 
      </tbody>
\t\t</table>
  </div>
</form>
<hr>
{% endif %} 
", "Foody/template/extension/module/custom/cart.twig", "");
    }
}

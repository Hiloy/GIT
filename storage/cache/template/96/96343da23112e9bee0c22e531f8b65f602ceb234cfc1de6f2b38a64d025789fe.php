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

/* sale/order_invoice.twig */
class __TwigTemplate_18a485a085a40591658418ac556e829627bb1991f39beb81c8932225894f5f29 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            echo "  <div style=\"page-break-after: always;\">
    <h1>";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 17)) {
                echo ($context["text_invoice"] ?? null);
                echo " #";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 17);
            } else {
                echo ($context["text_order"] ?? null);
            }
            echo "</h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">";
            // line 21
            echo ($context["text_order_detail"] ?? null);
            echo "</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"width: 50%;\"><address>
            <strong>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 27);
            echo "</strong><br/>
            ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 28);
            echo "
            </address>
            <b>";
            // line 30
            echo ($context["text_telephone"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 30);
            echo "<br/>
            ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 31)) {
                // line 32
                echo "            <b>";
                echo ($context["text_fax"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "store_fax", [], "any", false, false, false, 32);
                echo "<br/>
            ";
            }
            // line 34
            echo "            <b>";
            echo ($context["text_email"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 34);
            echo "<br/>
            <b>";
            // line 35
            echo ($context["text_website"] ?? null);
            echo "</b> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 35);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "store_url", [], "any", false, false, false, 35);
            echo "</a></td>
          <td style=\"width: 50%;\"><b>";
            // line 36
            echo ($context["text_date_added"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 36);
            echo "<br/>
            ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 37)) {
                // line 38
                echo "            <b>";
                echo ($context["text_invoice_no"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 38);
                echo "<br/>
            ";
            }
            // line 40
            echo "            <b>";
            echo ($context["text_order_id"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 40);
            echo "<br/>
            <b>";
            // line 41
            echo ($context["text_payment_method"] ?? null);
            echo "</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 41);
            echo "<br/>
            ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 42)) {
                // line 43
                echo "            <b>";
                echo ($context["text_shipping_method"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 43);
                echo "<br/>
            ";
            }
            // line 44
            echo "</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>";
            // line 51
            echo ($context["text_payment_address"] ?? null);
            echo "</b></td>
          <td style=\"width: 50%;\"><b>";
            // line 52
            echo ($context["text_shipping_address"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            ";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 58);
            echo "
            </address></td>
          <td><address>
            ";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 61);
            echo "
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
            // line 69
            echo ($context["column_product"] ?? null);
            echo "</b></td>
          <td><b>";
            // line 70
            echo ($context["column_model"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 71
            echo ($context["column_quantity"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 72
            echo ($context["column_price"] ?? null);
            echo "</b></td>
          <td class=\"text-right\"><b>";
            // line 73
            echo ($context["column_total"] ?? null);
            echo "</b></td>
        </tr>
      </thead>
      <tbody>
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "        <tr>
          <td>";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                echo "
            ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 81
                    echo "            <br/>
            &nbsp;<small> - ";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 82);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 82);
                    echo "</small>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "</td>
          <td>";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 84);
                echo "</td>
          <td class=\"text-right\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 85);
                echo "</td>
          <td class=\"text-right\">";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                echo "</td>
          <td class=\"text-right\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 87);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "voucher", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 91
                echo "        <tr>
          <td>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 92);
                echo "</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 95);
                echo "</td>
          <td class=\"text-right\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 96);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 100
                echo "        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 101);
                echo "</b></td>
          <td class=\"text-right\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 102);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "      </tbody>
    </table>
    ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 107)) {
                // line 108
                echo "    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>";
                // line 111
                echo ($context["text_comment"] ?? null);
                echo "</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 116);
                echo "</td>
        </tr>
      </tbody>
    </table>
    ";
            }
            // line 121
            echo "  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "sale/order_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 123,  361 => 121,  353 => 116,  345 => 111,  340 => 108,  338 => 107,  334 => 105,  325 => 102,  321 => 101,  318 => 100,  313 => 99,  304 => 96,  300 => 95,  294 => 92,  291 => 91,  286 => 90,  277 => 87,  273 => 86,  269 => 85,  265 => 84,  262 => 83,  252 => 82,  249 => 81,  245 => 80,  241 => 79,  238 => 78,  234 => 77,  227 => 73,  223 => 72,  219 => 71,  215 => 70,  211 => 69,  200 => 61,  194 => 58,  185 => 52,  181 => 51,  172 => 44,  164 => 43,  162 => 42,  156 => 41,  149 => 40,  141 => 38,  139 => 37,  133 => 36,  125 => 35,  118 => 34,  110 => 32,  108 => 31,  102 => 30,  97 => 28,  93 => 27,  84 => 21,  71 => 17,  68 => 16,  64 => 15,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
<meta charset=\"UTF-8\" />
<title>{{ title }}</title>
<base href=\"{{ base }}\" />
<link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" media=\"all\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"all\" />
</head>
<body>
<div class=\"container\">
  {% for order in orders %}
  <div style=\"page-break-after: always;\">
    <h1>{% if order.invoice_no %}{{ text_invoice }} #{{ order.invoice_no }}{% else %}{{ text_order }}{% endif %}</h1>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td colspan=\"2\">{{ text_order_detail }}</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style=\"width: 50%;\"><address>
            <strong>{{ order.store_name }}</strong><br/>
            {{ order.store_address }}
            </address>
            <b>{{ text_telephone }}</b> {{ order.store_telephone }}<br/>
            {% if order.store_fax %}
            <b>{{ text_fax }}</b> {{ order.store_fax }}<br/>
            {% endif %}
            <b>{{ text_email }}</b> {{ order.store_email }}<br/>
            <b>{{ text_website }}</b> <a href=\"{{ order.store_url }}\">{{ order.store_url }}</a></td>
          <td style=\"width: 50%;\"><b>{{ text_date_added }}</b> {{ order.date_added }}<br/>
            {% if order.invoice_no %}
            <b>{{ text_invoice_no }}</b> {{ order.invoice_no }}<br/>
            {% endif %}
            <b>{{ text_order_id }}</b> {{ order.order_id }}<br/>
            <b>{{ text_payment_method }}</b> {{ order.payment_method }}<br/>
            {% if order.shipping_method %}
            <b>{{ text_shipping_method }}</b> {{ order.shipping_method }}<br/>
            {% endif %}</td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td style=\"width: 50%;\"><b>{{ text_payment_address }}</b></td>
          <td style=\"width: 50%;\"><b>{{ text_shipping_address }}</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><address>
            {{ order.payment_address }}
            </address></td>
          <td><address>
            {{ order.shipping_address }}
            </address></td>
        </tr>
      </tbody>
    </table>
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>{{ column_product }}</b></td>
          <td><b>{{ column_model }}</b></td>
          <td class=\"text-right\"><b>{{ column_quantity }}</b></td>
          <td class=\"text-right\"><b>{{ column_price }}</b></td>
          <td class=\"text-right\"><b>{{ column_total }}</b></td>
        </tr>
      </thead>
      <tbody>
        {% for product in order.product %}
        <tr>
          <td>{{ product.name }}
            {% for option in product.option %}
            <br/>
            &nbsp;<small> - {{ option.name }}: {{ option.value }}</small>
            {% endfor %}</td>
          <td>{{ product.model }}</td>
          <td class=\"text-right\">{{ product.quantity }}</td>
          <td class=\"text-right\">{{ product.price }}</td>
          <td class=\"text-right\">{{ product.total }}</td>
        </tr>
        {% endfor %}
        {% for voucher in order.voucher %}
        <tr>
          <td>{{ voucher.description }}</td>
          <td></td>
          <td class=\"text-right\">1</td>
          <td class=\"text-right\">{{ voucher.amount }}</td>
          <td class=\"text-right\">{{ voucher.amount }}</td>
        </tr>
        {% endfor %}
        {% for total in order.total %}
        <tr>
          <td class=\"text-right\" colspan=\"4\"><b>{{ total.title }}</b></td>
          <td class=\"text-right\">{{ total.text }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
    {% if order.comment %}
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <td><b>{{ text_comment }}</b></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ order.comment }}</td>
        </tr>
      </tbody>
    </table>
    {% endif %}
  </div>
  {% endfor %}
</div>
</body>
</html>
", "sale/order_invoice.twig", "");
    }
}

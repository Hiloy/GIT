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

/* default/template/extension/module/custom/payment.twig */
class __TwigTemplate_a670b4de2f6d9a10509d97daf2b0ff85daf2988eb9f17d54c697fef5e639d4ee extends \Twig\Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo ($context["heading_payment"] ?? null);
        echo "</div>
  <div class=\"panel-body\">

    ";
        // line 5
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 6
            echo ($context["error_warning"] ?? null);
            echo "</div>
    ";
        }
        // line 7
        echo " 

    ";
        // line 9
        if (($context["payment_methods"] ?? null)) {
            echo " 
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                echo " 
    <div class=\"radio\">
      <label>
        ";
                // line 13
                if ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["payment_method"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["code"] ?? null) : null) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    echo " 
        ";
                    // line 14
                    $context["code"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["payment_method"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["code"] ?? null) : null);
                    echo " 
        <input type=\"radio\" name=\"payment_method\" value=\"";
                    // line 15
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["payment_method"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["code"] ?? null) : null);
                    echo "\" checked=\"checked\" />
        ";
                } else {
                    // line 16
                    echo " 
        <input type=\"radio\" name=\"payment_method\" value=\"";
                    // line 17
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["payment_method"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
                    echo "\" />
        ";
                }
                // line 18
                echo " 
        ";
                // line 19
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["payment_method"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null);
                echo " 
        ";
                // line 20
                if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["payment_method"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["terms"] ?? null) : null)) {
                    echo " 
        (";
                    // line 21
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["payment_method"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["terms"] ?? null) : null);
                    echo ")
        ";
                }
                // line 22
                echo " 
        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "description", [], "array", true, true, false, 23)) {
                    echo " 
        <br /><small>";
                    // line 24
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["payment_method"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["description"] ?? null) : null);
                    echo "</small>
        ";
                }
                // line 25
                echo " 
      </label>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo " 
    ";
        }
        // line 29
        echo " 

    
    <script>
        \$(function(){

            let customer_group_id = ";
        // line 35
        echo ($context["customer_group_id"] ?? null);
        echo ";

            if ( \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val() !== undefined ) {
                customer_group_id = \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val();
            }

            custom_block.payment( customer_group_id );
            
        });
    </script>


  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/custom/payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  133 => 29,  129 => 28,  120 => 25,  115 => 24,  111 => 23,  108 => 22,  103 => 21,  99 => 20,  95 => 19,  92 => 18,  87 => 17,  84 => 16,  79 => 15,  75 => 14,  71 => 13,  63 => 10,  59 => 9,  55 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\">{{ heading_payment }}</div>
  <div class=\"panel-body\">

    {% if (error_warning) %} 
    <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
    {% endif %} 

    {% if (payment_methods) %} 
    {% for payment_method in payment_methods %} 
    <div class=\"radio\">
      <label>
        {% if (payment_method['code'] == code or not code) %} 
        {% set code = payment_method['code'] %} 
        <input type=\"radio\" name=\"payment_method\" value=\"{{ payment_method['code'] }}\" checked=\"checked\" />
        {% else %} 
        <input type=\"radio\" name=\"payment_method\" value=\"{{ payment_method['code'] }}\" />
        {% endif %} 
        {{ payment_method['title'] }} 
        {% if (payment_method['terms']) %} 
        ({{ payment_method['terms'] }})
        {% endif %} 
        {% if (payment_method['description'] is defined) %} 
        <br /><small>{{ payment_method['description'] }}</small>
        {% endif %} 
      </label>
    </div>
    {% endfor %} 
    {% endif %} 

    
    <script>
        \$(function(){

            let customer_group_id = {{ customer_group_id }};

            if ( \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val() !== undefined ) {
                customer_group_id = \$('#custom-customer input[name=\\'customer_group_id\\']:checked').val();
            }

            custom_block.payment( customer_group_id );
            
        });
    </script>


  </div>
</div>", "default/template/extension/module/custom/payment.twig", "");
    }
}

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

/* Foody/template/account/register.twig */
class __TwigTemplate_049293ba3bd036bacb203b8d1876fed3a1b3446c9b2eb2edc7ccb941fdd607f2 extends \Twig\Template
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

<!-- Breadcrumb Start -->
  <div class=\"row px-xl-5\">
      <div class=\"col-12\">
          <nav class=\"breadcrumb bg-light mb-30\">
              ";
        // line 7
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
            // line 8
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
                // line 9
                echo "                      <span class=\"breadcrumb-item active\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
                  ";
            } else {
                // line 11
                echo "                      <a class=\"breadcrumb-item text-dark\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                echo "</a>
                  ";
            }
            // line 13
            echo "              ";
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
        // line 14
        echo "          </nav>
      </div>
  </div>
<!-- Breadcrumb End -->

";
        // line 19
        if (($context["error_warnings"] ?? null)) {
            // line 20
            echo "  <div class=\"row px-xl-5\">
    <div class=\"col-12\">
     <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 22
            echo ($context["error_warning"] ?? null);
            echo "</div>
    </div>
  </div>
";
        }
        // line 26
        echo "<div class=\"row px-xl-5\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 27
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 29
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 33
            echo "    ";
        }
        // line 34
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      <div class=\"bg-light p-30 mb-5\">
      ";
        // line 36
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 37
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 38
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form action=\"";
        // line 39
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>";
        // line 41
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\" style=\"display: ";
        // line 42
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 43
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 45
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 45) == ($context["customer_group_id"] ?? null))) {
                // line 46
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 48);
                echo "\" checked=\"checked\" />
                  ";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 49);
                echo "</label>
              </div>
              ";
            } else {
                // line 52
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 54);
                echo "\" />
                  ";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 55);
                echo "</label>
              </div>
              ";
            }
            // line 58
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 61
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 63
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 64
        if (($context["error_firstname"] ?? null)) {
            // line 65
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 66
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 69
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 71
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 72
        if (($context["error_lastname"] ?? null)) {
            // line 73
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 74
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 77
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 79
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 80
        if (($context["error_email"] ?? null)) {
            // line 81
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 82
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 85
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 87
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 88
        if (($context["error_telephone"] ?? null)) {
            // line 89
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 90
        echo " </div>
          </div>
          ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 93
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "select")) {
                // line 94
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 94);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 98
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "                ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 105)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 105) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105)] ?? null) : null)))) {
                        // line 106
                        echo "                
                
                
                
                <option value=\"";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 117
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 122);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 129
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "              
              
              
              
              
              </select>
              ";
                // line 136
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)) {
                    // line 137
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 138
                echo "</div>
          </div>
          ";
            }
            // line 141
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "radio")) {
                // line 142
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 142);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 145));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 146
                    echo "                <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 146) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null)))) {
                        // line 147
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 148);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 149);
                        echo "</label>
                  ";
                    } else {
                        // line 151
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 152);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 152);
                        echo "\" />
                    ";
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 153);
                        echo "</label>
                  ";
                    }
                    // line 154
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "</div>
              ";
                // line 156
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null)) {
                    // line 157
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 158
                echo "</div>
          </div>
          ";
            }
            // line 161
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "checkbox")) {
                // line 162
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 166
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 166), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)))) {
                        // line 167
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168);
                        echo "\" checked=\"checked\" />
                    ";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 169);
                        echo "</label>
                  ";
                    } else {
                        // line 171
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 172);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 172);
                        echo "\" />
                    ";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 173);
                        echo "</label>
                  ";
                    }
                    // line 174
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo " </div>
              ";
                // line 176
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                    // line 177
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 178
                echo " </div>
          </div>
          ";
            }
            // line 181
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181) == "text")) {
                // line 182
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 182);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 185);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                echo "]\" value=\"";
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 185);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 185);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                echo "\" class=\"form-control\" />
              ";
                // line 186
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)) {
                    // line 187
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 188
                echo " </div>
          </div>
          ";
            }
            // line 191
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 191) == "textarea")) {
                // line 192
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 192);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 193);
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 195);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\" class=\"form-control\">";
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                echo "</textarea>
              ";
                // line 196
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    // line 197
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 198
                echo " </div>
          </div>
          ";
            }
            // line 201
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 201) == "file")) {
                // line 202
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 202);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 206);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                echo "]\" value=\"";
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
              ";
                // line 207
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)) {
                    // line 208
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 209
                echo "</div>
          </div>
          ";
            }
            // line 212
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 212) == "date")) {
                // line 213
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 213);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 217);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                echo "]\" value=\"";
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 217);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 217);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 221
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null)) {
                    // line 222
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 223
                echo " </div>
          </div>
          ";
            }
            // line 226
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 226) == "time")) {
                // line 227
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 227);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 231);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "]\" value=\"";
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 231);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 231);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 235
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null)) {
                    // line 236
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 237
                echo " </div>
          </div>
          ";
            }
            // line 240
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "datetime")) {
                // line 241
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 241);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 242);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 245);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                echo "]\" value=\"";
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 245);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 249
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null)) {
                    // line 250
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 251
                echo " </div>
          </div>
          ";
            }
            // line 254
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 257
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 259
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 261
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 262
        if (($context["error_password"] ?? null)) {
            // line 263
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 264
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 267
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 269
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 270
        if (($context["error_confirm"] ?? null)) {
            // line 271
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 272
        echo " </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 276
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\">";
        // line 278
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 279
        if (($context["newsletter"] ?? null)) {
            // line 280
            echo "              <label class=\"radio-inline mr-3\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
            // line 282
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                ";
            // line 285
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        } else {
            // line 287
            echo "              <label class=\"radio-inline mr-3\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                ";
            // line 289
            echo ($context["text_yes"] ?? null);
            echo "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                ";
            // line 292
            echo ($context["text_no"] ?? null);
            echo "</label>
              ";
        }
        // line 293
        echo " </div>
          </div>
        </fieldset>
        ";
        // line 296
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 297
        if (($context["text_agree"] ?? null)) {
            // line 298
            echo "        <div class=\"form-group row\">
          <div class=\"col-md-12\">
            ";
            // line 300
            if (($context["agree"] ?? null)) {
                // line 301
                echo "              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                ";
                // line 303
                echo ($context["text_agree"] ?? null);
                echo "
              </label>
            ";
            } else {
                // line 306
                echo "              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" />
                ";
                // line 308
                echo ($context["text_agree"] ?? null);
                echo "
              </label>
            ";
            }
            // line 311
            echo "          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"submit\" value=\"";
            // line 315
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 319
        echo "      </form>
      ";
        // line 320
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      </div>
    ";
        // line 322
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>  

";
        // line 325
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "Foody/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1040 => 325,  1034 => 322,  1029 => 320,  1026 => 319,  1019 => 315,  1013 => 311,  1007 => 308,  1003 => 306,  997 => 303,  993 => 301,  991 => 300,  987 => 298,  985 => 297,  981 => 296,  976 => 293,  971 => 292,  965 => 289,  961 => 287,  956 => 285,  950 => 282,  946 => 280,  944 => 279,  940 => 278,  935 => 276,  929 => 272,  923 => 271,  921 => 270,  915 => 269,  910 => 267,  905 => 264,  899 => 263,  897 => 262,  891 => 261,  886 => 259,  881 => 257,  877 => 255,  871 => 254,  866 => 251,  860 => 250,  858 => 249,  839 => 245,  831 => 242,  824 => 241,  821 => 240,  816 => 237,  810 => 236,  808 => 235,  789 => 231,  781 => 228,  774 => 227,  771 => 226,  766 => 223,  760 => 222,  758 => 221,  739 => 217,  731 => 214,  724 => 213,  721 => 212,  716 => 209,  710 => 208,  708 => 207,  696 => 206,  688 => 205,  683 => 203,  676 => 202,  673 => 201,  668 => 198,  662 => 197,  660 => 196,  644 => 195,  637 => 193,  630 => 192,  627 => 191,  622 => 188,  616 => 187,  614 => 186,  598 => 185,  591 => 183,  584 => 182,  581 => 181,  576 => 178,  570 => 177,  568 => 176,  565 => 175,  558 => 174,  553 => 173,  545 => 172,  542 => 171,  537 => 169,  529 => 168,  526 => 167,  523 => 166,  519 => 165,  514 => 163,  507 => 162,  504 => 161,  499 => 158,  493 => 157,  491 => 156,  488 => 155,  481 => 154,  476 => 153,  468 => 152,  465 => 151,  460 => 149,  452 => 148,  449 => 147,  446 => 146,  442 => 145,  437 => 143,  430 => 142,  427 => 141,  422 => 138,  416 => 137,  414 => 136,  406 => 130,  400 => 129,  388 => 122,  381 => 117,  369 => 110,  363 => 106,  360 => 105,  356 => 104,  347 => 98,  339 => 97,  332 => 95,  325 => 94,  322 => 93,  318 => 92,  314 => 90,  308 => 89,  306 => 88,  300 => 87,  295 => 85,  290 => 82,  284 => 81,  282 => 80,  276 => 79,  271 => 77,  266 => 74,  260 => 73,  258 => 72,  252 => 71,  247 => 69,  242 => 66,  236 => 65,  234 => 64,  228 => 63,  223 => 61,  213 => 58,  207 => 55,  203 => 54,  199 => 52,  193 => 49,  189 => 48,  185 => 46,  182 => 45,  178 => 44,  174 => 43,  166 => 42,  162 => 41,  157 => 39,  153 => 38,  149 => 37,  145 => 36,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  127 => 30,  124 => 29,  121 => 28,  119 => 27,  114 => 26,  107 => 22,  103 => 20,  101 => 19,  94 => 14,  80 => 13,  72 => 11,  66 => 9,  63 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ header }}

<!-- Breadcrumb Start -->
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
<!-- Breadcrumb End -->

{% if error_warnings %}
  <div class=\"row px-xl-5\">
    <div class=\"col-12\">
     <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}</div>
    </div>
  </div>
{% endif %}
<div class=\"row px-xl-5\">{{ column_left }}
    {% if column_left and column_right %}
    {% set class = 'col-sm-6' %}
    {% elseif column_left or column_right %}
    {% set class = 'col-sm-9' %}
    {% else %}
    {% set class = 'col-sm-12' %}
    {% endif %}
    <div id=\"content\" class=\"{{ class }}\">
      <div class=\"bg-light p-30 mb-5\">
      {{ content_top }}
      <h1>{{ heading_title }}</h1>
      <p>{{ text_account_already }}</p>
      <form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <legend>{{ text_your_details }}</legend>
          <div class=\"form-group row required\" style=\"display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};\">
            <label class=\"col-sm-2 control-label\">{{ entry_customer_group }}</label>
            <div class=\"col-sm-10\">{% for customer_group in customer_groups %}
              {% if customer_group.customer_group_id == customer_group_id %}
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" checked=\"checked\" />
                  {{ customer_group.name }}</label>
              </div>
              {% else %}
              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"{{ customer_group.customer_group_id }}\" />
                  {{ customer_group.name }}</label>
              </div>
              {% endif %}
              {% endfor %}</div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">{{ entry_firstname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" />
              {% if error_firstname %}
              <div class=\"text-danger\">{{ error_firstname }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">{{ entry_lastname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" />
              {% if error_lastname %}
              <div class=\"text-danger\">{{ error_lastname }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" />
              {% if error_email %}
              <div class=\"text-danger\">{{ error_email }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">{{ entry_telephone }}</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\" />
              {% if error_telephone %}
              <div class=\"text-danger\">{{ error_telephone }}</div>
              {% endif %} </div>
          </div>
          {% for custom_field in custom_fields %}
          {% if custom_field.type == 'select' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
                <option value=\"\">{{ text_select }}</option>
                
                
                
                
                
                {% for custom_field_value in custom_field.custom_field_value %}
                {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}
                
                
                
                
                <option value=\"{{ custom_field_value.custom_field_value_id }}\" selected=\"selected\">{{ custom_field_value.name }}</option>
                
                
                
                
                
                {% else %}
                
                
                
                
                
                <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                
                
                
                
                
                {% endif %}
                {% endfor %}
              
              
              
              
              
              </select>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %}</div>
          </div>
          {% endif %}
          {% if custom_field.type == 'radio' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <div> {% for custom_field_value in custom_field.custom_field_value %}
                <div class=\"radio\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}
                  <label>
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                    {{ custom_field_value.name }}</label>
                  {% else %}
                  <label>
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                    {{ custom_field_value.name }}</label>
                  {% endif %} </div>
                {% endfor %}</div>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %}</div>
          </div>
          {% endif %}
          {% if custom_field.type == 'checkbox' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <div> {% for custom_field_value in custom_field.custom_field_value %}
                <div class=\"checkbox\">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}
                  <label>
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" checked=\"checked\" />
                    {{ custom_field_value.name }}</label>
                  {% else %}
                  <label>
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                    {{ custom_field_value.name }}</label>
                  {% endif %} </div>
                {% endfor %} </div>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% if custom_field.type == 'text' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% if custom_field.type == 'textarea' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% if custom_field.type == 'file' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
              <input type=\"hidden\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}\" />
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %}</div>
          </div>
          {% endif %}
          {% if custom_field.type == 'date' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% if custom_field.type == 'time' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% if custom_field.type == 'datetime' %}
          <div id=\"custom-field{{ custom_field.custom_field_id }}\" class=\"form-group row custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              {% if error_custom_field[custom_field.custom_field_id] %}
              <div class=\"text-danger\">{{ error_custom_field[custom_field.custom_field_id] }}</div>
              {% endif %} </div>
          </div>
          {% endif %}
          {% endfor %}
        </fieldset>
        <fieldset>
          <legend>{{ text_your_password }}</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">{{ entry_password }}</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" />
              {% if error_password %}
              <div class=\"text-danger\">{{ error_password }}</div>
              {% endif %} </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">{{ entry_confirm }}</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\" />
              {% if error_confirm %}
              <div class=\"text-danger\">{{ error_confirm }}</div>
              {% endif %} </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_newsletter }}</legend>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 control-label\">{{ entry_newsletter }}</label>
            <div class=\"col-sm-10\"> {% if newsletter %}
              <label class=\"radio-inline mr-3\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                {{ text_yes }}</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" />
                {{ text_no }}</label>
              {% else %}
              <label class=\"radio-inline mr-3\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" />
                {{ text_yes }}</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
                {{ text_no }}</label>
              {% endif %} </div>
          </div>
        </fieldset>
        {{ captcha }}
        {% if text_agree %}
        <div class=\"form-group row\">
          <div class=\"col-md-12\">
            {% if agree %}
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
                {{ text_agree }}
              </label>
            {% else %}
              <label class=\"checkbox-inline\">
                <input type=\"checkbox\" name=\"newsletter\" value=\"1\" />
                {{ text_agree }}
              </label>
            {% endif %}
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"submit\" value=\"{{ button_continue }}\" class=\"btn btn-primary\" />
          </div>
        </div>
        {% endif %}
      </form>
      {{ content_bottom }}</div>
      </div>
    {{ column_right }}</div>
</div>  

{{ footer }}", "Foody/template/account/register.twig", "");
    }
}

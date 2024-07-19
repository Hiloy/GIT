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

/* Foody/template/extension/module/custom/customer.twig */
class __TwigTemplate_482734f77e60417dd90413f0c6603d2a2c0a1b0d80c0bf60c46d2903a5e11149 extends \Twig\Template
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
        echo ($context["heading_customer"] ?? null);
        echo "</div>
  <div class=\"panel-body\">
    <div class=\"form-group\" style=\"display: ";
        // line 4
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) < 2)) {
            echo " none ";
        }
        echo "\">
      <label class=\"control-label\">";
        // line 5
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo " 
      ";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 7) == ($context["customer_group_id"] ?? null))) {
                echo " 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 10);
                echo "\" checked=\"checked\" />
          ";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 11);
                echo "</label>
      </div>
      ";
            } else {
                // line 13
                echo " 
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 16);
                echo "\" />
          ";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 17);
                echo "</label>
      </div>
      ";
            }
            // line 19
            echo " 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " 
    </div>

    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["setting"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["fields"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 

      ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 25) == "firstname")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-firstname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-firstname\">";
                // line 27
                echo ($context["entry_firstname"] ?? null);
                echo "</label>
          <div class=\"col-sm-10\"><input  type=\"text\" name=\"customer_firstname\" value=\"";
                // line 28
                echo ($context["firstname"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_firstname"] ?? null);
                echo "\" id=\"customer-input-firstname\" class=\"form-control\" data-validation=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["field"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["validation"] ?? null) : null);
                echo "\" /></div>
        </div>
         
      ";
            }
            // line 31
            echo " 

      ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 33) == "lastname")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-lastname\">
          <label class=\"control-label\" for=\"customer-input-lastname\">";
                // line 35
                echo ($context["entry_lastname"] ?? null);
                echo "</label>
          <input type=\"text\" name=\"customer_lastname\" value=\"";
                // line 36
                echo ($context["lastname"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_lastname"] ?? null);
                echo "\" id=\"customer-input-lastname\" class=\"form-control\" data-validation=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["field"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 39
            echo " 

      ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 41) == "email")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-email\">
          <label class=\"control-label\" for=\"customer-input-email\">";
                // line 43
                echo ($context["entry_email"] ?? null);
                echo "</label>
          <input type=\"text\" name=\"customer_email\" value=\"";
                // line 44
                echo ($context["email"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_email"] ?? null);
                echo "\" id=\"customer-input-email\" class=\"form-control\" data-validation=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 47
            echo " 

      ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 49) == "telephone")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-telephone\">
          <label class=\"control-label\" for=\"customer-input-telephone\">";
                // line 51
                echo ($context["entry_telephone"] ?? null);
                echo "</label>
          <input type=\"text\" name=\"customer_telephone\" value=\"";
                // line 52
                echo ($context["telephone"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_telephone"] ?? null);
                echo "\" id=\"customer-input-telephone\" class=\"form-control\" data-validation=\"";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["field"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 55
            echo " 

      ";
            // line 57
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 57) == "fax")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-fax\">
          <label class=\"control-label\" for=\"customer-input-fax\">";
                // line 59
                echo ($context["entry_fax"] ?? null);
                echo "</label>
          <input type=\"text\" name=\"customer_fax\" value=\"";
                // line 60
                echo ($context["fax"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_fax"] ?? null);
                echo "\" id=\"customer-input-fax\" class=\"form-control\" data-validation=\"";
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 63
            echo " 

      ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 65) == "password")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-password\">
          <label class=\"control-label\" for=\"customer-input-password\">";
                // line 67
                echo ($context["entry_password"] ?? null);
                echo "</label>
          <input type=\"password\" name=\"customer_password\" value=\"";
                // line 68
                echo ($context["password"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_password"] ?? null);
                echo "\" id=\"customer-input-password\" class=\"form-control\" data-validation=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["field"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 71
            echo " 

      ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 73) == "confirm")) {
                echo " 
        <div class=\"form-group\" id=\"customer-field-confirm\">
          <label class=\"control-label\" for=\"customer-input-confirm\">";
                // line 75
                echo ($context["entry_confirm"] ?? null);
                echo "</label>
          <input type=\"password\" name=\"customer_confirm\" value=\"";
                // line 76
                echo ($context["confirm"] ?? null);
                echo "\" placeholder=\"";
                echo ($context["entry_confirm"] ?? null);
                echo "\" id=\"customer-input-confirm\" class=\"form-control\" data-validation=\"";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["validation"] ?? null) : null);
                echo "\" />
        </div>
         
      ";
            }
            // line 79
            echo " 

      ";
            // line 81
            if ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 81), 0, 12) == "custom_field")) {
                echo " 

        ";
                // line 83
                $context["custom_field_id"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 83), 12);
                echo " 

        ";
                // line 85
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                    echo " 
        ";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86) == ($context["custom_field_id"] ?? null))) {
                        echo " 
        
        ";
                        // line 88
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 88) == "select")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 89);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 90
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 90);
                            echo "</label>
          <select name=\"customer_custom_field";
                            // line 91
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                            echo "\" class=\"form-control\">
            <option value=\"\">";
                            // line 92
                            echo ($context["text_select"] ?? null);
                            echo "</option>
            ";
                            // line 93
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["custom_field"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <option value=\"";
                                // line 94
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 94);
                                echo "</option>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 95
                            echo " 
          </select>
        </div>
        ";
                        }
                        // line 98
                        echo " 
        ";
                        // line 99
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "radio")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 100
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 100);
                            echo "\">
          <label class=\"control-label\">";
                            // line 101
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                            echo "</label>
          <div id=\"input-custom-field";
                            // line 102
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                            echo "\">
            ";
                            // line 103
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["custom_field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_custom_field";
                                // line 106
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                                echo "\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                                echo "\" />
                ";
                                // line 107
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 107);
                                echo "</label>
            </div>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 109
                            echo " 
          </div>
        </div>
        ";
                        }
                        // line 112
                        echo " 
        ";
                        // line 113
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 114
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 114);
                            echo "\">
          <label class=\"control-label\">";
                            // line 115
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                            echo "</label>
          <div id=\"input-custom-field";
                            // line 116
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                            echo "\">
            ";
                            // line 117
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["custom_field"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["custom_field_value"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                                echo " 
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"customer_custom_field";
                                // line 120
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                                echo "[]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                                echo "\" />
                ";
                                // line 121
                                echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 121);
                                echo "</label>
            </div>
            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 123
                            echo " 
          </div>
        </div>
        ";
                        }
                        // line 126
                        echo " 
        ";
                        // line 127
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "text")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 128
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 128);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 129
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                            echo "</label>
          <input type=\"text\" name=\"customer_custom_field";
                            // line 130
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                            echo "\" class=\"form-control\" data-validation=\"";
                            echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["validation"] ?? null) : null);
                            echo "\" />
        </div>
        ";
                        }
                        // line 132
                        echo " 
        ";
                        // line 133
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "textarea")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 134
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 134);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                            echo "</label>
          <textarea name=\"customer_custom_field";
                            // line 136
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                            echo "\" rows=\"5\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                            echo "\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                            echo "\" class=\"form-control\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 136);
                            echo "</textarea>
        </div>
        ";
                        }
                        // line 138
                        echo " 
        ";
                        // line 139
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 139) == "file")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 140
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 140);
                            echo "\">
          <label class=\"control-label\">";
                            // line 141
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                            echo "</label>
          <br />
          <button type=\"button\" id=\"button-custom-field";
                            // line 143
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                            echo "\" data-loading-text=\"";
                            echo ($context["text_loading"] ?? null);
                            echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                            echo ($context["button_upload"] ?? null);
                            echo "</button>
          <input type=\"hidden\" name=\"customer_custom_field";
                            // line 144
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                            echo "\" value=\"\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                            echo "\" />
        </div>
        ";
                        }
                        // line 146
                        echo " 
        ";
                        // line 147
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 147) == "date")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 148
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 148);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 149
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                            echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 151
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 151);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 156
                        echo " 
        ";
                        // line 157
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 157) == "time")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 158
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 158);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 159
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                            echo "</label>
          <div class=\"input-group time\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 161
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 161);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                            echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 166
                        echo " 
        ";
                        // line 167
                        if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "datetime")) {
                            echo " 
        <div id=\"customer-field-custom-field";
                            // line 168
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                            echo "\" class=\"form-group custom-field\" data-sort=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 168);
                            echo "\">
          <label class=\"control-label\" for=\"input-custom-field";
                            // line 169
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                            echo "</label>
          <div class=\"input-group datetime\">
            <input type=\"text\" name=\"customer_custom_field";
                            // line 171
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                            echo "\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 171);
                            echo "\" placeholder=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                            echo "\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        ";
                        }
                        // line 176
                        echo " 
        ";
                    }
                    // line 177
                    echo " 
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo " 

      ";
            }
            // line 180
            echo " 

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo " 

  </div>
</div>

<script><!--
\$('#custom-customer [name^=customer]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-customer input[name=\\'customer_group_id\\']').on('change', function() {

  // Customer
  custom_block.customer(this.value);

  // Payment Methods
  custom_block.payment(this.value);

});

\$('#custom-customer input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-customer button[id^=\\'button-custom-field\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>

";
    }

    public function getTemplateName()
    {
        return "Foody/template/extension/module/custom/customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 182,  667 => 180,  662 => 178,  655 => 177,  651 => 176,  636 => 171,  629 => 169,  623 => 168,  619 => 167,  616 => 166,  601 => 161,  594 => 159,  588 => 158,  584 => 157,  581 => 156,  566 => 151,  559 => 149,  553 => 148,  549 => 147,  546 => 146,  538 => 144,  530 => 143,  525 => 141,  519 => 140,  515 => 139,  512 => 138,  500 => 136,  494 => 135,  488 => 134,  484 => 133,  481 => 132,  467 => 130,  461 => 129,  455 => 128,  451 => 127,  448 => 126,  442 => 123,  433 => 121,  427 => 120,  419 => 117,  415 => 116,  411 => 115,  405 => 114,  401 => 113,  398 => 112,  392 => 109,  383 => 107,  377 => 106,  369 => 103,  365 => 102,  361 => 101,  355 => 100,  351 => 99,  348 => 98,  342 => 95,  332 => 94,  326 => 93,  322 => 92,  316 => 91,  310 => 90,  304 => 89,  300 => 88,  295 => 86,  289 => 85,  284 => 83,  279 => 81,  275 => 79,  264 => 76,  260 => 75,  255 => 73,  251 => 71,  240 => 68,  236 => 67,  231 => 65,  227 => 63,  216 => 60,  212 => 59,  207 => 57,  203 => 55,  192 => 52,  188 => 51,  183 => 49,  179 => 47,  168 => 44,  164 => 43,  159 => 41,  155 => 39,  144 => 36,  140 => 35,  135 => 33,  131 => 31,  120 => 28,  116 => 27,  111 => 25,  104 => 23,  99 => 20,  92 => 19,  86 => 17,  82 => 16,  77 => 13,  71 => 11,  67 => 10,  61 => 7,  55 => 6,  51 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
  <div class=\"panel-heading\">{{ heading_customer }}</div>
  <div class=\"panel-body\">
    <div class=\"form-group\" style=\"display: {% if customer_groups|length < 2 %} none {% endif %}\">
      <label class=\"control-label\">{{ entry_customer_group }}</label>
      {% for customer_group in customer_groups %} 
      {% if (customer_group.customer_group_id == customer_group_id) %} 
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
      {% endfor %} 
    </div>

    {% for field in setting['fields'] %} 

      {% if (field.name == 'firstname') %} 
        <div class=\"form-group\" id=\"customer-field-firstname\">
          <label class=\"col-sm-2 control-label\" for=\"customer-input-firstname\">{{ entry_firstname }}</label>
          <div class=\"col-sm-10\"><input  type=\"text\" name=\"customer_firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"customer-input-firstname\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" /></div>
        </div>
         
      {% endif %} 

      {% if (field.name == 'lastname') %} 
        <div class=\"form-group\" id=\"customer-field-lastname\">
          <label class=\"control-label\" for=\"customer-input-lastname\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"customer_lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"customer-input-lastname\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if (field.name == 'email') %} 
        <div class=\"form-group\" id=\"customer-field-email\">
          <label class=\"control-label\" for=\"customer-input-email\">{{ entry_email }}</label>
          <input type=\"text\" name=\"customer_email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"customer-input-email\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if (field.name == 'telephone') %} 
        <div class=\"form-group\" id=\"customer-field-telephone\">
          <label class=\"control-label\" for=\"customer-input-telephone\">{{ entry_telephone }}</label>
          <input type=\"text\" name=\"customer_telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"customer-input-telephone\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if (field.name == 'fax') %} 
        <div class=\"form-group\" id=\"customer-field-fax\">
          <label class=\"control-label\" for=\"customer-input-fax\">{{ entry_fax }}</label>
          <input type=\"text\" name=\"customer_fax\" value=\"{{ fax }}\" placeholder=\"{{ entry_fax }}\" id=\"customer-input-fax\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if (field.name == 'password') %} 
        <div class=\"form-group\" id=\"customer-field-password\">
          <label class=\"control-label\" for=\"customer-input-password\">{{ entry_password }}</label>
          <input type=\"password\" name=\"customer_password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"customer-input-password\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if (field.name == 'confirm') %} 
        <div class=\"form-group\" id=\"customer-field-confirm\">
          <label class=\"control-label\" for=\"customer-input-confirm\">{{ entry_confirm }}</label>
          <input type=\"password\" name=\"customer_confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"customer-input-confirm\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
         
      {% endif %} 

      {% if field.name|slice(0, 12) == 'custom_field' %} 

        {% set custom_field_id = field.name|slice(12) %} 

        {% for custom_field in custom_fields %} 
        {% if (custom_field.custom_field_id == custom_field_id) %} 
        
        {% if (custom_field.type == 'select') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <select name=\"customer_custom_field{{ custom_field.custom_field_id }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">
            <option value=\"\">{{ text_select }}</option>
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
            {% endfor %} 
          </select>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'radio') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <div id=\"input-custom-field{{ custom_field.custom_field_id }}\">
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                {{ custom_field_value.name }}</label>
            </div>
            {% endfor %} 
          </div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'checkbox') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <div id=\"input-custom-field{{ custom_field.custom_field_id }}\">
            {% for custom_field_value in custom_field['custom_field_value'] %} 
            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" name=\"customer_custom_field{{ custom_field.custom_field_id }}[]\" value=\"{{ custom_field_value.custom_field_value_id }}\" />
                {{ custom_field_value.name }}</label>
            </div>
            {% endfor %} 
          </div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'text') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" data-validation=\"{{ field['validation'] }}\" />
        </div>
        {% endif %} 
        {% if (custom_field.type == 'textarea') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <textarea name=\"customer_custom_field{{ custom_field.custom_field_id }}\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'file') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\">{{ custom_field.name }}</label>
          <br />
          <button type=\"button\" id=\"button-custom-field{{ custom_field.custom_field_id }}\" data-loading-text=\"{{ text_loading }}\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> {{ button_upload }}</button>
          <input type=\"hidden\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" />
        </div>
        {% endif %} 
        {% if (custom_field.type == 'date') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'time') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group time\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% if (custom_field.type == 'datetime') %} 
        <div id=\"customer-field-custom-field{{ custom_field.custom_field_id }}\" class=\"form-group custom-field\" data-sort=\"{{ custom_field.sort_order }}\">
          <label class=\"control-label\" for=\"input-custom-field{{ custom_field.custom_field_id }}\">{{ custom_field.name }}</label>
          <div class=\"input-group datetime\">
            <input type=\"text\" name=\"customer_custom_field{{ custom_field.custom_field_id }}\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field{{ custom_field.custom_field_id }}\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        {% endif %} 
        {% endif %} 
        {% endfor %} 

      {% endif %} 

    {% endfor %} 

  </div>
</div>

<script><!--
\$('#custom-customer [name^=customer]').on('input', function() {
  \$(this).parent().find('.text-danger').remove();
  \$(this).parent().removeClass('has-error');
});
//--></script>

<script><!--
\$('#custom-customer input[name=\\'customer_group_id\\']').on('change', function() {

  // Customer
  custom_block.customer(this.value);

  // Payment Methods
  custom_block.payment(this.value);

});

\$('#custom-customer input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>

<script><!--
\$('#custom-customer button[id^=\\'button-custom-field\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>

", "Foody/template/extension/module/custom/customer.twig", "");
    }
}

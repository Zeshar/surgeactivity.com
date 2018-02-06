<?php

/* ZesharCRMCoreBundle:ListField:lead_type.html.twig */
class __TwigTemplate_8727417d8df57a6504dd952eade0b6ecfb2a65d98f485fa11b85248c189c2092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_list_field_attributes' => array($this, 'block_sonata_list_field_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66396a0de85e397fe5e0839c8f33d1a1a87e00122787cb3cb71e98c80ac5b242 = $this->env->getExtension("native_profiler");
        $__internal_66396a0de85e397fe5e0839c8f33d1a1a87e00122787cb3cb71e98c80ac5b242->enter($__internal_66396a0de85e397fe5e0839c8f33d1a1a87e00122787cb3cb71e98c80ac5b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:lead_type.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getTypeString", array(), "method", true, true)) {
            // line 3
            echo "        ";
            $context["typeString"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getTypeString", array(), "method");
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context["typeString"] = $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getLead", array(), "method"), "getTypeString", array(), "method");
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Warm")) {
            // line 8
            echo "        <span class=\"tile-type warm\">Warm</span>
    ";
        }
        // line 10
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Cold")) {
            // line 11
            echo "        <span class=\"tile-type cold\">Cold</span>
    ";
        }
        // line 13
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Hot")) {
            // line 14
            echo "        <span class=\"tile-type hot\">Hot</span>
    ";
        }
        // line 16
        echo "</td>
";
        
        $__internal_66396a0de85e397fe5e0839c8f33d1a1a87e00122787cb3cb71e98c80ac5b242->leave($__internal_66396a0de85e397fe5e0839c8f33d1a1a87e00122787cb3cb71e98c80ac5b242_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_efb37d9ef06cc0baa79144e74489706dc88d5661200c985287454e415f4e882e = $this->env->getExtension("native_profiler");
        $__internal_efb37d9ef06cc0baa79144e74489706dc88d5661200c985287454e415f4e882e->enter($__internal_efb37d9ef06cc0baa79144e74489706dc88d5661200c985287454e415f4e882e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_efb37d9ef06cc0baa79144e74489706dc88d5661200c985287454e415f4e882e->leave($__internal_efb37d9ef06cc0baa79144e74489706dc88d5661200c985287454e415f4e882e_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:lead_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 1,  63 => 16,  59 => 14,  56 => 13,  52 => 11,  49 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.getTypeString() is defined %}*/
/*         {% set typeString = object.getTypeString() %}*/
/*     {% else %}*/
/*         {% set typeString = object.getLead().getTypeString() %}*/
/*     {% endif %}*/
/*     {% if typeString == 'Warm' %}*/
/*         <span class="tile-type warm">Warm</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'Cold' %}*/
/*         <span class="tile-type cold">Cold</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'Hot' %}*/
/*         <span class="tile-type hot">Hot</span>*/
/*     {% endif %}*/
/* </td>*/
/* */

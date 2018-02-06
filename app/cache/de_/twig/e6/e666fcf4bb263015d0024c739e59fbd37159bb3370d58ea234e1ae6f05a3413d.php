<?php

/* ZesharCRMCoreBundle:ListField:log_history_operation_type.html.twig */
class __TwigTemplate_8fae992832f73ec0081ae799aba4f6aa7bd3ef065aaef3d3ebb2f8460164e01b extends Twig_Template
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
        $__internal_d49c31839fd167fa33ed055d158627b5db8f0a5e458bf580819d643f7164132a = $this->env->getExtension("native_profiler");
        $__internal_d49c31839fd167fa33ed055d158627b5db8f0a5e458bf580819d643f7164132a->enter($__internal_d49c31839fd167fa33ed055d158627b5db8f0a5e458bf580819d643f7164132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:log_history_operation_type.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        $context["typeString"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getTypeString", array(), "method");
        // line 3
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Login")) {
            // line 4
            echo "        Login
    ";
        }
        // line 6
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Logout")) {
            // line 7
            echo "        Logout
    ";
        }
        // line 9
        echo "</td>";
        
        $__internal_d49c31839fd167fa33ed055d158627b5db8f0a5e458bf580819d643f7164132a->leave($__internal_d49c31839fd167fa33ed055d158627b5db8f0a5e458bf580819d643f7164132a_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_20dec7bca7928be0c4c42e0dc1b8b3860d26a1c19b7bca45d529ca3f2eba54f0 = $this->env->getExtension("native_profiler");
        $__internal_20dec7bca7928be0c4c42e0dc1b8b3860d26a1c19b7bca45d529ca3f2eba54f0->enter($__internal_20dec7bca7928be0c4c42e0dc1b8b3860d26a1c19b7bca45d529ca3f2eba54f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-text sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_20dec7bca7928be0c4c42e0dc1b8b3860d26a1c19b7bca45d529ca3f2eba54f0->leave($__internal_20dec7bca7928be0c4c42e0dc1b8b3860d26a1c19b7bca45d529ca3f2eba54f0_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:log_history_operation_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 1,  44 => 9,  40 => 7,  37 => 6,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-text sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% set typeString = object.getTypeString() %}*/
/*     {% if typeString == 'Login' %}*/
/*         Login*/
/*     {% endif %}*/
/*     {% if typeString == 'Logout' %}*/
/*         Logout*/
/*     {% endif %}*/
/* </td>*/

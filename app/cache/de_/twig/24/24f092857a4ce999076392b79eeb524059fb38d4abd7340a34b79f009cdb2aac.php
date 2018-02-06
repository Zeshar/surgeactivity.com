<?php

/* ZesharCRMCoreBundle:ListField:billing_status.html.twig */
class __TwigTemplate_a9193a47b2e9023feb1a9e8ad78b4a29660fda8354f335f01fdafd303183bd0a extends Twig_Template
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
        $__internal_41c904e214d071830958dde8b92b92b416e9cd9c17ff824fae1bf18906a38281 = $this->env->getExtension("native_profiler");
        $__internal_41c904e214d071830958dde8b92b92b416e9cd9c17ff824fae1bf18906a38281->enter($__internal_41c904e214d071830958dde8b92b92b416e9cd9c17ff824fae1bf18906a38281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:billing_status.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">

    ";
        // line 3
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "billingStatus", array(), "method") == "Active")) {
            // line 4
            echo "        <span class=\"contact-status yes\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "billingStatus", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "billingStatus", array()) == "Inactive")) {
            // line 7
            echo "        <span class=\"contact-status no\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "billingStatus", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 9
        echo "
</td>";
        
        $__internal_41c904e214d071830958dde8b92b92b416e9cd9c17ff824fae1bf18906a38281->leave($__internal_41c904e214d071830958dde8b92b92b416e9cd9c17ff824fae1bf18906a38281_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_6a006869d2dfa9cce5e16331abbd27f5189f9c09624b8015af4ff0b82a638bd9 = $this->env->getExtension("native_profiler");
        $__internal_6a006869d2dfa9cce5e16331abbd27f5189f9c09624b8015af4ff0b82a638bd9->enter($__internal_6a006869d2dfa9cce5e16331abbd27f5189f9c09624b8015af4ff0b82a638bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_6a006869d2dfa9cce5e16331abbd27f5189f9c09624b8015af4ff0b82a638bd9->leave($__internal_6a006869d2dfa9cce5e16331abbd27f5189f9c09624b8015af4ff0b82a638bd9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:billing_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 1,  46 => 9,  40 => 7,  37 => 6,  31 => 4,  29 => 3,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/* */
/*     {% if object.billingStatus() == 'Active' %}*/
/*         <span class="contact-status yes">{{ object.billingStatus() }}</span>*/
/*     {% endif %}*/
/*     {% if object.billingStatus == 'Inactive' %}*/
/*         <span class="contact-status no">{{ object.billingStatus }}</span>*/
/*     {% endif %}*/
/* */
/* </td>*/

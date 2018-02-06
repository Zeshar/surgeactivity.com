<?php

/* ZesharCRMCoreBundle:ListField:opportunity_lead_score.html.twig */
class __TwigTemplate_8f26596c981375e69bf849f41789518697007df3c60c9fbcbbcbad571d87fbe7 extends Twig_Template
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
        $__internal_19cb82daf6fc07025f6d270c53cbfbace5943f6e3bf668ed8a7c7a00c2ca6933 = $this->env->getExtension("native_profiler");
        $__internal_19cb82daf6fc07025f6d270c53cbfbace5943f6e3bf668ed8a7c7a00c2ca6933->enter($__internal_19cb82daf6fc07025f6d270c53cbfbace5943f6e3bf668ed8a7c7a00c2ca6933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:opportunity_lead_score.html.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 2
            echo "    <td";
            $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
            echo ">
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "%
    </td>
";
        } else {
            // line 6
            echo "    <td></td>
";
        }
        
        $__internal_19cb82daf6fc07025f6d270c53cbfbace5943f6e3bf668ed8a7c7a00c2ca6933->leave($__internal_19cb82daf6fc07025f6d270c53cbfbace5943f6e3bf668ed8a7c7a00c2ca6933_prof);

    }

    // line 2
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_dd86c2b2cb61b178427335641faec0b173e1610440cf38c9d3758dc9b3478f2b = $this->env->getExtension("native_profiler");
        $__internal_dd86c2b2cb61b178427335641faec0b173e1610440cf38c9d3758dc9b3478f2b->enter($__internal_dd86c2b2cb61b178427335641faec0b173e1610440cf38c9d3758dc9b3478f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_dd86c2b2cb61b178427335641faec0b173e1610440cf38c9d3758dc9b3478f2b->leave($__internal_dd86c2b2cb61b178427335641faec0b173e1610440cf38c9d3758dc9b3478f2b_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:opportunity_lead_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  36 => 6,  30 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% if value is not empty %}*/
/*     <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*         {{ value }}%*/
/*     </td>*/
/* {% else %}*/
/*     <td></td>*/
/* {% endif %}*/

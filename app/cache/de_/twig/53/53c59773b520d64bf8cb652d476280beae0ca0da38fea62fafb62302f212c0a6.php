<?php

/* ZesharCRMCoreBundle:ListField:list_field_raw_value.html.twig */
class __TwigTemplate_17d24c4eff7276ef609734e47e7d5e205ccbb9d6a29a426b91cd30b8e49c266c extends Twig_Template
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
        $__internal_9d2df4fce5f47484b6a36f93c5fd10d4ff44f5a9ddd52455ef22b2043d90bf89 = $this->env->getExtension("native_profiler");
        $__internal_9d2df4fce5f47484b6a36f93c5fd10d4ff44f5a9ddd52455ef22b2043d90bf89->enter($__internal_9d2df4fce5f47484b6a36f93c5fd10d4ff44f5a9ddd52455ef22b2043d90bf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:list_field_raw_value.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
</td>

";
        
        $__internal_9d2df4fce5f47484b6a36f93c5fd10d4ff44f5a9ddd52455ef22b2043d90bf89->leave($__internal_9d2df4fce5f47484b6a36f93c5fd10d4ff44f5a9ddd52455ef22b2043d90bf89_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_6663b8dc6dcc4b930dcc76c5bab1169fb0816f96bc7048a4f5a9b63edfef41b0 = $this->env->getExtension("native_profiler");
        $__internal_6663b8dc6dcc4b930dcc76c5bab1169fb0816f96bc7048a4f5a9b63edfef41b0->enter($__internal_6663b8dc6dcc4b930dcc76c5bab1169fb0816f96bc7048a4f5a9b63edfef41b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_6663b8dc6dcc4b930dcc76c5bab1169fb0816f96bc7048a4f5a9b63edfef41b0->leave($__internal_6663b8dc6dcc4b930dcc76c5bab1169fb0816f96bc7048a4f5a9b63edfef41b0_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:list_field_raw_value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {{ value }}*/
/* </td>*/
/* */
/* */

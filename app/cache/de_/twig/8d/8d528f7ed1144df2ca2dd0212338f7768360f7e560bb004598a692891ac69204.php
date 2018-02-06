<?php

/* ZesharCRMCoreBundle:ListField:lead_name_phone.html.twig */
class __TwigTemplate_4d50bee4d2e494a7898e002fc307dbd9d59e61d37b4b0e6c93163c29f7481082 extends Twig_Template
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
        $__internal_6b574f34da04c0d32ac1adcd293c83f87f37a7ed7eeb20792f0206707d9399ba = $this->env->getExtension("native_profiler");
        $__internal_6b574f34da04c0d32ac1adcd293c83f87f37a7ed7eeb20792f0206707d9399ba->enter($__internal_6b574f34da04c0d32ac1adcd293c83f87f37a7ed7eeb20792f0206707d9399ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:lead_name_phone.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", true, true)) {
            // line 3
            echo "        <div class=\"name-tel-tab\" style=\"width: auto;\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getFullName", array(), "method"), "html", null, true);
            echo "
        </div>
        ";
            // line 6
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()))) {
                // line 7
                echo "            <div class=\"name-tel-tab ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "dnc";
                } else {
                    echo "make-call";
                }
                echo "\" style=\"width: auto; overflow: visible; ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "cursor:pointer;";
                }
                echo "\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 11
            echo "    ";
        }
        // line 12
        echo "</td>
";
        
        $__internal_6b574f34da04c0d32ac1adcd293c83f87f37a7ed7eeb20792f0206707d9399ba->leave($__internal_6b574f34da04c0d32ac1adcd293c83f87f37a7ed7eeb20792f0206707d9399ba_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_643a049d4f566f126bc30580cb8e790602350640427f6faa92fac4d58d2ef3a4 = $this->env->getExtension("native_profiler");
        $__internal_643a049d4f566f126bc30580cb8e790602350640427f6faa92fac4d58d2ef3a4->enter($__internal_643a049d4f566f126bc30580cb8e790602350640427f6faa92fac4d58d2ef3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_643a049d4f566f126bc30580cb8e790602350640427f6faa92fac4d58d2ef3a4->leave($__internal_643a049d4f566f126bc30580cb8e790602350640427f6faa92fac4d58d2ef3a4_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:lead_name_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 1,  62 => 12,  59 => 11,  53 => 8,  40 => 7,  38 => 6,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.contactCard is defined %}*/
/*         <div class="name-tel-tab" style="width: auto;">*/
/*             {{ object.contactCard.getFullName() }}*/
/*         </div>*/
/*         {% if object.contactCard.phone is not empty %}*/
/*             <div class="name-tel-tab {% if object.contactCard.phone.getDnc() %}dnc{% else %}make-call{% endif %}" style="width: auto; overflow: visible; {% if not object.contactCard.phone.getDnc() %}cursor:pointer;{% endif %}">*/
/*                 {{ object.contactCard.phone }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */

<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig */
class __TwigTemplate_efbfbda28d24cfac11299bc28dc023f9e02490c68a54d2791514c3bcc6e4d846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08878d9bf3103f223a8ee0c8292e6d48fc8c701f33ab4f76f1c1b92093a81388 = $this->env->getExtension("native_profiler");
        $__internal_08878d9bf3103f223a8ee0c8292e6d48fc8c701f33ab4f76f1c1b92093a81388->enter($__internal_08878d9bf3103f223a8ee0c8292e6d48fc8c701f33ab4f76f1c1b92093a81388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08878d9bf3103f223a8ee0c8292e6d48fc8c701f33ab4f76f1c1b92093a81388->leave($__internal_08878d9bf3103f223a8ee0c8292e6d48fc8c701f33ab4f76f1c1b92093a81388_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_5f30570ab12ddd19e2ca3fdcd65677e8efc5a19c258a9cdeac267e53d973e2cb = $this->env->getExtension("native_profiler");
        $__internal_5f30570ab12ddd19e2ca3fdcd65677e8efc5a19c258a9cdeac267e53d973e2cb->enter($__internal_5f30570ab12ddd19e2ca3fdcd65677e8efc5a19c258a9cdeac267e53d973e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 5
            echo "        ";
            if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEmail", array(), "method"))) {
                // line 6
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                    // line 7
                    echo "                <span class=\"email-contact-tab\">
                                <a href=\"#\" class=\"send-email\" title=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEmail", array(), "method"), "html", null, true);
                    echo "</a>
                            </span>
            ";
                } else {
                    // line 11
                    echo "                <span class=\"email-contact-tab marked-dne\">
                                ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getEmail", array(), "method"), "html", null, true);
                    echo "
                            </span>
            ";
                }
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
        
        $__internal_5f30570ab12ddd19e2ca3fdcd65677e8efc5a19c258a9cdeac267e53d973e2cb->leave($__internal_5f30570ab12ddd19e2ca3fdcd65677e8efc5a19c258a9cdeac267e53d973e2cb_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  68 => 15,  62 => 12,  59 => 11,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value %}*/
/*         {% if object.getEmail() is not empty %}*/
/*             {% if not object.getEmail().getDonotEmail() %}*/
/*                 <span class="email-contact-tab">*/
/*                                 <a href="#" class="send-email" title="{{ object.getEmail() }}">{{ object.getEmail() }}</a>*/
/*                             </span>*/
/*             {% else %}*/
/*                 <span class="email-contact-tab marked-dne">*/
/*                                 {{ object.getEmail() }}*/
/*                             </span>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/

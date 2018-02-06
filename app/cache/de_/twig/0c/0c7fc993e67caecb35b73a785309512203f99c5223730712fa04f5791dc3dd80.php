<?php

/* ZesharCRMCoreBundle:Widget:assignedOpportunity.html.twig */
class __TwigTemplate_b93a0724e13ee60bff9620f7a44bcede2174c5eaa75bfb51bc6c62c80ad6bcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c9ba5b73d28b5ca39e73d6b064530edd7d7c466bc1e74d7c3e95daa13fcdd2b = $this->env->getExtension("native_profiler");
        $__internal_3c9ba5b73d28b5ca39e73d6b064530edd7d7c466bc1e74d7c3e95daa13fcdd2b->enter($__internal_3c9ba5b73d28b5ca39e73d6b064530edd7d7c466bc1e74d7c3e95daa13fcdd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:assignedOpportunity.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_3c9ba5b73d28b5ca39e73d6b064530edd7d7c466bc1e74d7c3e95daa13fcdd2b->leave($__internal_3c9ba5b73d28b5ca39e73d6b064530edd7d7c466bc1e74d7c3e95daa13fcdd2b_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_48adce86672bad372a1a22b19b8d269d55554c5250661948d72a46e4e08a61f9 = $this->env->getExtension("native_profiler");
        $__internal_48adce86672bad372a1a22b19b8d269d55554c5250661948d72a46e4e08a61f9->enter($__internal_48adce86672bad372a1a22b19b8d269d55554c5250661948d72a46e4e08a61f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"custom-block table-block\">
        <div class=\"custom-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom\"></button>
                <button class=\"settings-custom\"></button>
                <button class=\"close-custom\"></button>
            </div>
            <div class=\"custom-menu-select\">
                ";
        // line 10
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 11
            echo "                    <select class=\"user_data\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 13
                echo "                            <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : $this->getContext($context, "selectedUser")) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </select>
                ";
        }
        // line 17
        echo "            </div>
            <h3>Opportunities</h3>
        </div>
        <div class=\"custom-content\">
            <table class=\"custom-table\">
                <thead>
                <tr>
                    <th><span>Name</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Status</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Product</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Account Name</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Official Phone</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Email</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Opportunity Score</span><a class=\"filter-link\" href=\"#\"></a></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                    <tr >
                        <td><span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunityStatus"]) ? $context["opportunityStatus"] : $this->getContext($context, "opportunityStatus")), $this->getAttribute($context["item"], "status", array()), array(), "array"), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "opportunityCategory", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 39
            if ( !(null === $this->getAttribute($context["item"], "contactCard", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "lastName", array()), "html", null, true);
                echo " ";
            }
            echo "</span></td>
                        <td><span>";
            // line 40
            if ( !(null === $this->getAttribute($context["item"], "contactCard", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "phone", array()), "html", null, true);
                echo " ";
            }
            echo "</span></td>
                        <td><span>";
            // line 41
            if ( !(null === $this->getAttribute($context["item"], "contactCard", array()))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "email", array()), "html", null, true);
                echo " ";
            }
            echo "</span></td>
                        <td><span>No data</span></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_48adce86672bad372a1a22b19b8d269d55554c5250661948d72a46e4e08a61f9->leave($__internal_48adce86672bad372a1a22b19b8d269d55554c5250661948d72a46e4e08a61f9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:assignedOpportunity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  127 => 41,  119 => 40,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  94 => 35,  90 => 34,  71 => 17,  67 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="custom-block table-block">*/
/*         <div class="custom-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom"></button>*/
/*                 <button class="settings-custom"></button>*/
/*                 <button class="close-custom"></button>*/
/*             </div>*/
/*             <div class="custom-menu-select">*/
/*                 {% if persons is not empty %}*/
/*                     <select class="user_data">*/
/*                         {% for person in persons %}*/
/*                             <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <h3>Opportunities</h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             <table class="custom-table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th><span>Name</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Status</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Product</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Account Name</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Official Phone</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Email</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Opportunity Score</span><a class="filter-link" href="#"></a></th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for item in data %}*/
/*                     <tr >*/
/*                         <td><span>{{ item.name }}</span></td>*/
/*                         <td><span>{{ opportunityStatus[item.status] }}</span></td>*/
/*                         <td><span>{{ item.opportunityCategory }}</span></td>*/
/*                         <td><span>{% if item.contactCard is not null %} {{ item.contactCard.firstName }} {{ item.contactCard.lastName }} {% endif %}</span></td>*/
/*                         <td><span>{% if item.contactCard is not null %} {{ item.contactCard.phone }} {% endif %}</span></td>*/
/*                         <td><span>{% if item.contactCard is not null %} {{ item.contactCard.email }} {% endif %}</span></td>*/
/*                         <td><span>No data</span></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

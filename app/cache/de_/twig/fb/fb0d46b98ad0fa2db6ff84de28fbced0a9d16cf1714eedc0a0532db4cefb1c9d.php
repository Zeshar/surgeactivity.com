<?php

/* ZesharCRMCoreBundle:Widget:assignedLeads.html.twig */
class __TwigTemplate_a21389741a614345c994bba3b098c31d497cc4ad81de94eae46a2ecf9afb231f extends Twig_Template
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
        $__internal_d6c4725c67c7e8ace70134479b4389a23f3aff56f8b0f8524856a284fab5c231 = $this->env->getExtension("native_profiler");
        $__internal_d6c4725c67c7e8ace70134479b4389a23f3aff56f8b0f8524856a284fab5c231->enter($__internal_d6c4725c67c7e8ace70134479b4389a23f3aff56f8b0f8524856a284fab5c231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:assignedLeads.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_d6c4725c67c7e8ace70134479b4389a23f3aff56f8b0f8524856a284fab5c231->leave($__internal_d6c4725c67c7e8ace70134479b4389a23f3aff56f8b0f8524856a284fab5c231_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_674cebe8962e7cda44bd1ccd220e5900fa60ae3e0956464361d2a48283898418 = $this->env->getExtension("native_profiler");
        $__internal_674cebe8962e7cda44bd1ccd220e5900fa60ae3e0956464361d2a48283898418->enter($__internal_674cebe8962e7cda44bd1ccd220e5900fa60ae3e0956464361d2a48283898418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

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
            <h3>Leads</h3>
        </div>
        <div class=\"custom-content\">
            <table class=\"custom-table\">
                <thead>
                <tr>
                    <th><span>Name</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Status</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Lead Type</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Product</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Account Name</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Official Phone</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Email</span><a class=\"filter-link\" href=\"#\"></a></th>
                    <th><span>Lead Score</span><a class=\"filter-link\" href=\"#\"></a></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                    <tr >
                        <td><span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leadStatus"]) ? $context["leadStatus"] : $this->getContext($context, "leadStatus")), $this->getAttribute($context["item"], "status", array()), array(), "array"), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leadType"]) ? $context["leadType"] : $this->getContext($context, "leadType")), $this->getAttribute($context["item"], "type", array()), array(), "array"), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "leadCategory", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 41
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "contactCard", array(), "any", false, true), "firstName", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "firstName", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "contactCard", array(), "any", false, true), "lastName", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "lastName", array())) : ("")), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "contactCard", array(), "any", false, true), "phone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "phone", array())) : ("")), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 43
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "contactCard", array(), "any", false, true), "email", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["item"], "contactCard", array()), "email", array())) : ("")), "html", null, true);
            echo "</span></td>
                        <td><span>No data</span></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_674cebe8962e7cda44bd1ccd220e5900fa60ae3e0956464361d2a48283898418->leave($__internal_674cebe8962e7cda44bd1ccd220e5900fa60ae3e0956464361d2a48283898418_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:assignedLeads.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  124 => 43,  120 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  95 => 36,  91 => 35,  71 => 17,  67 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  35 => 2,  23 => 1,);
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
/*             <h3>Leads</h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             <table class="custom-table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th><span>Name</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Status</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Lead Type</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Product</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Account Name</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Official Phone</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Email</span><a class="filter-link" href="#"></a></th>*/
/*                     <th><span>Lead Score</span><a class="filter-link" href="#"></a></th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for item in data %}*/
/*                     <tr >*/
/*                         <td><span>{{ item.name }}</span></td>*/
/*                         <td><span>{{ leadStatus[item.status] }}</span></td>*/
/*                         <td><span>{{ leadType[item.type] }}</span></td>*/
/*                         <td><span>{{ item.leadCategory }}</span></td>*/
/*                         <td><span>{{ item.contactCard.firstName is defined ? item.contactCard.firstName : '' }} {{ item.contactCard.lastName is defined ? item.contactCard.lastName : '' }}</span></td>*/
/*                         <td><span>{{ item.contactCard.phone is defined ? item.contactCard.phone : '' }}</span></td>*/
/*                         <td><span>{{ item.contactCard.email is defined ? item.contactCard.email : '' }}</span></td>*/
/*                         <td><span>No data</span></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* ZesharCRMCoreBundle:Widget:assignedLeads.html.twig */
class __TwigTemplate_e6d60a149bf9e3ab053159377fedee84f344d2c7f0a18e55016aa3d83fd80f02 extends Twig_Template
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
        // line 1
        $this->displayBlock('widget', $context, $blocks);
    }

    public function block_widget($context, array $blocks = array())
    {
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
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : null))) {
            // line 11
            echo "                    <select class=\"user_data\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 13
                echo "                            <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : null) == $this->getAttribute($context["person"], "username", array()))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                    <tr >
                        <td><span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leadStatus"]) ? $context["leadStatus"] : null), $this->getAttribute($context["item"], "status", array()), array(), "array"), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["leadType"]) ? $context["leadType"] : null), $this->getAttribute($context["item"], "type", array()), array(), "array"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:assignedLeads.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  115 => 43,  111 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  86 => 36,  82 => 35,  62 => 17,  58 => 15,  45 => 13,  41 => 12,  38 => 11,  36 => 10,  26 => 2,  20 => 1,);
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

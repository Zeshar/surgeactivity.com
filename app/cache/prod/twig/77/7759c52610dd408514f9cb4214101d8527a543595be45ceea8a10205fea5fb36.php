<?php

/* ZesharCRMCoreBundle:Widget:assignedOpportunity.html.twig */
class __TwigTemplate_adffe65fdecd08cf28f2b1f65967fa2fb4a7626aa8d07d43b4609a69cc62c83a extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                    <tr >
                        <td><span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span></td>
                        <td><span>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opportunityStatus"]) ? $context["opportunityStatus"] : null), $this->getAttribute($context["item"], "status", array()), array(), "array"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:assignedOpportunity.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  118 => 41,  110 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  85 => 35,  81 => 34,  62 => 17,  58 => 15,  45 => 13,  41 => 12,  38 => 11,  36 => 10,  26 => 2,  20 => 1,);
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

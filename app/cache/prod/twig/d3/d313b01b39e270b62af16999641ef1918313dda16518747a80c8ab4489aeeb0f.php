<?php

/* ZesharCRMCoreBundle:Widget:contacted.html.twig */
class __TwigTemplate_12f9dfa34c846af74ba50f0d9c028ce6b748761a4cee1adcb4fe4b184a19c81a extends Twig_Template
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
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:contacted.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block widget %}*/
/*     {#<div class="custom-block">*/
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
/*             <h3>My Activities</h3>*/
/*         </div>*/
/*         <div class="custom-content">*/
/*             <table class="table-widget">*/
/*                 <tr>*/
/*                     <th></th>*/
/*                     <th></th>*/
/*                     <th>Contacted</th>*/
/*                     <th>Quoted</th>*/
/*                     <th>Sold</th>*/
/*                 </tr>*/
/* */
/*                 {% for key, value in data %}*/
/*                     <tr >*/
/*                         <td>{{ key }}</td>*/
/*                         <td>*/
/*                             <div class="column-line">*/
/*                                 <i data-percent-width="{{ value['percent'] }}%" class="icon-line icon-widget"></i>*/
/*                             </div>*/
/*                         <td  >{{ value['percent'] }}%</td>*/
/*                         <td>{{ value['quote'] }}</td>*/
/*                         <td>0</td>*/
/*                     </tr >*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>#}*/
/* {% endblock %}*/
/* */

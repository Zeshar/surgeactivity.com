<?php

/* ZesharCRMCoreBundle:Widget:contacted.html.twig */
class __TwigTemplate_612b69f4174ec8eca27bdaa5b593668032950bc9be704bfdcd5ece965a8f7d35 extends Twig_Template
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
        $__internal_c583db49b71d4dc017128e3424e7696faad3558146a9e6e139b876e47840ffbd = $this->env->getExtension("native_profiler");
        $__internal_c583db49b71d4dc017128e3424e7696faad3558146a9e6e139b876e47840ffbd->enter($__internal_c583db49b71d4dc017128e3424e7696faad3558146a9e6e139b876e47840ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:contacted.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_c583db49b71d4dc017128e3424e7696faad3558146a9e6e139b876e47840ffbd->leave($__internal_c583db49b71d4dc017128e3424e7696faad3558146a9e6e139b876e47840ffbd_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_e6cd6c4d55e0cbcc3ad251664650c587090f191c0a7d97addc2534506aaf5d9c = $this->env->getExtension("native_profiler");
        $__internal_e6cd6c4d55e0cbcc3ad251664650c587090f191c0a7d97addc2534506aaf5d9c->enter($__internal_e6cd6c4d55e0cbcc3ad251664650c587090f191c0a7d97addc2534506aaf5d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    ";
        
        $__internal_e6cd6c4d55e0cbcc3ad251664650c587090f191c0a7d97addc2534506aaf5d9c->leave($__internal_e6cd6c4d55e0cbcc3ad251664650c587090f191c0a7d97addc2534506aaf5d9c_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:contacted.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
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

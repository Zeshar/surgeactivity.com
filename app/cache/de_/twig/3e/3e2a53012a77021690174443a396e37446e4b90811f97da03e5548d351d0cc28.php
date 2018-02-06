<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig */
class __TwigTemplate_20d4761676e2cd1355b7a02ca97ce815ebb079cd7bd7065d133c3a2370cc75d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fdfaddc9e9a8ae0cc3ce05ad6e4f27f491e4ad1f0bd5f59156d562f6f59d76c = $this->env->getExtension("native_profiler");
        $__internal_7fdfaddc9e9a8ae0cc3ce05ad6e4f27f491e4ad1f0bd5f59156d562f6f59d76c->enter($__internal_7fdfaddc9e9a8ae0cc3ce05ad6e4f27f491e4ad1f0bd5f59156d562f6f59d76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig"));

        // line 1
        echo "<div class=\"form-column\">
    <div class=\"form-group\">
        <textarea name=\"note\" id=\"note\" class=\"form-control\" placeholder=\"Your comment\"></textarea>
        <div class=\"block-attach-file\">
            <form enctype=\"multipart/form-data\">
                <input type=\"file\" id=\"attachmentFile\" name=\"attachmentFile\" class=\"attach-file\" >
            </form>
        </div>
    </div>
    <div class=\"clearfix\">
        <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig", 12)->display(array_merge($context, array("show_cancel_link" => false, "save_button_title" => "Post")));
        // line 13
        echo "    </div>
</div>
<div class=\"comments-list\" style=\"max-height: 220px; overflow: hidden; overflow-y: scroll;\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAttachments", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 17
            echo "        <article ";
            echo ">
            <h3>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</h3>
            <div class=\"comment-text\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getText", array(), "method"), "html", null, true);
            echo "</p>
                ";
            // line 21
            if ( !(null === $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getFile", array(), "method"))) {
                // line 22
                echo "                    <a target=\"_blank\" class=\"file-link\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getDownloadUrl", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getFilename", array(), "method"), "html", null, true);
                echo "</a>
                ";
            }
            // line 24
            echo "            </div>
            <div class=\"comment-footer\">
                <span class=\"post-created\">Posted at: ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getCreatedAt", array(), "method"), "y-m-d H:i:s"), "html", null, true);
            echo " </span>
                <span class=\"post-updated\">Updated at: ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getUpdatedAt", array(), "method"), "y-m-d H:i:s"), "html", null, true);
            echo " </span>
                        <span class=\"comment-controls\">
                            <a href=\"#\" class=\"comment-edit\"><i class=\"fa fa-pencil\"></i></a>
                            <a href=\"#\" class=\"comment-delete\"><i class=\"fa fa-times\"></i></a>
                        </span>
            </div>
            <input type=\"hidden\" class=\"noteId\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "getAttachment", array(), "method"), "getId", array(), "method"), "html", null, true);
            echo "\" />
            <input type=\"hidden\" class=\"lead_id\" name=\"lead_id\" value=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
            echo "\" />
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 39
        echo "</div>";
        
        $__internal_7fdfaddc9e9a8ae0cc3ce05ad6e4f27f491e4ad1f0bd5f59156d562f6f59d76c->leave($__internal_7fdfaddc9e9a8ae0cc3ce05ad6e4f27f491e4ad1f0bd5f59156d562f6f59d76c_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  102 => 37,  93 => 34,  89 => 33,  80 => 27,  76 => 26,  72 => 24,  64 => 22,  62 => 21,  58 => 20,  53 => 18,  49 => 17,  45 => 16,  40 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }
}
/* <div class="form-column">*/
/*     <div class="form-group">*/
/*         <textarea name="note" id="note" class="form-control" placeholder="Your comment"></textarea>*/
/*         <div class="block-attach-file">*/
/*             <form enctype="multipart/form-data">*/
/*                 <input type="file" id="attachmentFile" name="attachmentFile" class="attach-file" >*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false, 'save_button_title': 'Post'} %}*/
/*     </div>*/
/* </div>*/
/* <div class="comments-list" style="max-height: 220px; overflow: hidden; overflow-y: scroll;">*/
/*     {% for note in object.getAttachments() %}*/
/*         <article {#{{ loop.index > 2 ? "style='display:none'" : "" }}#}>*/
/*             <h3>{{ note.getAttachment().getCreator().getUsername() }}</h3>*/
/*             <div class="comment-text">*/
/*                 <p>{{ note.getAttachment().getText() }}</p>*/
/*                 {% if note.getAttachment().getFile() is not null %}*/
/*                     <a target="_blank" class="file-link" href="{{ note.getAttachment().getDownloadUrl() }}">{{ note.getAttachment().getFilename() }}</a>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="comment-footer">*/
/*                 <span class="post-created">Posted at: {{ note.getAttachment().getCreatedAt()|date('y-m-d H:i:s') }} </span>*/
/*                 <span class="post-updated">Updated at: {{ note.getAttachment().getUpdatedAt()|date('y-m-d H:i:s') }} </span>*/
/*                         <span class="comment-controls">*/
/*                             <a href="#" class="comment-edit"><i class="fa fa-pencil"></i></a>*/
/*                             <a href="#" class="comment-delete"><i class="fa fa-times"></i></a>*/
/*                         </span>*/
/*             </div>*/
/*             <input type="hidden" class="noteId" value="{{ note.getAttachment().getId() }}" />*/
/*             <input type="hidden" class="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*         </article>*/
/*     {% endfor %}*/
/* */
/*     {#<a href="#" class="show-more">Show All Notes</a>#}*/
/* </div>*/

<?php

/* blog/poster.html.twig */
class __TwigTemplate_14fab49d15f871cd36eac2d11b179fa7a50c18a9304cb3018f7017221fccb537 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/poster.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/poster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/poster.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Article Form</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_url\">URL</label>  
  <div class=\"col-md-4\">
  <input id=\"article_url\" name=\"article_url\" type=\"text\" placeholder=\"Article URL\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_title\">Title</label>  
  <div class=\"col-md-4\">
  <input id=\"article_title\" name=\"article_title\" type=\"text\" placeholder=\"article title\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_snippet\">Snippet</label>  
  <div class=\"col-md-4\">
  <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Article Snippet\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_date\">Date</label>  
  <div class=\"col-md-4\">
  <input id=\"article_date\" name=\"article_date\" type=\"text\" placeholder=\"article date of publication \" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_authors\">Authors</label>  
  <div class=\"col-md-4\">
  <input id=\"article_authors\" name=\"article_authors\" type=\"text\" placeholder=\"Article Authors\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- File Button --> 
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_image\">Image</label>
  <div class=\"col-md-4\">
    <input id=\"source_image\" name=\"source_image\" class=\"input-file\" type=\"file\">
  </div>
</div>

<!-- Textarea -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_description\">Description</label>
  <div class=\"col-md-4\">                     
    <textarea class=\"form-control\" id=\"source_description\" name=\"source_description\"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_categories\">Categories</label>
  <div class=\"col-md-4\">
    <select id=\"article_categories\" name=\"article_categories\" class=\"form-control\">
      <option value=\"1\">Option one</option>
      <option value=\"2\">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_tags\">Tage</label>
  <div class=\"col-md-4\">
    <select id=\"source_tags\" name=\"source_tags\" class=\"form-control\">
      <option value=\"\">Option one</option>
      <option value=\"\">Option two</option>
    </select>
  </div>
</div>

</fieldset>
</form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<form class=\"form-horizontal\">
<fieldset>

<!-- Form Name -->
<legend>Article Form</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_url\">URL</label>  
  <div class=\"col-md-4\">
  <input id=\"article_url\" name=\"article_url\" type=\"text\" placeholder=\"Article URL\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_title\">Title</label>  
  <div class=\"col-md-4\">
  <input id=\"article_title\" name=\"article_title\" type=\"text\" placeholder=\"article title\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_snippet\">Snippet</label>  
  <div class=\"col-md-4\">
  <input id=\"article_snippet\" name=\"article_snippet\" type=\"text\" placeholder=\"Article Snippet\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_date\">Date</label>  
  <div class=\"col-md-4\">
  <input id=\"article_date\" name=\"article_date\" type=\"text\" placeholder=\"article date of publication \" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_authors\">Authors</label>  
  <div class=\"col-md-4\">
  <input id=\"article_authors\" name=\"article_authors\" type=\"text\" placeholder=\"Article Authors\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- File Button --> 
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_image\">Image</label>
  <div class=\"col-md-4\">
    <input id=\"source_image\" name=\"source_image\" class=\"input-file\" type=\"file\">
  </div>
</div>

<!-- Textarea -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_description\">Description</label>
  <div class=\"col-md-4\">                     
    <textarea class=\"form-control\" id=\"source_description\" name=\"source_description\"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"article_categories\">Categories</label>
  <div class=\"col-md-4\">
    <select id=\"article_categories\" name=\"article_categories\" class=\"form-control\">
      <option value=\"1\">Option one</option>
      <option value=\"2\">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"source_tags\">Tage</label>
  <div class=\"col-md-4\">
    <select id=\"source_tags\" name=\"source_tags\" class=\"form-control\">
      <option value=\"\">Option one</option>
      <option value=\"\">Option two</option>
    </select>
  </div>
</div>

</fieldset>
</form>


{% endblock %}
", "blog/poster.html.twig", "/home/oguerisck/Developpement/Symfony3_Blog/app/Resources/views/blog/poster.html.twig");
    }
}

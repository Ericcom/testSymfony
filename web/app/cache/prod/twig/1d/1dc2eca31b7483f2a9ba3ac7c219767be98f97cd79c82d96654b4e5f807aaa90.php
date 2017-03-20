<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a0600060d15e3b519782e7cfde17579e4aa77a50165b0ab4f4d1eff3d2b41c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7d68439bf25d53ec0e378f5b32cb1f942b99a2877f0cfedbf2671691d8999df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d68439bf25d53ec0e378f5b32cb1f942b99a2877f0cfedbf2671691d8999df->enter($__internal_f7d68439bf25d53ec0e378f5b32cb1f942b99a2877f0cfedbf2671691d8999df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d68439bf25d53ec0e378f5b32cb1f942b99a2877f0cfedbf2671691d8999df->leave($__internal_f7d68439bf25d53ec0e378f5b32cb1f942b99a2877f0cfedbf2671691d8999df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fd019389254b4404fed12c4b30b50959ddcd83b6dc4f17de0f13145ceb7dd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd019389254b4404fed12c4b30b50959ddcd83b6dc4f17de0f13145ceb7dd45->enter($__internal_5fd019389254b4404fed12c4b30b50959ddcd83b6dc4f17de0f13145ceb7dd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fd019389254b4404fed12c4b30b50959ddcd83b6dc4f17de0f13145ceb7dd45->leave($__internal_5fd019389254b4404fed12c4b30b50959ddcd83b6dc4f17de0f13145ceb7dd45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b5b9bad19292100e80a30ad376c6ad0d9f3c7ce9d79c49a2c96e8fe7598b762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5b9bad19292100e80a30ad376c6ad0d9f3c7ce9d79c49a2c96e8fe7598b762->enter($__internal_3b5b9bad19292100e80a30ad376c6ad0d9f3c7ce9d79c49a2c96e8fe7598b762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b5b9bad19292100e80a30ad376c6ad0d9f3c7ce9d79c49a2c96e8fe7598b762->leave($__internal_3b5b9bad19292100e80a30ad376c6ad0d9f3c7ce9d79c49a2c96e8fe7598b762_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf46d6f2bf16f69960aa27cac0731c3a9b80cdb94f77d71787ac324ba577ab8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf46d6f2bf16f69960aa27cac0731c3a9b80cdb94f77d71787ac324ba577ab8f->enter($__internal_cf46d6f2bf16f69960aa27cac0731c3a9b80cdb94f77d71787ac324ba577ab8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cf46d6f2bf16f69960aa27cac0731c3a9b80cdb94f77d71787ac324ba577ab8f->leave($__internal_cf46d6f2bf16f69960aa27cac0731c3a9b80cdb94f77d71787ac324ba577ab8f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/yinliang/testSymfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
